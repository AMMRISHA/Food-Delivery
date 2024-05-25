<?php
// INSERT INTO `player_details` (`SL No.`, `Name`, `Test_Run_Run`, `ODI_Run`, `T20_Run`) VALUES ('1', 'Sachin Tendulkar', '15900', '18954', '15');
// UPDATE `player_details` SET `Name`='[RIYA]',`Test_Run_Run`='[84752]',`ODI_Run`='[7483]',`T20_Run`='[74784]' WHERE `Name`="AMMRISHA CHOWDHURY";
//connect to the database 
   $insert=false; 
   $serverName ="localhost";
   $userName ="root";
   $password ="";
   $database="admin";
   //create a connection object
   $conn = mysqli_connect($serverName,$userName, $password,$database);
   //dic if connection was not found
  if(!$conn){
    die ("Sorry we failed to connect:" .mysqli_connect_error());
}
//  else {

//  echo "Connection was successful";
//  }

//  echo $_SERVER['REQUEST_METHOD'];
 if($_SERVER['REQUEST_METHOD']=='POST'){
    
 $Name=$_REQUEST["Name"];
 $Test_Run=$_POST["Test_Run"];
 $ODI_Run=$_POST["ODI_Run"];
 $T20_Run=$_POST["T20_Run"];
 $sql ="INSERTINTO `player_details` (`Name`, `Test_Run`, `ODI_Run`, `T20_Run`) VALUES( '$Name', '$Test_Run', '$ODI_Run', '$T20_Run')";
 $result = mysqli_query($conn,$sql);
 if($result){
    //  echo "The record has been inserted successfully!<br>";
    $insert=true;
 }
 else{
     echo"The record was not inserted successfully because of this reason--->".mysqli_error($conn);
 }

 }
 

?>
<!DOCTYPEhtml>
<htmllang="en">
<head>
    <metacharset="UTF-8">
    <metahttp-equiv="X-UA-Compatible"content="IE=edge">
    <metaName="viewport"content="width=device-width, initial-scale=1.0">
    <title>Assignment_15</title>
    
   <style>
.body{
    display:flex;
}
.c-h-primary{
    margin: auto;
    text-align:center ;
    font-size: 35px;
    padding-bottom: 40px;
    padding-top:80px ;
   
 
}
.contact-detsils{
    box-shadow: 0px2px6px0   rgba(0,0,0,0.2), 0px4px16px0rgba(0,0,0,0.2); 
    height:400px;
    width: 30%;
    padding: 30px;
    margin:40px;

}
.contact-detsilsh1{
margin:auto;
justify-content:center;
align-items:center;
}

form{
 
    height:300px;
    background-color: #fff;
    display: flex;
     flex-direction: column; 
   
}
input{
    width: 100%;
    height: 25px;
    border-left:none;
    border-right:none;
    border-top:none;
}
.website_form_btn{
   width: 80px;
    margin-left: 30px;
    padding: 5px;
    font-size: 20px;
     background-color:#fff;
     color: black;
      border:3pxsolidblack; 
     border-radius:10px;
   
     
}

/* table design */
.container{
    width: 60%;
    padding: 30px;
    
}
.table{
    border:2px solid black;
}
.tablethead{
    background-color:grey;
}
.tabletheadtr{
    color:#fff;
}
.tabletbody{
    background-color:#fff;
   
}
 th,td{
    border:2pxsolidblack;
    border-radius:2px;
    padding-left:5px;
}
tda{
    margin:4px;
    padding:4px;
    list-style:none;
    text-decoration:none;
    
   
}
/* MODAL DESIGN
 .modal-body{
     display:none;
     opacity:0;
     position: absolute;
     justify-content:center;
     z-index: 1;
     margin:auto;
     width: 40%;
     height: 100%;
     overflow: auto;
     background-color: rgb(0,0,0);
     background-color: rgba(0,0,0,0.4);
     

 }

 .edit,.delete{
     width:60px;
     padding:5px;
     background-color:blue;
     color:#fff;
     border:2px solid #fff;
     border-radius:10px;
 }
 
.modal-body-form{
    width: 60%;
    z-index:2;
    margin:auto;
    justify-content:center;
    text-align:center;
   
}
.modal-body-form h3{
    font-size:12px;
} */

