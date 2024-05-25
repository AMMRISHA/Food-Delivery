<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
  
     
</head>
<body>

<div class="container ">
   <div class="row">
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/veg briyani.jpg" class="card-img-top" alt="---">
               <div class="text" >
               <h5 class="card-title">Veg Briyani</h5>
               <p class="card-text">price Rs.120</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="veg briyani">
               <input type="hidden" name="price" value="120">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/mutton briyani.webp" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Mutton Briyani</h5>
               <p class="card-text">price Rs.250</p>
               <button type="submit"name="add-to-cart"  class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="mutton briyani">
               <input type="hidden" name="price" value="250">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/Briyani.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Chicken Briyani</h5>
               <p class="card-text">price Rs.200</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="Briyani">
               <input type="hidden" name="price" value="200">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/Paneer_Briyani.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Paneer Briyani</h5>
               <p class="card-text">price Rs.180</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="Paneer_Briyani">
               <input type="hidden" name="price" value="180">
               </div>
            </div>
         </form>
       </div>
   </div>
</div>
</body>
</html>