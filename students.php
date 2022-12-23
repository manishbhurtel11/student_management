<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("location: ./login.php");
}
require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Details - Student Management System</title>
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
                <p class="textC">Students Details</p>
            </div>
            <a href="addstudents.php"><button class="addstudents">Add Students</button></a>
            <div class="main main2" id="oops">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>Number</th>
                        <th>Address</th>
                        <th>Class</th>
                        <th>Roll No.</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM student_details ORDER BY name ASC";
                    $res = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($res) == 0) {
                        echo "<p>No records found.</p>";
                    } else {
                        while ($row = mysqli_fetch_assoc($res)) {
                    ?>
                    <tr>
                        <td><?php echo $row['idtext']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['number']?></td>
                        <td><?php echo $row['address']?></td>
                        <td><?php echo $row['class']?></td>
                        <td><?php echo $row['roll']?></td>
                        <td class="alteration"><a href="edit.php"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td class="alteration"><?php echo "<a href='functions/delete.php?id=".$row['id']."'>"; ?><i class="fa-solid fa-trash"></i></a></td>
                    </tr>
                    <?php
                        }
                    }
                        ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>