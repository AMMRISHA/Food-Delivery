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
               <img src="img/golap_jamun.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">golap_jamun</h5>
               <p class="card-text">price Rs.120</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="golap_jamun">
               <input type="hidden" name="price" value="120">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/Rosogolla.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">Rosogolla</h5>
               <p class="card-text">price Rs.150</p>
               <button type="submit"name="add-to-cart"  class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="Rosogolla">
               <input type="hidden" name="price" value="150">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/mysore-pak.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">mysore-pak</h5>
               <p class="card-text">price Rs.180</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="mysore-pak">
               <input type="hidden" name="price" value="180">
               </div>
            </div>
         </form>
       </div>
       <div class="col-lg-3">
         <form action="managecart.php" method="POST">
           <div class="card">
               <img src="img/sondesh.jpg" class="card-img-top" alt="---">
               <div class="card-body text-center" >
               <h5 class="card-title">sondesh</h5>
               <p class="card-text">price Rs.190</p>
               <button type="submit" name="add-to-cart" class="btn btn-info">add to cart</button>
               <input type="hidden" name="food_item" value="sondesh">
               <input type="hidden" name="price" value="190">
               </div>
            </div>
         </form>
       </div>
   </div>
</div>
</body>
</html>