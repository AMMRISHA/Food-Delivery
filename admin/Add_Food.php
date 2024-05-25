<?php
// initalize the session
session_start();
// connect database
$conn = new mysqli("localhost","root","","admin");
// initialize variable
$SNo=$Name=$Price="";
// initialize update
$update= false;
// if user selects edit or update
if(isset($_REQUEST['edit']))
{
    // store the food from request superglobal in session variable for update
    $_SESSION['SNo']=$_REQUEST['edit'];
    // set update to true 
    $update=true;

}

if(isset($_REQUEST['save'])){
    // get the user inputs from the html form
    $Name=$_REQUEST['Name'];
    $Price=$_REQUEST['Price'];
    // insert new record
    $conn->query("INSERT INTO `add_food` (`SNo`, `Name`, `Price`) VALUES ('$SNo.', '$Name', '$Price');");
    // alert the user 
    echo "<script>alert(\"Saved!\")</script>";
    header("Refresh:0;url=Add_Food.php");
}
    if(isset($_REQUEST['del']))
    {
        // get the id from request superglobal
           $SNo=$_REQUEST['del'];
           $conn->query("DELETE FROM `add_food` WHERE `add_food`.`SNo`=$SNo");
        //    fire the sql query to delete the row W.R.T Food_Id 
        echo"<script> alert(\"deleted!\")</script>" ;
        header("Refresh:0; url=Add_Food.php");

        
    }

    if(isset($_REQUEST['update']))
    {
    //  store the id from session variable and rest from the request superglobal
    $SNo=$_SESSION['SNo'];
    $Name=$_REQUEST['Name'];
    $Price=$_REQUEST['Price'];
    // update the table with user input
    $conn-> query("UPDATE `add_food` SET `SNo`='$SNo',`Name`='$Name',`Price`='$Price' WHERE `add_food`.`SNo`=$SNo");
    // alert the user
    echo "<script>alert(\"updated!\")</script>";
    header("Refresh:0;url=Add_Food.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Foods</title>

</head>
<style type="text/css">
   
    body{
        background:linear-gradient(to top ,rgba(0,0,0,0.6)50%,rgba(0,0,0,0.6)50%),url(Chicken-Biryani.jpg);
    }
    .C-D{
        margin:auto;
        justify-content:center;
        align-items:center;
        text-align:center;
        font-size:1.5rem;
        color:white;
    }
 table{
     margin-top:20px;
 border: medium solid orange;
 color:white;
 width: 50%;
 font-size: 1rem;
 text-align: justify;
 padding: 5px;
 }

 
 form{
    color:white;
 text-align: left;
 width: 50%;
 margin: auto;
 font-size: 1.5rem;
 border-style: solid;
 border-width: medium;
 padding: 10px;
 }
 .input{
    color:white;
 height: 20px;
 width: 70%; 
 }
 #submit{
 font-size: 1.5rem;
 color:white;
 padding:4px 5px;
 border-radius:10px;
 background-color:#ff7200;
 border:2px solid white;
 width: 120px;
 }
 .add-item{
     background-color:#ff7200;
     color:white;
     padding:5px;
     border:2px solid white;
     border-radius:5px;
 }
 th{
    color:cream;
     padding-left:5px;
 }
 ::placeholder{
color:black;
 }
 table caption{
    color:white;
     font-size:1.1rem;
 }
</style>
<body>
<div class="C-D"> <span>CUSTOMER DETAILS<span></div>
 <form action="" method="post">
 <div style="font-size: 1.5rem;"> Customer Details</div>
 <p><b> Food_Name : </b><input type="text" class="input" name="Name" placeholder="Food_name"
required></p>
 <p><b>Price : </b><input type="text" class="input" name="Price" placholder="Price"
required></p>
 
 <div><center><input type="save" name ="save" id="save" 
value="Add_item"></center></div>
 </form> 
 <br>
 <table align="center" >
 <caption>Food Items</caption>
 <tr>
 <th>Item</th>
 <th>Price</th>
 <th colspan="2">Action</th>
 </tr> 
 <!-- display food items dynamically -->
 <?php 
//  fetch all the rows from the table 
while($r=mysqli_fetch_assoc($res))
{
    // show the records as table elements
    echo "<tr>";
    echo "<td>".$r['SNo']."</td>";
    echo "<td>".$r['Name']."</td>";
    echo "<td>".$r['Price']."</td>";
    // saved the url to edit or delete records with in table
    echo "<td><a href= Add_Food.php?edit=".$r['SNo'].">Edit</a></td>";
    echo "<td><a href= Add_Food.php?del=".$r['SNo'].">Delete</a></td>";

}
 ?>
 </table>
 <script>
 function addItem(item, price) 
 {
 var qty = document.getElementById(item).value;
 if (qty > 0)
 {
 window.location.href = 
'asmn8.php?item='+item+'&price='+price+'&qty='+qty;
 alert("Item Added");
 } 
 else 
 {
 alert("Please enter quantity");
 }
 }
 </script>

</body>
</html>
