<?php include "../app/views/partials/header.php"; ?>

<div style="padding:0;padding-top:1%;padding-bottom:1%;margin-0;background-color: mediumseagreen" class="container mt-5"><br>
<a style="text-decoration:none;background-color: green;color: white;padding: 10px 20px; border: none;border-radius: 4px;cursor: pointer;" href="<?= ROOT ?>/tasks/create" class="btn btn-primary">+ Add New</a><br><br>
  <div style="background-color:whitesmoke;max-height:555px;height: 400px;width: 1150px; overflow:scroll;" class="fortable">
  

    

  

  <table style="padding: 20px; "class="table">
    <tr>
      <th style="width: 14%">ID</th>
      <th style="width: 14%">NAME</th>
      <th style="width: 14%">DESCRIPTION</th>
      <th style="width: 14%">STATUS</th>
      <th style="width: 14%">DUE DATE</th>
      <th style="width: 14%">ACTION</th>
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
</div>
<?php include "../app/views/partials/footer.php"; ?>