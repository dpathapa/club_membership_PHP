<?php include "includes/coach_header.php"; ?>

    <div id="wrapper">

<?php include "includes/coach_navigation.php"; ?>

    <div id="page-wrapper">

        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">

                <div class="col-lg-12">

                    <h1 class="page-header">Welcome <small> <?php echo $_SESSION['username']; ?> </small> </h1>

                    <?php

                    if(isset($_GET['source'])){
                        $source = $_GET['source'];
                    } else {
                        $source = '';

                    }
                    switch($source){

                        case 'add_user';
                            include "includes/add_member.php";
                            break;

                        case 'edit_user';
                            include "includes/edit_member.php";
                            break;

                        default:
                            include "includes/view_all_members.php";
                            break;
                    }


                    ?>


                </div> <!-- /.col -->

            </div>  <!-- /.row -->

        </div>  <!-- /.container-fluid -->

    </div> <!-- /#page-wrapper -->

<?php include "includes/coach_footer.php"; ?>