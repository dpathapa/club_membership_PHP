<?php
  if(isset($_POST['create_user'])){
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
            
$query = "INSERT INTO users(user_firstname,user_lastname,user_age,user_address,user_email,user_telephone,user_role,Date,username,user_password) ";
$query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_age}','{$user_address}','{$user_email}','{$user_telephone}','{$user_role}',now(),'{$username}','{$user_password}') ";
      
      $create_user_query = mysqli_query($connection, $query); 
      confirmQuery($create_user_query);     //function confirmQuery($result)-- result can be any-declared var  
      
      echo "Post Created: " . " " . "<a href='users.php'>View Users</a> or <a href='users.php?source=add_user'>Add More users </a>" ;      
  }
?>


<form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="title">Firstname</label>
        <input type="text" class="form-control" name="user_firstname">
    </div>
    <div class="form-group">
        <label for="title">Lastname</label>
        <input type="text" class="form-control" name="user_lastname">
    </div>
    <div class="form-group">
        <label for="title">Age</label>
        <input type="text" class="form-control" name="user_age">
    </div>
    <div class="form-group">
        <label for="title">Address</label>
        <input type="text" class="form-control" name="user_address">
    </div>
    <div class="form-group">
        <label for="title">Email</label>
        <input type="email" class="form-control" name="user_email">
    </div>
    <div class="form-group">
        <label for="title">Phone</label>
        <input type="phone" class="form-control" name="user_telephone">
    </div>
    <div class="form-group">
        <select name="user_role" id=""> 
           <option value="admin">Select Role</option>
           <option value="admin">Admin</option>
           <option value="coach">Coach</option>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Username</label>
        <input type="text" class="form-control" name="username">
    </div>
    <div class="form-group">
        <label for="title">Password</label>
        <input type="password" class="form-control" name="user_password">
    </div>
        
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Add user">
    </div>
    
</form>