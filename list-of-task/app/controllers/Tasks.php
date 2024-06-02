<?php

class Tasks extends Controller
{
  public function index()
  {
    $task = new Task();

    $data = $task->findAll();

    $this->view('task/index',[
      'data' => $data
    ]);
  }

  public function create()
  {
    
    if(isset($_POST['create'])){

      $task = new Task();

      $arr['task_name'] = $_POST['name'];
      $arr['task_description'] = $_POST['description'];
      $arr['task_due'] = $_POST['duedate'];
      $arr['task_status'] = "Ongoing";

      $data = $task->insert($arr);
      echo'
        <script>
            alert("Added Successfully!")
            window.location.href="'.ROOT.'/tasks/index";
        </script>
      
      ';

    }else{
      $this->view('task/create');
    }
  
  }

  public function edit($id)
  {
    if(isset($_POST['update'])){
      $task = new Task();
      $arr['task_name'] = $_POST['name'];
      $arr['task_description'] = $_POST['description'];
      $arr['task_due'] = $_POST['duedate'];

      $data = $task->update($id,$arr);
      echo'
        <script>
            alert("Updated Successfully!")
            window.location.href="'.ROOT.'/tasks/index";
        </script>
      
      ';

    }else{
    $task = new Task();
    $arr['id'] = $id;
    $data = $task->where($arr);
    $row= $data[0];
    $this->view('task/edit',[
      'row' => $row
    ]);}
  }

  public function delete($id)
  {
    if(isset($_POST['delete'])){
      $task = new Task();
      $data = $task->delete($id);
      echo'
        <script>
            alert("Deleted Successfully!")
            window.location.href="'.ROOT.'/tasks/index";
        </script>
      
      ';

    }else{
    $task = new Task();
    $arr['id'] = $id;
    $data = $task->where($arr);
    $row= $data[0];
    $this->view('task/delete',[
      'row' => $row
    ]);}
  }

  public function complete($id)
  {
      $task = new Task();
      $arr['task_status'] = "Completed";

      $task->update($id,$arr);
      echo'
      <script>
          alert("Completed Successfully!")
          window.location.href="'.ROOT.'/tasks/index";
      </script>
    
    ';
  }

}