<?php
 session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Bill</title>

</head>
<style type="text/css">
 table, th, tr, td{
 border: 1px solid;
 text-align: justify;
 border-collapse: collapse;
 padding: 5px;
 }
 @media print{
     #printpage{
         display:none;
     }
     #Submit{
         display:none;
     } 
     }
</style> 
<body>
 <table align="center" style="width: 50%;">
 <caption>Bill Details</caption>
 <tr>
 <th>Name</th>
 <th colspan="3"><?php echo $_SESSION['cust_name']; ?></th>
 </tr>
 <tr>
 <th>Phone</th>
 <th colspan="3"><?php echo $_SESSION['cust_phone']; ?></th>
 </tr>
 <tr>
 <th>Address</th>
 <th colspan="3"><?php echo $_SESSION['cust_address']; ?></th>
 </tr>
 <tr>
 <th>Item</th>
 <th>Unit Price</th>
 <th>Quantity</th>

 <th>Subtotal</th>
 </tr> 
 <button id="printpage" onclick="window.print()">Print bill</button>
 <a href="mailto:sharmiputu2001@gmail.com"><button id="Submit" onclick="window.print()">Order</button></a>
 <!-- print bill -->
 <?php
 foreach ($_SESSION['items'] as $item => $value) 
 {
 echo "<tr><td>$item</td>";
 foreach ($value as $val)
 {
 echo "<td>$val</td>";
 }
 echo "</tr>";
 }
 echo "<tr>";
 echo "<td colspan=\"3\">Total Price</td><td>". 
$_SESSION['total_ammount']."</td>";
 echo "<tr>";
 echo "<tr>";
 echo "<td colspan=\"3\">Net Price (after adding 15% 
GST)</td><td>". $_SESSION['net_ammount']."</td>";
 echo "<tr>";
 //destroy all session data
 session_destroy();
 ?>
 </table>
</body></html>