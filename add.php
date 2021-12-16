<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $conn=mysqli_connect("localhost","root","0000","todo");
    if(!$conn)
        {
            echo mysqli_connect_error();
            exit;
        }

    $task=$_POST['task'];
    // $check=($_POST['check'])? 1 : 0 ;
    if(isset($_POST['task']))
    {
        $query="insert into tasks(task) values ('$task')";
    }
    if(mysqli_query($conn,$query))
    {
        header("Location:index.php");
    }
    else 
    {
        echo mysqli_error($conn);
    }
}
?>