<?php

include "inc/header.php";
class functions
 {
    function con()
    {
        session_start();
        $conn = $_SESSION['conn'] = mysqli_connect( 'localhost', 'root', '', 'crud');
    }

    function add($name, $email, $password)
    {
           $conn = $_SESSION['conn'];
           $id="";
           $insert = mysqli_query( $conn, "insert into login values('$id','$name','$email','$password');" );
           if ( $insert )
           {
               echo "<script> alert('Data Added'); </script>";
           }
    }
    function view()
	{
		$conn=$_SESSION['conn'];
		$sel=mysqli_query($conn,"select * from login");
		$num=mysqli_num_rows($sel);
		for($i=1; $i<=$num; $i++)
        {
            $row = mysqli_fetch_array( $sel );
            echo '<tr>';
            echo '<td>' . $i . '</td>';
            echo '<td>' . $row[1] . '</td>';
            echo '<td>' . $row[2] . '</td>';
            echo '<td>' . $row[3] . '</td>';
            echo '<td>' . '<a href="update.php?id='.$row[0].'">Edit</a> | <a class="text black" href="delete.php?id='.$row[0].'">Delete</a>' . '</td>';
            echo '</tr>';
        }
    }
    function update($name,$email,$password)
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $name = $_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query = mysqli_query( $conn, "update login set name='".$name."', email='".$email."', password='".$password."' where id='".$id."'");
        if ($query)
        {
            echo "<script> alert('Data Updated');</script>";
            echo "<script> window.location.assign('view_data.php');</script>";
        }
                
    }
    function delete()
    {
        $conn = $_SESSION['conn'];
        $id= $_GET['id'];
        $select = mysqli_query($conn,"delete from login where id='$id'");
        if ($select)
        {
            echo "<script> alert('Data deleted');</script>";
            header("view_data.php");
        }
                
    }

  }
  include "inc/footer.php";
?>