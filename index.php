<?php
$conn=mysqli_connect("localhost","root","0000","todo");
if(!$conn)
    {
        echo mysqli_connect_error();
        exit;
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/index.css">
        <title>To Do</title>
    </head>
    <body>
        <div class="form-div">
        <form method="POST" action="add.php">
            <div class="form-group">
            <input type="text" placeholder="Add A Task" name="task" class="form-control" autocomplete="off">
            <input type="submit" class="btn btn-primary form-control " value="Add">
            </div>
        </form>
        </div>
        <div class="tasks">
        <?php 
        $todos="select * from tasks";
        $res=mysqli_query($conn,$todos);    
        while ($row=mysqli_fetch_assoc($res)){            
        ?>
        <div class="task">
        <div class="card  ">
            <div class="card-body ">
                <input type="checkbox" name ="check" class="check" id="<?=$row['id']?>" 
                <?php if ($row['checked']==1) { echo "checked"; }?> >
                                             
                <h5 class="card-title " ><?=$row['task']?></h5>                
                <p class="card-text">created <?=$row['created']?></p>
                <i class="fa fa-trash delete" id="<?=$row['id']?>" ></i>


            </div>
        </div>
        </div>
        <?php } ?>
        </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/index.js"></script>        

    </body>

</html>