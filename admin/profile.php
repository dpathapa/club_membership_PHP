<?php include "includes/admin_header.php"; ?>

<?php
if(isset($_SESSION['username'])){
    
  $username = $_SESSION['username'];
  $query = "SELECT * FROM users WHERE username = '{$username}' ";
    
  $select_user_profile_query = mysqli_query($connection,$query);
    
  while($row = mysqli_fetch_array($select_user_profile_query)){
     
       $user_id = $row['user_id'];
       $username = $row['username'];
       $user_password = $row['user_password'];
       $user_firstname = $row['user_firstname'];
       $user_lastname= $row['user_lastname'];
       $user_age = $row['user_age'];
       $user_address = $row['user_address'];
       $user_email = $row['user_email'];
       $user_telephone = $row['user_telephone'];
       $Date = $row['Date'];
       $user_role = $row['user_role'];      
  }
}
?>    
     
<?php 
  if(isset($_POST['edit_user'])){
      $user_firstname = $_POST['user_firstname'];
      $user_lastname = $_POST['user_lastname'];
      $user_age = $_POST['user_age'];
      $user_address = $_POST['user_address'];     
      $user_email= $_POST['user_email'];
      $user_telephone = $_POST['user_telephone'];
      $user_role= $_POST['user_role'];
      $Date = date('d-m-y');
      $username= $_POST['username'];
      $user_password= $_POST['user_password'];      
            
    $query = "UPDATE users SET ";
    $query .="user_firstname = '{$user_firstname}', ";
    $query .="user_lastname = '{$user_lastname}', ";
    $query .="user_age = '{$user_age}', ";
    $query .="user_address = '{$user_address}', ";
    $query .="user_email = '{$user_email}', ";
    $query .="user_telephone = '{$user_telephone}', ";
    $query .="user_role = '{$user_role}', ";
    $query .="Date = now(), ";
    $query .="username = '{$username}', ";
    $query .="user_password= '{$user_password}' ";      
    $query .= "WHERE username = '{$username}' ";
    
    
    $update_user_query = mysqli_query($connection,$query);
    
    confirmQuery($update_user_query);
      
  }
?>  
                 
<div id="wrapper">

    <?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">               
                <div class="container-fluid">
                <!-- Page Heading -->                
                <div class="row">                   
                    <div class="col-lg-12">
                                              
                        <h1 class="page-header">Welcome to Admin <small> Author </small> </h1>
                                                                   
 <form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="title">Firstname</label>
        <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
    </div>
    <div class="form-group">
        <label for="title">Lastname</label>
        <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
    </div>
    <div class="form-group">
        <label for="title">Age</label>
        <input type="text" value="<?php echo $user_age; ?>" class="form-control" name="user_age">
    </div>
    <div class="form-group">
        <label for="title">Address</label>
        <input type="text" value="<?php echo $user_address; ?>" class="form-control" name="user_address">
    </div>
    <div class="form-group">
        <label for="title">Email</label>
        <input type="email" value="<?php echo $user_email; ?>" class="form-control" name="user_email">
    </div>
    <div class="form-group">
        <label for="title">Phone</label>
        <input type="phone" value="<?php echo $user_telephone; ?>" class="form-control" name="user_telephone">
    </div>
    <div class="form-group">
        <select name="user_role" id="">         
          <option value="coach"><?php echo $user_role; ?></option>                
          
           <?php
             if($user_role == 'admin'){
                  echo "<option value='coach'>coach</option>";
                  echo "<option value='member'>member</option>";
                  echo "<option value='parent'>parent</option>";
                 
             }else {
                 echo "<option value='admin'>admin</option>";
             }            
            ?>    
              
        </select>
    </div>
    <div class="form-group">
        <label for="title">Username</label>
        <input type="text" value="<?php echo $username; ?>" class="form-control" name="username">
    </div>
    <div class="form-group">
        <label for="title">Password</label>
        <input type="password" value="<?php echo $user_password; ?>" class="form-control" name="user_password">
    </div>
        
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="edit_user" value="Update Profile">
    </div>
    
</form>
                                                                    
                                                                                                                  
                    </div> <!-- /.col -->
                    
                </div>  <!-- /.row -->              

            </div>  <!-- /.container-fluid -->           

        </div> <!-- /#page-wrapper -->        

   <?php include "includes/admin_footer.php"; ?>