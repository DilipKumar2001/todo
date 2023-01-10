<?php include 'inc/header.php'; ?>
<?php
if(isset($_POST['add']))
{
  $obj->addtodo();
}

if(isset($_POST['delete']))
{
  $obj->deletetodo();
}

if(isset($_POST['chk']))
{
  $obj->edittodo();
}
?>
<section class="container" style="height: 100%;">
  <div class="card" style="height: 100%;">
    <div class="card-header">
      <form class="row justify-content-center" action="index.php" method="post">
        <div class="col-8"><input type="text" class="form-control form-control-lg me-2" name="todo" placeholder="Enter The Task" required></div>
        <div class="col-2"><button type="submit" name="add" class="btn btn-hv btn-lg"> Add </button></div>
      </form>
    </div>
    <div class="card-body overflow-scroll">
      <table class="table table-bordered">
        <thead>
          <th style="width: 8%;text-align:center;font-size:20px;">S.No.</th>
          <th style="width: 70%;text-align:center;font-size:20px;">ToDo</th>
          <th style="text-align:center;font-size:20px;">Action</th>
        </thead>
        <tbody>
          <?php $obj->fetchtodo();  ?>
        </tbody>
      </table>
    </div>

  </div>
</section>


<?php include 'inc/footer.php'; ?>