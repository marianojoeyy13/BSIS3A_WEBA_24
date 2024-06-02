<?php include "../app/views/partials/header.php"; ?>

<div class="container mt-5">

  <div class="d-flex justify-content-between align-items-center">
  

    <a href="<?= ROOT ?>/tasks/create" class="btn btn-primary">+ Add New</a>

  </div>

  <table class="table table-striped mt-3">
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>DESCRIPTION</th>
      <th>STATUS</th>
      <th>DUE DATE</th>
      <th>ACTION</th>
    </tr>

    <?php if(!empty($data)){ foreach($data as $row){?>

    <tr>
        <td><?=  $row->id ?></td>
        <td><?=  $row->task_name ?></td>
        <td><?=  $row->task_description ?></td>
        <td><?=  $row->task_status ?></td>
        <td><?=  $row->task_due ?></td>

        <td>
          <a href="<?=ROOT?>/tasks/edit/<?=$row->id?>" class="btn btn-warning">edit</a>
          <a href="<?=ROOT?>/tasks/delete/<?=$row->id?>" class="btn btn-danger">delete</a>
          <a href="<?=ROOT?>/tasks/complete/<?=$row->id?>" class="btn btn-success" style="display: <?=($row->task_status=="Completed") ? "none": "show" ;?>">Complete</a>
        </td>

      </tr>
      <?php }} ?>
  </table>

</div>

<?php include "../app/views/partials/footer.php"; ?>