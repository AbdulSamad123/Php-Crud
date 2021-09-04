<?php 
include "connection.php";
$obj=new functions();
$obj->con();
if(isset($_POST['btn_sub']))
{
        $obj->add($_POST['name'],$_POST['email'],$_POST['password']);   	
}

?>

<?php include "inc/header.php";?>

<?php include "inc/aside.php";?>

 <div class="container mt-5">
    <form method="post">
    <div class="mb-3">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Name" Required>
    </div>   
    <div class="mb-3">
        <label>Email address</label>
        <input type="email" name="email" class="form-control" placeholder="Enter E-mail" Required>
    </div>
    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter Password" Required>
    </div>
    <button type="submit" name="btn_sub" class="btn btn-primary">Submit</button>
    </form> 
</div>

<?php include "inc/footer.php";?>
