<?php
session_start();
require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit the Teachers Details - Student Management System</title>
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
                <img src="images/profile.jpeg" alt="profileImage" class="image">
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
                <div class="logout childs">
                    <i class="fa-solid fa-right-from-bracket icons"></i>
                    <p class="text">Log Out</p>
                </div>
            </div>
        </div>


        <?php
        if ($_GET) {
            $id = $_GET['id'];
            $res = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM teacher_details WHERE id = $id"));
            if (!$res) {
                header("location: ./teachers.php");
            }
        ?>
        <div class="dashboard_contents ">
            <div class="text_content">
                <p class="textC">Teachers</p>
            </div>
            <div class="main main2" id="oops">
                <form action="editteachers.php" class="detailsform" method="post">
                    <p class="dheader"> Edit the Teachers Details</p>
                    <div class="username_section">
                        <label for="name" class="labels">Name</label>
                        <input type="text" name="name" class="name" value="<?php echo $res['name']; ?>">
                    </div>
                    <div class="email_section">
                        <label for="email" class="labels">E-Mail</label>
                        <input type="email" name="email" class="email" value="<?php echo $res['email']; ?>">
                    </div>
                    <div class="phone_section">
                        <label for="number" class="labels">Number</label>
                        <input type="number" name="number" class="number" value="<?php echo $res['number']; ?>">
                    </div>
                    <div class="address_section">
                        <label for="address" class="labels">Address</label>
                        <input type="text" name="address" class="address" value="<?php echo $res['address']; ?>">
                    </div>
                    <div class="email_section">
                        <label for="email" class="labels">Class</label>
                        <input type="text" name="class" class="email" value="<?php echo $res['class']; ?>">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="submits">
                        <input type="submit" value="Submit" class="submitbtn">
                    </div>
                </form>
                <?php
        }
            if ($_POST) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $number = $_POST['number'];
                $address = $_POST['address'];
                $class = $_POST['class'];
                $id = $_POST['id'];
                $submit = mysqli_query($conn, "UPDATE teacher_details SET name='$name', email = '$email', number = '$number', address = '$address', class='$class' WHERE id='$id'");
                header("location: ./teachers.php");
            }
                ?>
            </div>
        </div>
    </div>
</body>

</html>