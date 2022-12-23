<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Details - Student Management System</title>
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
                </div></a>
            </div>
        </div>



        <div class="dashboard_contents ">
            <div class="text_content">
                <p class="textC">School Details</p>
            </div>
            <div class="main main2">
                <div class="firstsection">
                    <div class="profileimage_container">
                        <img src="images/gcs.jpg" class="profileimage">
                    </div>
                    <div class="alter">
                        <input type="file" name="file" class="file" >
                        <a href="editschool.php"><button class="update">Update School Info</button></a>
                        <!-- <button class="reset">Delete School Info</button> -->
                    </div>
                </div>
                <div class="secondsection">
                    <div class="headerportion">
                        <p class="adminname  same">School Name: </p>
                        <p class="adminemail same">School E-Mail: </p>
                        <p class="country same">Address:</p>
                        <p class="schoolnumber same">Number:</p>
                    </div>
                    <div class="contentportion">
                        <p class="adminname  same">Global Collegiate School</p>
                        <p class="adminemail same">globalcollegiate123@gmail.com</p>
                        <p class="country same">Ranipauwa-14, Pokhara, Nepal</p>
                        <p class="schoolnumber same">061-539511</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>