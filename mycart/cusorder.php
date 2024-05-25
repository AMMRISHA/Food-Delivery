<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        

      }
      .include{
        margin:auto;
        display:flex;
        flex-direction:row;
      }
      </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="#">Home</a>
        </li>
      </ul>
      </div>
  </div>
</nav>
<h2>Enter your name and Phone no to see your order details</h2>
<div class="include">
    <form action="cusorder.php" method="POST">
        <label for="full_name">Full-Name</label>
        <input type="text" name="full_name" autocomplete="off" required>
      <br><br>  <label for="phone no.">Phone no.</label>
        <input type="number" name="phone_no" autocomplete="off" required>
        <br><br><button type="submit">Submit</button>
    </form>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
        <table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Order_ID</th>
      <th scope="col">customer_name</th>
      <th scope="col">Phone. no</th>
      <th scope="col">Address</th>
      <th scope="col">Pay Mode</th>
      <th scope="col">orders</th>
    </tr>
  </thead>
  <tbody>
      <?php
        if(isset($_POST['full_name']) && isset($_POST['phone_no'])){
        $con=mysqli_connect("localhost","root","","admin");
        if(mysqli_connect_error()){
          echo"cannot connect to database";
          exit();
        }
        $em=$_POST['full_name'];
        $sm=$_POST['phone_no'];
      $query1="SELECT * FROM `order_maneger` WHERE `full_name` ='$em' AND `phone_no`='$sm'";
      $user_result=mysqli_query($con,$query1);
      while($user_fetch=mysqli_fetch_assoc($user_result))
      {
          echo"
          <tr>
        <td>$user_fetch[order_id]</td>  
        <td>$user_fetch[full_name]</td>
        <td>$user_fetch[phone_no]</td>
        <td>$user_fetch[address]</td>
        <td>$user_fetch[pay_mode]</td>
        <td>
        <table class='table text-center'>
        <thead>
          <tr>
            <th scope='col'>Food_item</th>
            <th scope='col'>Price</th>
            <th scope='col'>quantity</th>
          </tr>
        </thead>
        </tbody>
        ";
        $query2="SELECT * FROM `user_order` WHERE `order_id`='$user_fetch[order_id]'";
        $order_result=mysqli_query($con,$query2);
        while($order_fetch=mysqli_fetch_assoc($order_result))
        {
            echo"
             <tr>
             <td>$order_fetch[food_item]</td>
             <td>$order_fetch[price]</td>
             <td>$order_fetch[quantity]</td>
             </tr>
             ";
        }
        echo"
        </tbody>
        </table>
        </td>
        </tr>";
      }
    }
      ?>
        </div>
    </div>
</div>      
</body>
</html>