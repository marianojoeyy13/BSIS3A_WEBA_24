<?php include "../app/views/partials/header.php"; ?>

<div class="container d-flex justify-content-center">

  <form action="" method="POST" class="w-50 mt-5">
    <h2>Edit User</h2>

    <div class="mb-2">
      <label for="">Role</label>
      <select name="role" class="form-control">
        <option value="">Choose a Role</option>
        <option <?= $row->role = 'Admin' ? 'selected' : '' ?> value="Admin">Admin</option>
        <option <?= $row->role = 'User' ? 'selected' : '' ?> value="User">User</option>
      </select>
    </div>
    <div class="mb-2">
      <label for="">First Name</label>
      <input name="firstname" value="<?= $row->firstname ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Last Name</label>
      <input name="lastname" value="<?= $row->lastname ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Email</label>
      <input name="email" value="<?= $row->email ?>" type="email" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Password</label>
      <input name="password" value="<?= $row->password ?>" type="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

<?php include "../app/views/partials/footer.php"; ?>