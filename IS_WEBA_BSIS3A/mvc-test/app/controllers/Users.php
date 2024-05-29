<?php

class Users extends Controller
{
  public function index()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new User();
    $rows = $x->findAll();

    $this->view('users/index', [
      'rows' => $rows
    ]);
  }

  public function create()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $errors = [];
    $user = new User();

    if (count($_POST) > 0) {

      if ($user->validate($_POST)) {

        // check for files
        if (count($_FILES) > 0) {
          $allowed[] = 'image/png';
          $allowed[] = 'image/jpeg';

          if ($_FILES['image']['error'] == 0 && in_array($_FILES['image']['type'], $allowed)) {
            $folder = "assets/images/";
            if (!file_exists($folder)) {
              mkdir($folder, 0777, true);
            }
            $destination = $folder . $_FILES['image']['name'];

            move_uploaded_file($_FILES['image']['tmp_name'], $destination);
            $_POST['image'] = $destination;
          }

          $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
          $_POST['token'] = random_string(60);

          $user->insert($_POST);

          redirect('users');
        }
      } else {
        $errors = $user->errors;
      }
    }

    $this->view('users/create', [
      'errors' => $errors
    ]);
  }

  public function edit($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new User();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $x->update($id, $_POST);

      redirect('users');
    }

    $this->view('users/edit', [
      'row' => $row
    ]);
  }

  public function delete($id)
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    $x = new User();
    $arr['id'] = $id;
    $row = $x->first($arr);

    if (count($_POST) > 0) {

      $destination = $row->image;
      if (unlink($destination)) {
        $x->delete($id);
      } else {
        $x->delete($id);
      }

      redirect('users');
    }

    $this->view('users/delete', [
      'row' => $row
    ]);
  }
}