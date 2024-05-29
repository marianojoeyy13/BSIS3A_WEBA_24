<?php include "../app/views/partials/header.php"; ?>

<div class="container d-flex justify-content-center">

  <form action="" method="POST" class="w-50 mt-5">
    <h2>Delete User</h2>
    <div class="mb-2">
      <label for="">First Name</label>
      <input name="firstname" disabled value="<?= $row->firstname ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input name="lastname" disabled value="<?= $row->lastname ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Email</label>
      <input name="email" disabled value="<?= $row->email ?>" type="email" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Password</label>
      <input name="password" disabled value="<?= $row->password ?>" type="password" class="form-control">
    </div>
    <input type="hidden" name="id" value="<?= $row->id ?>">
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>
</div>

<?php include "../app/views/partials/footer.php"; ?>