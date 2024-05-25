<?php
session_start();
$con=mysqli_connect("localhost","root","","");
if(mysqli_connect_error()){
    echo"<script>
    alert('cannot connet to database');
    window.location.href='cart.php'
    </script>";
    exit();
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['submit']))
    {
       $query1="INSERT INTO `order_maneger`(`full_name`, `phone_no`, `address`, `pay_mode`) VALUES ('$_POST[full_name]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')";
       if(mysqli_query($con,$query1))
       {
         $order_id=mysqli_insert_id($con);  
         $query2="INSERT INTO `user_order`(`order_id`, `food_item`, `price`, `quantity`) VALUES (?,?,?,?)";
         $stmt=mysqli_prepare($con,$query2);
         if($stmt)
         {
           mysqli_stmt_bind_param($stmt,"isii",$order_id,$food_item,$price,$quantity);
           foreach($_SESSION['cart'] as $key => $values)
           {
               $food_item=$values['food_item'];
               $price=$values['price'];
               $quantity=$values['quantity'];
               mysqli_stmt_execute($stmt);
           }
           unset($_SESSION['cart']);
           echo"<script>
        alert('order placed your order delivered in 40 minutes');
        window.location.href='cart.php';
        </script>";
         }
    else
    {echo"<script>
        alert('sql query prepare error');
        window.location.href='cart.php';
        </script>";

    }
       }
       else
       {
        echo"<script>
        alert('sql error');
        window.location.href='cart.php';
        </script>";
       }
    }
}
?>
