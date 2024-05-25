<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"href="mycart.css"> 
</head>
<body>
<nav class="navbar ">
  <div class="container-fluid">
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" href="../index.html">Home</a>
        </li>
      </ul>
      <div>
        <?php
        $count=0;
        if(isset($_SESSION['cart']))
        {
          $count=count($_SESSION['cart']);
        }
        ?>
        <a class="btn btn-outline-success" href="cart.php">my cart(<?php echo "$count"; ?>)</a>
</div>
    </div>
  </div>
</nav>
</body>
</html>