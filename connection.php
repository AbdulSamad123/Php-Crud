<?php

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
            echo "<td class='text-warning'>" . '<a href="update_data.php?id='.$row[0].'"><i class="bi-PHONE"></i> </a> | <a href="delete.php?id='.$row[0].'"><i class="bi-trash"></i> </a>' . '</td>';
            echo '</tr>';
        }
    }

  }

?>