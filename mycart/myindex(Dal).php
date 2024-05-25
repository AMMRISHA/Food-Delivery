<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <style>
       
        .card img{
            width:250px;
            height:200px;
        }
        </style>
</head>
<body>

<div class="container mt-5">
   <div class="row">
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/Moong_Dal.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Moong Dal</h5>
               <p class="card-text">price Rs.120</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="Moong_Dal">
               <input type="hidden" name="price" value="120">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/Dal_tadka.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Dal Tadka</h5>
               <p class="card-text">price Rs.150</p>
               <button type="submit"name="add-to-cart"  class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="Dal_tadka">
               <input type="hidden" name="price" value="150">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/Dal.png" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Dal</h5>
               <p class="card-text">price Rs.180</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="Dal">
               <input type="hidden" name="price" value="180">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/Cholar_Dal.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Cholar Dal</h5>
               <p class="card-text">price Rs.190</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="Cholar_Dal">
               <input type="hidden" name="price" value="190">
               </div>
            </div>
         </form>
       </div>
   </div>
</div>
</body>
</html>