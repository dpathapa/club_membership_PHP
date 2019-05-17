<?php  include "includes/db.php"; ?>
<?php  include "includes/header.php"; ?>

<?php 
    
    if(isset($_POST['submit'])) {
       $user_firstname = $_POST['user_firstname'];
       $user_lastname = $_POST['user_lastname'];
       $user_age = $_POST['user_age'];
       $user_address = $_POST['user_address'];
       $user_telephone = $_POST['user_telephone'];
       $Date=$_POST['date'];
       $user_email= $_POST['user_email'];
       $user_role = $_POST['user_role'];
       $username = $_POST['username'];
       $user_password = $_POST['user_password'];
        
       if(!empty($user_firstname) && !empty($user_lastname)&& !empty($user_age)&& !empty($user_address)&& !empty($user_telephone) &&!empty($user_telephone)&& !empty($user_email) && !empty($user_role) && !empty($username) && !empty($user_password)) {
       $user_firstname = mysqli_real_escape_string($connection, $user_firstname);
       $user_lastname = mysqli_real_escape_string($connection, $user_lastname);
       $user_age = mysqli_real_escape_string($connection, $user_age);
       $user_address = mysqli_real_escape_string($connection, $user_address);
       $user_telephone= mysqli_real_escape_string($connection, $user_telephone);
       $user_email= mysqli_real_escape_string($connection, $user_email);
       $user_role = mysqli_real_escape_string($connection, $user_role);
       $username = mysqli_real_escape_string($connection, $username);
       $user_password = mysqli_real_escape_string($connection,$user_password);
        
       $query = "SELECT randSalt FROM users";
       $select_randSalt_query = mysqli_query($connection, $query);

        if(!$select_randSalt_query) {
            die("Query Failed" . mysqli_error($connection));
        }   
        
        $row = mysqli_fetch_array($select_randSalt_query);
        $salt = $row['randSalt'];
            
        $query = "INSERT INTO users (user_firstname,user_lastname,user_age,user_address,user_telephone,user_email, user_role,username, user_password)";
        $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_age}','{$user_address}','{$user_telephone}','{$user_email}','{$user_role}','{$username}','{$user_password}')";
        $register_user_query = mysqli_query($connection, $query);
        if(!$register_user_query){
            die("QUERY FAILED ".error($connection) . ''.mysqli_error($connection)); 
        }
            
    $message = "Your Registration has been submitted"; 
       } else {

            $message = "Fields cannot be empty";
            }
    }else {
       
   }
?> 
    <!-- Navigation -->
<?php  include "includes/navigation.php"; ?>
<section id="login">
        <div class="container">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Register</h1>
                    <form role="form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="login-form" autocomplete="off">
                       <h6 class ="text-center"> <?php echo $message; ?></h6>

                        <div class="form-group">
                            <label for="title">Firstname</label>
                            <input type="text" class="form-control" name="user_firstname" placeholder="Enter your firstname">
                        </div>
                        <div class="form-group">
                            <label for="title">Lastname</label>
                            <input type="text" class="form-control" name="user_lastname" placeholder="Enter your Lastname">
                        </div>
                        <div class="form-group">
                            <label for="title">Age</label>
                            <input type="number" class="form-control" name="user_age" placeholder="Enter your age">
                        </div>
                        <div class="form-group">
                            <label for="title">Address</label>
                            <input type="text" class="form-control" name="user_address" placeholder="Enter your postcode">
                        </div>
                        <div class="form-group">
                            <label for="title">Email</label>
                            <input type="email" class="form-control" name="user_email" placeholder="someone@example.com">
                        </div>
                        <div class="form-group">
                            <label for="title">Phone</label>
                            <input type="phone" class="form-control" name="user_telephone" placeholder="Enter your Phone no">
                        </div>
                        <div class="form-group">
                            <select name="user_role" id="">
                                <option value="member">Select Role</option>
                                <option value="parent">Parent</option>
                                <option value="member">Member</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Enter your Username">
                        </div>
                        <div class="form-group">
                            <label for="title">Password</label>
                            <input type="password" class="form-control" name="user_password">
                        </div>

                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" value="Register">
                        </div>
                </div>
            </div>
        </div>
</section>


        <hr>

<?php include "includes/footer.php";?>
