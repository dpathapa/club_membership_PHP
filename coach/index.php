<?php include "includes/coach_header.php"; ?>

    <div id="wrapper">

         
        <!-- Navigation -->
      
<?php include "includes/coach_navigation.php"; ?>

        <?php
//       session_start();
        if(!$_SESSION['user_role'])
        {
            header('location:../login.php');
        }
//        ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                
                <div class="row">
                    <div class="col-lg-12">
                    <h1 class="page-header">    
                         Welcome Coach <small> <?php echo $_SESSION['username']; ?> </small>
                     </h1>
                             
                                         
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/coach_footer.php"; ?>
