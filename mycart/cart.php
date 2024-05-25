<?php include("header.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cart</title>
    <style>

      *{
        margin:0;
        padding:0;
        box-sizing:border-box;
        

      }
      .row{
        width:80%;
      margin:20px auto;
      border:1px solid grey;
      }
    .row h1{
      color:black;
      width:100%;
      padding-bottom:10px;
    }
    .row-div{
      margin-top:20px;
      
    }
    .container{
      width:100%;
      margin:50px auto ;
      color:black;
      display:flex;
      flex-direction:row;
      flex-wrap:wrap;
      
      
    }
    .col-leg-8 {
  
      width:60%;
    }
    .col-leg-4{
      width:20%;
      /* background-color:grey; */
    padding:5px;
    }
    .col-leg-8 table{
      color:black;
      border:2px solid grey;
      padding:20px;
    }
   .col-leg-8 table tr{
    border:2px solid grey;
    }
    .col-leg-8 table th{
    padding:20px;
    }
    td{
      padding:20px;
    }
    .btn-outline-danger{
      border:1px solid red;
      color:red;
      padding:5px;
      background-color:white;
    }
    .iquantity{
      text-align:center;
      width:50px;
    }
.form-check-level{
  /* margin:10px; */
}
.btn-primary{
  margin:4px;
  padding:4px;
  background-color:blue;
  color:white;
  border:1px solid white;
}
    </style>
</head>
<body>
<div class="row">
                    <div id="row-div" class="row-div ">
                        <h1>My Cart</h1>
                    </div>

          </div>
  
        <div class="container">
               
   <div class="col-leg-8">
    <table class="table">
      <thead class=""text-center>
          <tr>
          <th scope="col">Serial no.</th>
          <th scope="col">Food-name</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Total</th>
        </tr>
       </thead>
  <tbody class="text-center">
      <?php
      $sr=0;
      if(isset($_SESSION['cart']))
      {
      foreach ($_SESSION['cart'] as $key => $value) 
      {
        $sr=$sr+1;
         
         echo"
        <tr>
        <td>$sr</td>
        <td>$value[food_item]</td>
        <td>$value[price]<input type='hidden' class='iprice' value='$value[price]'></td>
        <td>
        <form action='' method=''>
        <input type='number' class='iquantity' name='mod_quantity' onchange='subtotal()' value='$value[quantity]' min='1'>
        <input type='hidden' name='food_item' value='$value[food_item]'>
        </form>
        </td>
        <td class='itotal'></td>
        <td>
        <form action='managecart.php' method='POST'>
        <button name='remove_item' class='btn btn-sm btn-outline-danger'>REMOVE</button>
        <input type='hidden' name='food_item' value='$value[food_item]'>
        </form>
        </td>
        </tr>
        ";
      }
    }
      ?>
    
  </tbody>
</table>  
             </div>
             <div class="col-leg-4">
               <h3>Grand Total:</h3><br>
               <h5 id="gtotal" ></h5>
               <?php
               if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
               {
               ?> 
               <form name="myform" onsubmit="return validateform()" action="purchase.php" method="POST">
                 <div class="form-group">
                   <label>full name</label>
                   <input type="text" name="full_name" class="form-control">
                  </div><br>
                  <div class="form-group">
                   <label>Phone no</label>
                   <input type="number" name="phone_no" class="form-control">
                  </div><br>
                  <div class="form-group">
                   <label>Address</label>
                   <input type="text" name="address" class="form-control">
                  </div><br>
               <div class="form-check">
  <input type="radio" class="form-check-input" name="pay_mode" value="COD" id="btncheck1">
  <label class="form-check-level" for="btncheck1">cash on delivery</label>
                </div>
                   <button class="btn btn-primary btn-block" name="submit">Make Purchase</button>
                </form>
                <?php
               }
               ?>
             </div>

        </div>
    </div>
  <script>
    function validateform(){  
var name=document.myform.full_name.value;  
var number=document.myform.phone_no.value; 
var address=document.myform.address.value;
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}
  if(number.length<10 ||number.length>10 ){  
  alert("phone no should be 10 digit");  
  return false;  
  }
  if (address==null || address==""){  
  alert("address can't be blank");  
  return false;  
}
}  
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');

    function subtotal()
    {
      gt=0;
      for(i=0;i<iprice.length;i++)
      {
        itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
        gt=gt+(iprice[i].value)*(iquantity[i].value);
      }
      gtotal.innerText=gt;
    }
    subtotal();
  </script>
</body>
</html>