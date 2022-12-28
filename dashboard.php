<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("location: http://localhost/management/login.php");
}
require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Student Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="dashboard.css">
    <script src="dashboard.js" defer></script>
</head>

<body>
    <div class="mainbody">
        <div class="close slider ">
            <div class="profile">
                <?php
                if (isset($_POST["imagesubmit"])) {
                    $filename = $_FILES['uploadfile']['name'];
                    $tempname = $_FILES['uploadfile']['tmp_name'];
                    $folder = "images/" . $filename;
                    // echo $folder;
                    move_uploaded_file($tempname, $folder);
                    $sql = "INSERT INTO image_details(user_image) VALUES(<img src = '$folder'  class='image'>)";
                    $results = mysqli_query($conn, $sql);

                }
                ?>
                <?php
                $image = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM image_details"))['user_image'];
                echo "<img src = '$image'  class='image'>";
                ?>
                <div class="profileText">
                    <p class="text maintext">John Doe</p>
                </div>
            </div>
            <div class="arrow">
                <i class="fa-solid fa-arrow-right-long"></i>
            </div>
            <div class="links">
                <div class="search">
                    <i class="fa-solid fa-magnifying-glass icons"></i><input type="search" placeholder="Search"
                        class="searchbtn">
                </div>


                <a href="dashboard.php" class="anchor1 anchortag">
                    <div class="dashboard childs">
                        <i class="fa-solid fa-house icons"></i>
                        <p class="text">Dashboard</p>
                    </div>
                </a>
                <a href="admin.php" class="anchor2 anchortag">
                    <div class="notifications childs">
                        <i class="fa-solid fa-user-tie icons"></i>
                        <p class="text">Admin</p>
                    </div>
                </a>
                <a href="students.php" class="anchor3 anchortag">
                    <div class="messages childs">
                        <i class="fa-solid fa-users icons"></i>
                        <p class="text">Students</p>
                    </div>
                </a>
                <a href="teachers.php" class="anchor4 anchortag">
                    <div class="heart childs">
                        <i class="fa-sharp fa-solid fa-users icons"></i>
                        <p class="text">Teachers</p>
                    </div>
                </a>
                <!-- <a href="school.php" class="anchor5 anchortag">
                    <div class="coins childs">
                        <i class="fa-sharp fa-solid fa-school icons"></i>
                        <p class="text">School</p>
                    </div>
                </a> -->
                <hr>

                <a href="logout.php">
                    <div class="logout childs">
                        <i class="fa-solid fa-right-from-bracket icons"></i>
                        <p class="text">Log Out</p>
                    </div>
                </a>
                <!-- <div class="toggle">
                    <input type="checkbox" class="checkbox">
                    <p class="text" id="toggleText">Dark Mode</p>
                </div> -->
            </div>
        </div>


        <div class="dashboard_contents">
            <div class="text_content">
                <p class="textC">Student Management System</p>
            </div>
            <div class="main">
                <a href="admin.php">
                    <div class="admin_profile maincontents">
                        Admin Profile
                    </div>
                </a>
                <a href="teachers.php">
                    <div class="teachers maincontents">
                        Teachers<br>
                        <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM teacher_details")); ?>
                    </div>
                </a>
                <a href="students.php">
                    <div class="students maincontents">
                        Students<br>
                        <?php echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM student_details")); ?>
                    </div>
                </a>
            </div>
        </div>

    </div>
</body>

</html>