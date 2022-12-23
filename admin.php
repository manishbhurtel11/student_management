<?php
session_start();
if (!isset($_SESSION)) {
    header("Location: http://localhost/management/login.php");
}
require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile - Student Management System</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="admin.css">
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
                        echo "<img src = '$folder'  class='image'>";
                    }
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
                <a href="school.php" class="anchor5 anchortag">
                    <div class="coins childs">
                        <i class="fa-sharp fa-solid fa-school icons"></i>
                        <p class="text">School</p>
                    </div>
                </a>
                <hr>
                <a href="login.php">
                    <div class="logout childs">
                        <i class="fa-solid fa-right-from-bracket icons"></i>
                        <p class="text">Log Out</p>
                    </div>
                </a>
            </div>
        </div>



        <div class="dashboard_contents ">
            <div class="text_content">
                <p class="textC">Admin Profile</p>
            </div>
            <div class="main main2">
                <div class="firstsection">
                    <div class="profileimage_container">
                        <?php
                    if (isset($_POST["imagesubmit"])) {
                        $filename = $_FILES['uploadfile']['name'];
                        $tempname = $_FILES['uploadfile']['tmp_name'];
                        $folder = "images/" . $filename;
                        // echo $folder;
                        move_uploaded_file($tempname, $folder);
                        echo "<img src = '$folder'  class='profileimage'>";
                    }
                    ?>
                        <!-- <img src="images/profile.jpeg" class="profileimage"> -->
                    </div>
                    <form action="admin.php" enctype="multipart/form-data" class="alter" method="POST">
                        <!-- <div class="alter"> -->
                        <input type="file" name="uploadfile" class="file">
                        <input type="submit" name="imagesubmit" value="Upload Image" class="update">
                        <a href="editadmin.php"> <button class="update">Update Profile</button></a>
                        <!-- </div> -->
                    </form>
                </div>
                <div class="secondsection">
                    <div class="headerportion">
                        <p class="adminname  same">Username: </p>
                        <p class="adminemail same">E-Mail: </p>
                        <p class="adminnumber same">Number:</p>
                        <p class="country same">Address:</p>
                    </div>

                    <?php
                    $email = $_SESSION['email'];
                    $res = mysqli_query($conn, "SELECT * FROM `login` WHERE email = '$email'");
                    while ($row = mysqli_fetch_array($res)) {
                    ?>
                    <div class="contentportion">
                        <p class="adminname  same"><?php echo $row['name'] ?></p>
                        <p class="adminemail same"><?php echo $row['email'] ?></p>
                        <p class="adminnumber same"><?php echo $row['number'] ?></p>
                        <p class="country same"><?php echo $row['address'] ?></p>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>