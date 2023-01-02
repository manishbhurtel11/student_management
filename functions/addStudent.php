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
    $roll = $_POST['roll'];

    $existingStudent = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM student_details WHERE `email` = '$email'"));
    if($existingStudent != 0){
        echo "<script>alert('Student already exist');</script>";
        echo "<script>location.href = '../students.php'</script>";
        exit;
    }

    $sql = "INSERT INTO student_details (id, idtext, name, email, number, address, class_id, roll) VALUES (NULL, '$id', '$name', '$email', '$number', '$address', '$class', '$roll')";
    $res = mysqli_query($conn, $sql);
    if($res){
        echo "<script>alert('Details Added Successfully');</script>";
        echo "<script>location.href = '../students.php'</script>";
    }
    else{
        echo "<script>alert('Some error occured');</script>";
        echo "<script>location.href = '../students.php'</script>";
    }
}
else{
    echo "<script>alert('Some error occured');</script>";
    echo "<script>location.href = '../students.php'</script>";
}