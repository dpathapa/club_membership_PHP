<?php include "includes/coach_header.php"; ?>

<div id="wrapper">

    <?php include "includes/coach_navigation.php"; ?>

        <div id="page-wrapper">
               
                <div class="container-fluid">
                
                <!-- Page Heading -->                
                <div class="row">
                   
                    <div class="col-lg-12">
                       
                        <h1 class="page-header">Welcome Coach <small> <?php $_SESSION['username']?> </small> </h1>
                                   
                    <div class="col-xs-6">
                        
                        <?php insert_categories(); ?> <!-- function - insert -->                                                                                               
                        <form action="" method ="post">
                            <div class = "form-group">  <!-- Add Category Form-->
                               <label for ="cat-title"> Add Comments</label>
                                <input class="form-control" type ="text" name = "cat_title">
                            </div>
                            <div class = "form-group">
                                <input class = "btn btn-primary" type ="submit" name ="submit" value= "Add Category">
                            </div>                          
                        </form>                  
                          <?php update_categories(); ?> <!-- function- update and include query -->                         
                    </div>   
                    <div class="col-xs-6">
                        <table class="table table-bordered table-hover">
                             <thead>
                                <tr>
                                <th> Id </th>
                                <th> Category Title</th>
                                </tr>
                             </thead>
                             <tbody>
                            <?php findAllCategories();  ?> <!-- function- find all categories -->
                            <?php delete_categories();  ?> <!-- function- delete category  -->
                            </tbody>
                         </table>
                  </div>
                                                      
                    </div> <!-- /.col -->
                    
                </div>  <!-- /.row -->              

            </div>  <!-- /.container-fluid -->           

        </div> <!-- /#page-wrapper -->        

   <?php include "includes/coach_footer.php"; ?>