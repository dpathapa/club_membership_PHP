<?php include "includes/db.php" ?>
<?php  include "includes/header.php";
include "includes/navigation.php";?>

<?php
if(isset($_POST['create_user'])) {
    $user_firstname = trim($_POST['user_firstname']);
    $user_lastname = trim($_POST['user_lastname']);
    $user_age = trim($_POST['user_age']);
    $user_address = trim($_POST['user_address']);
    $user_email = trim($_POST['user_email']);
    $user_telephone = trim($_POST['user_telephone']);
    $user_role = trim($_POST['user_role']);
    $Date = date('d-m-y');
    $username = trim($_POST['username']);
    $user_password = trim($_POST['user_password']);

    if (!empty($user_firstname) && !empty($user_lastname) && !empty($user_age) && !empty($user_address) && !empty($user_telephone) && !empty($user_telephone) && !empty($user_email) && !empty($user_role) && !empty($username) && !empty($user_password)) {
        $user_firstname = mysqli_real_escape_string($connection, $user_firstname);
        $user_lastname = mysqli_real_escape_string($connection, $user_lastname);
        $user_age = mysqli_real_escape_string($connection, $user_age);
        $user_address = mysqli_real_escape_string($connection, $user_address);
        $user_telephone = mysqli_real_escape_string($connection, $user_telephone);
        $user_email = mysqli_real_escape_string($connection, $user_email);
        $user_role = mysqli_real_escape_string($connection, $user_role);
        $username = mysqli_real_escape_string($connection, $username);
        $user_password = mysqli_real_escape_string($connection, $user_password);

        $hashedPwd = password_hash($user_password,PASSWORD_DEFAULT);

        $query = "SELECT randSalt FROM users";
        $select_randSalt_query = mysqli_query($connection, $query);

        if (!$select_randSalt_query) {
            die("Query Failed" . mysqli_error($connection));
        }
        $row = mysqli_fetch_array($select_randSalt_query);
        $salt = $row['randSalt'];

        $query = "INSERT INTO users(user_firstname,user_lastname,user_age,user_address,user_email,user_telephone,user_role,Date,username,user_password) ";
        $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_age}','{$user_address}','{$user_email}','{$user_telephone}','{$user_role}',now(),'{$username}','{$hashedPwd}') ";
        $register_user_query = mysqli_query($connection, $query);


        if (!$register_user_query) {
            confirmRegistration($register_user_query);
            function confirmRegistration($result)
            {
                global $connection;
                if (!$result) {
                    die("QUERY FAILED " . mysqli_error($connection)); //catches error in the query
                }
            }
        }

        header("location: ./reg.php?signup=success");
        echo "Registration completed";
        exit();
    }
}

?>
<div class="container">
    <div class="col-md-6">
        <div>
        <h1 class="text-center"> Registration form </h1>
            <p class ="text-center"> <small> All fields are required *</small></p>
        </div>

<form action="reg.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="title">Firstname</label>
        <input type="text" class="form-control" name="user_firstname" pattern="^[a-zA-Z][a-zA-Z\s]*$" title="only letters and space" placeholder="Your Firstname, only small letters and space" required>
    </div>
    <div class="form-group">
        <label for="title">Lastname</label>
        <input type="text" class="form-control" name="user_lastname" pattern="^[a-zA-Z][a-zA-Z\s]*$" title="only letters and space" placeholder="Your lastname, only small letters and space" required>
    </div>
    <div class="form-group">
        <label for="title">Age</label>
        <input type="text" class="form-control" pattern="^(1[89]|[2-6][0-9]|70)$" title="age between 18-70" placeholder="Must be between 18-70" name="user_age" required>
    </div>
    <div class="form-group">
        <label for="title">Address</label>
        <input type="text" class="form-control" name="user_address" pattern="^([A-PR-UWYZa-pr-uwyz0-9][A-HK-Ya-hk-y0-9][AEHMNPRTVXYaehmnortvxy0-9]?[ABEHMNPRVWXYabehmnprvwxy0-9]? {1,2}[0-9][ABD-HJLN-UW-Zabd-h-jln-uw]{2}|GIR 0AA)$" title ="enter valid uk postcode AAA 1AA" placeholder="enter valid uk postcode AAA 1AA" required>
    </div>
    <div class="form-group">
        <label for="title">Email</label>
        <input type="email" class="form-control" name="user_email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$" title="xyz@something.com" required placeholder="xyz@something.com" required>
    </div>
    <div class="form-group">
        <label for="title">Phone</label>
        <input type="phone" class="form-control" pattern="[0-9]{10}" title="10 numeric characters only" placeholder="10 digit UK phone no." required name="user_telephone" required>
    </div>
    <div class="form-group">
        <select name="user_role" id="">
            <option value="member">Select Role</option>
            <option value="member">Swimmer</option>
            <option value="parent">Parent</option>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Username</label>
        <input type="text" class="form-control" name="username" pattern="^[a-zA-Z][a-zA-Z0-9-_.]{5,12}$" title="alphanumeric 6 to 12 chars" placeholder ="Must contain numbers and letters, no more than 5-12 char" required>
    </div>
    <div class="form-group">
        <label for="title">Password</label>
        <input type="password" class="form-control" name="user_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" placeholder="at least one number and one uppercase and lowercase letter, and at least 6 " required >

    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Register">
    </div>

</form>
    </div>
</div>

<?php include "includes/footer.php";?>