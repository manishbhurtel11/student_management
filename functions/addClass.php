<?php
require('../connect.php');
                    if($_POST){
                    $class = $_POST['class'];
                    $submit = mysqli_query($conn, "INSERT INTO class (class_id, class_name) VALUES (NULL, '$class')");
                    header("location: ../class.php");
                    }
                ?>