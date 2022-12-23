<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit the Admin Profile Details - Student Management System</title>
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



        <div class="dashboard_contents dashboard_2">
            <div class="text_content">
                <p class="textC">Students</p>
            </div>
            <div class="main main2">
                <form action="edit.php" class="detailsform">
                    <p class="dheader"> Edit the Students Details</p>
                    <!-- <div class="id_section">
                        <label for="name" class="labels">Id</label>
                        <input type="text" name="id" class="id">
                    </div> -->
                    <div class="username_section">
                        <label for="name" class="labels">Name</label>
                        <input type="text" name="name" class="name">
                    </div>
                    <div class="phone_section">
                        <label for="number" class="labels">Number</label>
                        <input type="number" name="number" class="number">
                    </div>
                    <div class="address_section">
                        <label for="address" class="labels">Address</label>
                        <input type="text" name="address" class="address">
                    </div>
                    <div class="submits">
                        <input type="submit" value="Submit" class="submitbtn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>