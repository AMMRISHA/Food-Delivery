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
               <img src="img/Fish_Curry.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Fish Curry</h5>
               <p class="card-text">price Rs.120</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="Fish Curry">
               <input type="hidden" name="price" value="120">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/Fish_fry.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Fish Fry</h5>
               <p class="card-text">price Rs.150</p>
               <button type="submit"name="add-to-cart"  class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="Fish_fry">
               <input type="hidden" name="price" value="150">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/Chingri_malaikari.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Chingri Malaikari</h5>
               <p class="card-text">price Rs.180</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="Chingri_malaikari">
               <input type="hidden" name="price" value="180">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/Sarse_elish.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Sarse Elish</h5>
               <p class="card-text">price Rs.190</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="Sarse_elish">
               <input type="hidden" name="price" value="190">
               </div>
            </div>
         </form>
       </div>
   </div>
</div>
</body>
</html>