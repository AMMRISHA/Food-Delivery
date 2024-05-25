<?php  include('partials/menu.php') ; ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1><br><br>

       <?php
      if(isset($_SESSION['add']))
      {
          echo $_SESSION['add'];
          unset($_SESSION['add']);
      }
       ?>
<br><br>
        <!-- add category form starts -->

        <form action="" method="post">

         <table>
            <tr>
             <td>Title:</td>
             <td>
                 <input type="text" name="title" placeholder=" category Title">
             </td>
            </tr>
            <tr>
             <td>featured:</td>
             <td>
                 <input type="radio" name="featured" placeholder=" Yes"> Yes
                 <input type="radio" name="featured" placeholder="No"> No
             </td>
            </tr>

            <tr>
             <td>Active:</td>
             <td>
                 <input type="radio" name="featured" placeholder=" Yes"> Yes
                 <input type="radio" name="featured" placeholder="No"> No
             </td>
            </tr>

            <tr>
                <td colspan="2">
                   <input type="submit" name ="submit" value="Add Category" class="btn-secondary">
                </td>
            </tr>
        </table>
        </form>
         <!-- add category form ends -->
         <?php

         if(isset($_POST['submit']))
         {
            //  echo "clicked";
            //1. get the value from the category form

            $title=$_POST['title'];

            // for radio input, we need to check wether the button or not
            if(isset($_POST['featured']))
            {
                // get the value from form
                $featured=$_POST['featured'];
            }
            else
            {
                // set teh default value
                $featured ="No";
            }
            if(isset($_POST['active']))
            {
                $active = $_POST['active'];
            }
            else
            {
                $active ="No";
            }
            // 2. create sql query to insert category into database
            $sql ="INSERT INTO tbl_category SET 
            title='$title',
            featured ='$featured',
            active ='$active'
            ";
            // execute the query and save in database
            $res =mysqli_query($conn,$sql);
            // 4.check wether the query is executed or not and data added or not 

            if($res==true)
            {
                // query executed and category executed
                $_SESSION['add'] ="<div class =' success'>Category added successfully</div>";
                // redirect to manage category page
                header('location:'.SITEURL .'admin/manage_category.php');

            }
            else{
                // failed to add category
                $_SESSION['add'] ="<div class =' error'>Failed to add category.</div>";
                // redirect to manage category page
                header('location:'.SITEURL .'admin/add_category.php');
            }
         }
        ?>
    </div>
</div>

<?php  include('partials/footer.php') ; ?>