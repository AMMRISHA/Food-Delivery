<?php
 $con = mysqli_connect("localhost","root","","admin");
 // Check connection
 if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
   $status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $trn_date = date("Y-m-d H:i:s");
    $name =$_REQUEST['name'];
    $age = $_REQUEST['age'];
    $submittedby = $_SESSION["username"];
    $ins_query="insert into new_record
    (`trn_date`,`name`,`age`,`submittedby`)values
    ('$trn_date','$name','$age','$submittedby')";
    mysqli_query($con,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
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
 <div style="font-size: 1.5rem;"> add food items</div>
 <p><b> Food_Name : </b><input type="text" class="input" name="food_name" placeholder="Food_name"
required></p>
 <p><b>Price : </b><input type="text" class="input" name="number" placholder="Price"
required></p>
 
 <div><input type="submit" name ="checkout" id="submit" 
value="Add_item"></div>
 </form> 
 <br>
 <table align ="center" >
 <caption>Food Items</caption>
 <tr>
 <th>Item</th>
 <th>Price</th>
 <th colspan="2">Action</th>
 </tr> 
 <!-- display food items dynamically -->
 <?php 
 $res = mysqli_query($conn,"SELECT * FROM `pizza_details`");
 if(mysqli_num_rows($res) > 0)
 {

 while($r = mysqli_fetch_assoc($res))
 {
 echo "<tr>";
 echo "<td>".$r['food_item']."</td>";
 echo "<td>".$r['price']."</td>";

 echo '<td><input type="submit" value="Edit" 
onclick="addItem(\''.$r['food_item'].'\', '.$r['price'].');"></td>';
echo '<td><input type="submit" value="Delete" 
onclick="addItem(\''.$r['food_item'].'\', '.$r['price'].');"></td>';
 echo "</tr>";
 }
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
