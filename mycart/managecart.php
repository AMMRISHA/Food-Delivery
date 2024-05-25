<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['add-to-cart']))
    {
      if(isset($_SESSION['cart']))
      {
          $myitems=array_column($_SESSION['cart'],'food_item');
          if(in_array($_POST['food_item'],$myitems))
          {
              echo"<script>
              alert('Item already added');
              window.history.go(-1);
              </script>";
          }
          else
       { $count=count($_SESSION['cart']);
        $_SESSION['cart'][$count]=array('food_item'=>$_POST['food_item'],'price'=>$_POST['price'],'quantity'=>1); 
        echo"<script>
        alert('Item added');
        window.history.go(-1);
        </script>";     
       }      
      }
      else
      {
          $_SESSION['cart'][0]=array('food_item'=>$_POST['food_item'],'price'=>$_POST['price'],'quantity'=>1);
          echo"<script>;
          alert('Item added');
          window.history.go(-1);
          </script>";
      }
    }
    if(isset($_POST['remove_item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        { if($value['food_item']==$_POST['food_item'])
            {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart']=array_values($_SESSION['cart']);
            echo"<script>
            alert('item removed');
            window.location.href='cart.php';
            </script>";
            }
        }
    }
    if(isset($_POST['mod_quantity']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        { 
            if($value['food_item']==$_POST['food_item'])
            {
            $_SESSION['cart'][$key]['quantity']=$_POST['mod_quantity'];    
            // echo"<script>
            // window.location.href='cart.php';
            // </script>";
            }
        }
    }
}