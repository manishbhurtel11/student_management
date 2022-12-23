<?php
session_start(); //start the session
//check if the user is already logged in
if (isset($_SESSION)) {
    echo "<script>location.href='http://localhost/management/dashboard.php'</script>";
}
//get the connection details
require("connect.php");
//check if the data received from the form
if ($_POST) {
    $uname = $_POST['name'];
    $uemail = $_POST['email'];
    $upassword = $_POST['password'];
} else {
    echo "<script>alert('Some Error Occurred. Proceed Again!')</script>";
    echo "<script>location.href='http://localhost/management/login.php'</script>";
}
$sql = "SELECT * FROM `login` WHERE email = '$uemail'";
//Query the SQL Statement
$res = mysqli_query($conn, $sql);
//check if the user exists in the database or not
if (mysqli_num_rows($res) > 0) {
    //get the information of single user
    while ($row = mysqli_fetch_assoc($res)) {
        $name = $row['name'];
        $email = $row['email'];
        $password = $row['password'];
    }
    //check if the credentials match
    if ($name == $uname && $password == $upassword && $email == $uemail) {
        //assign the session variable
        $_SESSION['name'] = $uname;
        $_SESSION['email'] = $uemail;
        //check it the session is created or not
        if ($_SESSION['name'] == $uname) {
            session_write_close();
            echo "<script>alert('Login Successful')</script>";
            echo "<script>location.href='http://localhost/management/dashboard.php'</script>";
        }
    } else {
        echo "<script>alert('Username or Password Incorrect')</script>";
        echo "<script>location.href='http://localhost/management/login.php'</script>";
    }
}
//if the user doesn't exist
else {
    echo "<script>alert('Username or Password Incorrect')</script>";
    echo "<script>location.href='http://localhost/management/login.php'</script>";
}