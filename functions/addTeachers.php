<?php
session_start();
require("../connect.php");

if(!isset($_SESSION['name'])){
    header("Location: ../login.php");
}
if($_POST){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $class = $_POST['class'];

    $existingStudent = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM teacher_details WHERE `email` = '$email'"));
    if($existingStudent != 0){
        echo "<script>alert('Teacher already exist');</script>";
        echo "<script>location.href = '../teachers.php'</script>";
        exit;
    }

    $sql = "INSERT INTO teacher_details (id, idtext, name, email, number, address, class) VALUES (NULL, '$id', '$name', '$email', '$number', '$address', '$class')";
    $res = mysqli_query($conn, $sql);
    if($res){
        echo "<script>alert('Details Added Successfully');</script>";
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