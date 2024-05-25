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
               <img src="img/Paneer_Niramish.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Paneer_Niramish</h5>
               <p class="card-text">price Rs.220</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="Paneer_Niramish">
               <input type="hidden" name="price" value="120">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/Sukto.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Sukto</h5>
               <p class="card-text">price Rs.150</p>
               <button type="submit"name="add-to-cart"  class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="Sukto">
               <input type="hidden" name="price" value="150">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/Kofta_curry.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Kofta Curry</h5>
               <p class="card-text">price Rs.180</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="Kofta_curry">
               <input type="hidden" name="price" value="180">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/Kashmiri_alur_dam.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Kashmiri Alur Dam</h5>
               <p class="card-text">price Rs.190</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="Kashmiri_alur_dam">
               <input type="hidden" name="price" value="190">
               </div>
            </div>
         </form>
       </div>
   </div>
</div>
</body>
</html>