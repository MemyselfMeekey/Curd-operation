<?php
include_once( 'connect.php');

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="Delete from `curd` Where id= $id";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"Deleted sucessfully";
    }
    else{
        die(mysqli_connect_error());

    }
}
?>