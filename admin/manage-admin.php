<?php
    include('partials/menu.php');
?>
<html>
    <head>
        <title>Food Order Website</title>

        <link rel="stylesheet" href="admin.css">
    </head>
    <body>
        <div class="Main-Content">
            <div class="wrapper">
                <h1>MANAGE-ADMIN</h1>
                <br/>

                <!-- Button to Add Admin -->

                <a href="add-admin.php" class="btn-primary">Add Admin</a>

                <br/>
                <br/>
                
                <br/>
                <br/>
                    <table class="tbl-full">
                        <tr>
                            <th>S.N</th>
                            <th>Full Name</th>
                            <th>Username</th>
                            <th>Actions</th>
                        </tr>

                        <?php

                            $sql = "SELECT * FROM tbl_admin";
                            $res = mysqli_query($conn, $sql);


                            if($res==TRUE)
                            {
                                $count = mysqli_num_rows($res);
                                $sn=1;
                                if($count>0)
                                {
                                    while($rows=mysqli_fetch_assoc($res))
                                    {
                                        
                        
                        ?>
                                    <tr>
                                        <td><?php echo $sn++ ?> </td>
                                        <td><?php echo $rows['full_name'] ?> </td>
                                        <td><?php echo $rows['username'] ?> </td>
                                        <td>
                                            <a href="#" class="btn-secondary">Update Admin</a>
                                            <a href="#" class="btn-denger">Delete Admin</a>
                                        </td>
                                    </tr>
                        <?php
                                    }
                                }
                            }
                        ?>

                    </table>
                <div class="clearfix"></div>
            </div>
        </div>
    </body>
</html>

<?php
    include("partials/footer.php");
?>
