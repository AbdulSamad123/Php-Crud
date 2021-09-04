<?php 
include "connection.php";
$obj=new functions();
$obj->con();
?>

<?php include "inc/header.php";?>

<?php include "inc/aside.php";?>
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
      <?php $obj->view();?>
  </tbody>
</table>

<?php include "inc/footer.php";?>