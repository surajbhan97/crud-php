<?php
include('connect.php');

$id= $_GET['uid'];
if($id){

    $sql_del = "delete from crud where id= $id";
    $res = mysqli_query($conn,$sql_del);
    header('location:index.php');
}





?>