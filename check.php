<?php

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $conn=mysqli_connect("localhost","root","0000","todo");
    if(!$conn)
        {
            echo mysqli_connect_error();
            exit;
        }
    $id=$_POST['id'];
    $query="select id,checked from tasks where id = $id";
    $res=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($res);

    $check=($row['checked'])? 0 : 1 ;

    $query="UPDATE tasks SET checked=$check WHERE tasks.id = $id";    
    if(mysqli_query($conn,$query))
    {
        header("Location:index.php");
    }
    else 
    {echo mysqli_error($conn);}
    mysqli_close($conn);
}
?>