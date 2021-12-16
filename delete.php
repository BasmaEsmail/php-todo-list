<?php

    $conn=mysqli_connect("localhost","root","0000","todo");
    if(!$conn)
        {
            echo mysqli_connect_error();
            exit;
        }

    $id=$_POST['id'];
    if(isset($_POST['id']))
    {
        $query="delete from tasks where tasks.id = '$id' ";
    }
    if(mysqli_query($conn,$query))
    {
        header("Location:index.php");
    }
    else 
    {
        echo mysqli_error($conn);
    }
?>