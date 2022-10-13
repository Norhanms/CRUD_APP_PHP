<?php
include 'connect.php';
if(isset($_GET['deleteid'])){//check if the variable is declared and has a value and is not null
    $id=$_GET['deleteid'];
    $sql="delete from `crud` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "deleted successfuly";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>