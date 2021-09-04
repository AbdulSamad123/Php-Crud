<?php 
include "connection.php";
$obj=new functions();
$obj->con();
$id=$_GET['id']; 
$obj->delete($id);
?>

<?php include "inc/header.php";?>

<?php include "inc/aside.php";?>
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">E-mail</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <tr>
      <?php $obj->view();?>
      </tr>      
  </tbody>
</table>
</div>

<?php include "inc/footer.php";?>