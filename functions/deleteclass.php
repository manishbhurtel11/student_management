<?php
session_start();
require("../connect.php");

if(!isset($_SESSION['name'])){
    header("Location: ../login.php");
}
if($_GET){
  
    $id = $_GET['id'];

    $sql = "DELETE FROM class WHERE class_id = '$id'";
    $res = mysqli_query($conn, $sql);
    if($res){
        echo "<script>alert('Details Deleted Successfully');</script>";
        echo "<script>location.href = '../class.php'</script>";
    }
    else{
        echo "<script>alert('Some error occured');</script>";
        echo "<script>location.href = '../class.php'</script>";
    }
}
else{
    echo "<script>alert('Some error occured');</script>";
    echo "<script>location.href = '../class.php'</script>";
}