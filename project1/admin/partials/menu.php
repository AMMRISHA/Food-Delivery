<?php
session_start();
// connect to database
    define('SITEURL', 'http://localhost/admin/');
    $server = "localhost";
    $username = "root";
    $password = ""; //To be completed if you have set a password to root
    $database = "admin"; //To be completed to connect to a database. The database must exist.

    $conn = mysqli_connect($server,$username,$password,$database);

    /* if (!$conn) 
    {
        die("Sorry we faild to connect:". mysqil_connect_error());
    }
    else
    {
        echo "Connection Was Successful";
    }*/
?>
<html>
    <head>
        <title>Food Order Website - Home page</title>

        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="manage-food.php">Food</a></li>
                    <li><a href="admin_panel.php">Order</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>