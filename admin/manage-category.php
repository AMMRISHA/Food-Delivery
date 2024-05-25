<?php
    include('partials/menu.php');
?>




        <div class="Main-Content">
            <div class="wrapper">
                <h1>MANAGE-CATEGORY</h1><br><br>

                <?php
      if(isset($_SESSION['add']))
      {
          echo $_SESSION['add'];
          unset($_SESSION['add']);
      }
       ?>
       <br>
<!-- button to add category -->
<a href ="<?php echo SITEURL; ?>admin/add-category.php" class="btn-primary">Add Category </a>
                <table class="tbl-full">

                   <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>


                  </tr>

                  <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href ="#" class="btn-secondary">Update </a>
                            <a href ="#" class="btn-danger">Delete </a>
                       </td>
                  </tr>

        </div>
        </div>

<?php
    include("partials/footer.php");
?>