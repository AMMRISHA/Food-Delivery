<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Search</title>
</head>
<style type="text/css">
    table {
    width: 100%;
    color: black;
    font-family: fantasy;
    font-size: large;
    text-align: justify;
    padding: 2px;
    }
    th {
    background: brown;
    color: lavenderblush;
    font-family: fangsong;
    }
    td {
    background: lightcyan;
    }
    h1{
        background-color: blanchedalmond;
        text-align: center;
    }
</style>
<body>
    
<?php
    if(isset($_GET['food_item'])){
       $conn = mysqli_connect("localhost","root","","admin") or die("ould not connect to database");
       $em = $_GET['food_item'];
       $sql = "SELECT * FROM pizza_details WHERE food_item = '$em';";
       $result = mysqli_query($conn,$sql);
       if($result == true){
           if(mysqli_num_rows($result) == 0){
               echo "<br><b> No results </b><br>";
           }
           else{
               echo "<table><tr><th>Food-Name</th><th>Price</th></tr>";
                while($r = mysqli_fetch_assoc($result)){
                    echo "<tr><td>" . $r['food_item'] . "</td><td>" . $r['price'] , "</td></tr></table>";
                }
           }
       }
       mysqli_close($conn);
    }
    ?>
</body>
</html>
