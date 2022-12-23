<?php
session_start(); //start session
if (
    isset($_SESSION) && //check if logged in
    session_unset() && //unset session variable
    session_destroy() //destroy session
) {
    echo "<script>alert('Logout Successful')</script>";
    echo "<script>location.href='http://localhost/management/login.php'</script>";
} else {
    echo "<script>location.href='http://localhost/management/login.php'</script>";
}
