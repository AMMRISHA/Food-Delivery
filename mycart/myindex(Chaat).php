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

<div class="container ">
   <div class="row">
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/papdi-chaat.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Papdi Chaat</h5>
               <p class="card-text">price Rs.120</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="papdi-chaat">
               <input type="hidden" name="price" value="120">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/puchka.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Puchka</h5>
               <p class="card-text">price Rs.150</p>
               <button type="submit"name="add-to-cart"  class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="puchka">
               <input type="hidden" name="price" value="150">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/Ghugni.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Ghugni</h5>
               <p class="card-text">price Rs.180</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="Ghugni">
               <input type="hidden" name="price" value="180">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/Chana_Chaat.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Chana Chaat</h5>
               <p class="card-text">price Rs.190</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="Chana_Chaat">
               <input type="hidden" name="price" value="190">
               </div>
            </div>
         </form>
       </div>
   </div>
</div>
</body>
</html>