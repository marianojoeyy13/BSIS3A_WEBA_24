<?php include "../app/views/partials/header.php"; ?>

<div class="container d-flex justify-content-center">

    <form action="" method="POST" enctype="multipart/form-data" class="w-50 mt-5">
        <h2>Delete Task</h2>
        <br><br>
        <div class="mb-2">
            <label for="">NAME</label>
            <input name="name"  type="text" value="<?=$row->task_name?>" class="form-control" readonly>
        </div>
        <br>
        <div class="mb-2">
            <label for="">DESCRIPTION</label>
            <input name="description" value="<?=$row->task_description?>" type="text" class="form-control" readonly>
        </div>
        <br>
        <div class="mb-2">
            <label for="">STATUS</label>
            <input name="description" value="<?=$row->task_status?>" type="text" class="form-control" readonly>
        </div>
        <br>
        <div class="mb-2">
            <label for="">DUE DATE</label>
            <input name="duedate" value="<?=$row->task_due?>" type="date" class="form-control" readonly>
        </div>
        <br><br>
        <button type="submit" class="btn btn-danger" name="delete">Delete</button>
    </form>
</div>

<?php include "../app/views/partials/footer.php"; ?>