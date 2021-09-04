<?php 
include "connection.php";
$obj=new functions();
$obj->con();
$conn = $_SESSION['conn'];
$id = $_GET['id'];
$select = mysqli_query( $conn, "select * from login where id='$id'" );
$row = mysqli_fetch_array( $select );
if(isset($_POST['btn_update']))
{
        $obj->update($_POST['name'],$_POST['email'],$_POST['password']);   	
}

?>

<?php include "inc/header.php";?>

<?php include "inc/aside.php";?>

 <div class="container mt-5">
    <form method="post">
    <div class="mb-3">
        <label>Id</label>
        <input type="text" value="<?php echo $row[0];?>"  class="form-control" name="id" readonly name="id" required>
    </div>
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $row[1];?>" class="form-control" placeholder="Enter Name" Required>
    </div>   
    <div class="mb-3">
        <label>Email address</label>
        <input type="email" name="email" value="<?php echo $row[2];?>" class="form-control" placeholder="Enter E-mail" Required>
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="text" name="password" value="<?php echo $row[3];?>" class="form-control" placeholder="Enter Password" Required>
    </div>
    <button type="submit" name="btn_update" class="btn btn-primary">Update</button>
    </form> 
</div>

<?php include "inc/footer.php";?>