</style>

</head>
<body>

   <!--<div class="modal-body-form">
       <h5>Edit Record</h5>
       <input type ="hidden" class="snoEdit" id="snoEdit">
    <form1  class  ="modal-body" action ="Assignment_15.php" method ="post">
           <h3>Enter your Name</h3>
           <input class="Edit" type="Name" id="NameEdit" Name="NameEdit" required>
          <h3>Test_Run Runs</h3>
          <input class="Edit" type="number" id="Test_RunEdit" Name="Test_RunEdit" required>
           <h3>ODI Runs</h3>
          <input class="Edit" type="number" id="ODI_RunEdit" Name="ODI_RunEdit" required>
          <h3>T20 Runs</h3>
          <input class="Edit" type="number" id="T20_RunEdit" Name="T20_RunEdit" required><br>
         <button class="website_form_btn">Save</button>
    </form1>
    </div> -->
 
 <?php

    if($insert){
        echo"<div class ='alert alert-warning alert-dismissible fade show' role= 'alert'>
        <strong>Success!</strong> Your record has been inserted successfully!
       
        </div>";
    }
   ?>
   <divclass="body">
<divclass="contact-detsils">
     
  <u><h1> Players Details</h1></u>
  
   <form  action ="Assignment_15.php"method ="post">
    <h3>Enter your Name</h3>
     <inputtype="Name"id="Name"Name="Name"required>
     <h3>Test_Run</h3>
      <inputtype="number"id="Test_Run"Name="Test_Run"required>
      <h3>ODI Run</h3>
      <inputtype="number"id="ODI_Run"Name="ODI_Run"required>
      <h3>T20 Run</h3>
      <inputtype="number"id="T20_Run"Name="T20_Run"required><br>
       <button  name="submit"class="website_form_btn">Save</button>
   </form>
</div>
<divclass="container">

<tableclass ="table">

   <thead>

     <tr>
     <thscope ="col">Sno.</th>
      <thscope ="col">Name</th>
      <thscope ="col">Test_Run</th>
      <thscope ="col">ODI_Run</th>
      <thscope ="col">T20_Run</th>
      <thscope="col"colspan="2">Actions</th>
     </tr>
</thead>
<tbody>
<?php

$sql ="SELECT*FROM `player_details`";
$result =mysqli_query($conn,$sql);
$Sno = 0;

while($row =mysqli_fetch_assoc($result)){
    //incrrement serial no using 
    $Sno = $Sno +1;
    echo"<tr>
    <th scope='row'>".$Sno . "</th>
    <td>".$row['Name']."</td>
    <td>".$row['Test_Run']."</td>
    <td>".$row['ODI_Run']."</td>
    <td>".$row['T20_Run']."</td>
    <td><a href='update.php?nm=$row[Name] & tr=$row[Test_Run] &odir=$row[ODI_Run] & t20r=$row[T20_Run]'>Edit</td>
    <td><a href='delete.php?nm=$row[Name]'>Delete</td>

   
   </tr>";
}
?>
</tbody>
</table>
</div>
</div>
<!--<script>
edit =document.querySelector('.edit')
form1=document.querySelector('.modal-body')
edit.addEventListener('click',()=>{

 form1.classList.toggle('modal-body');

})
    </script>
    <script>
        
        edits= document.getElementsByClassName('edit');
        Array.from(edits).forEach((element)=>{
            element.addEventListener("click",(e)=>{
             console.log("edit", );
             tr= e.target.parentNode.parentNode;
             Name=tr.getElementsBtTagName("td")[0].innerText;
             Test_Run=tr.getElementsBtTagName("td")[1].innerText;
             ODI_Run=tr.getElementsBtTagName("td")[2].innerText;
             T20_Run=tr.getElementsBtTagName("td")[3].innerText;
             
            })
        })
        
        </script> -->

</body>
</html>
