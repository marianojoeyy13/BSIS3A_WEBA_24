<?php include "../app/views/partials/header.php"; ?>

<div class="container d-flex justify-content-center">

    <form action="" method="POST" enctype="multipart/form-data" class="w-50 mt-5">
        <h2>Create Task</h2>
        <br><br>
        <div class="mb-2">
            <label for="">NAME</label>
            <input name="name" value="<?= get_var('name') ?>" type="text" class="form-control" required>
        </div>
        <br>
        <div class="mb-2">
            <label for="">DESCRIPTION</label>
            <input name="description" value="<?= get_var('description') ?>" type="text" class="form-control" required>
        </div>
        <br>
        <div class="mb-2">
            <label for="">DUE DATE</label>
            <input name="duedate" value="<?= get_var('duedate') ?>" type="date" class="form-control" required>
        </div>
        <br><br>
        <button type="submit" class="btn btn-primary" name="create">Create</button>
    </form>
</div>

<?php include "../app/views/partials/footer.php"; ?>