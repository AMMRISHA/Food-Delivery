<?php
 session_start();
 // sessiom variable to store no of items in cart
 if (!isset($_SESSION['item_count']))
 {
 $_SESSION['item_count'] = 0;
 }
 // connect to database
 $conn = mysqli_connect("localhost","root","","admin") or
die("Database connection failed");
 // add item to cart
 if (isset($_REQUEST['qty']))
 {
 $item = $_REQUEST['item'];
 $price = $_REQUEST['price'];
 $qty = $_REQUEST['qty'];
 // store item details
 $_SESSION['items'][$item] = array($price, $qty, $price * $qty);
 $_SESSION['item_count']++;
 header("Refresh:1; url= asmn8.php");
 }
 // checkout and generate bill
 if (isset($_REQUEST['checkout']))
 {
 if ($_SESSION['item_count'] == 0)
 {
 echo "<script>alert('Your cart is empty')</script>";
 }
 else
 {
 // get customer info and store into session
 $_SESSION['cust_name'] = $_REQUEST['name'];
 $_SESSION['cust_phone'] = $_REQUEST['phone'];
 $_SESSION['cust_address'] = $_REQUEST['address'];
 // calculate bill ammount
 $total = 0;
 $net = 0;
 foreach ($_SESSION['items'] as $item => $value) 
 {
 $total += $value[2];
 }
 //net is 15% of total
 $net += $total + round(($total * 15) / 100);
 $_SESSION['total_ammount'] = $total;
 $_SESSION['net_ammount'] = $net;
 // close connection
 mysqli_close($conn);
 // redirect to bill page
 header("Location: asmn8(bill).php");
 }
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
 table caption{
    color:white;
     font-size:1.1rem;
 }
</style>
<body>
<div class="C-D"> <span>CUSTOMER DETAILS<span></div>
 <form action="" method="post">
 <div style="font-size: 1.5rem;"> Customer Details</div>
 <p><b>Name : </b><input type="text" class="input" name="name" 
required></p>
 <p><b>Phone : </b><input type="text" class="input" name="phone" 
required></p>
 <p><b>Address : </b><input type="text" class="input" name="address" 
required></p>
 <div><center><input type="submit" name ="checkout" id="submit" 
value="Checkout"></center></div>
 </form> 
 <br>
 <table align="center" >
 <caption>Food Items</caption>
 <tr>
 <th>Item</th>
 <th>Price</th>
 <th>Quantity</th>
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
 echo '<td><input type="number" id="'.$r['food_item'].'" 
required></td>';
 echo '<td><input type="submit" value="Add Item" 
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
