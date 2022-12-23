<?php
session_start();
require("../connect.php");

if(!isset($_SESSION['name'])){
    header("Location: ../login.php");
}
if($_GET){
  
    $id = $_GET['id'];

    $sql = "DELETE FROM teacher_details WHERE id = '$id'";
    $res = mysqli_query($conn, $sql);
    if($res){
        echo "<script>alert('Details Deleted Successfully');</script>";
        echo "<script>location.href = '../teachers.php'</script>";
    }
    else{
        echo "<script>alert('Some error occured');</script>";
        echo "<script>location.href = '../teachers.php'</script>";
    }
}
else{
    echo "<script>alert('Some error occured');</script>";
    echo "<script>location.href = '../teachers.php'</script>";
}