<?php
include "includes/header.php";
include  "includes/navigation.php";
include "includes/db.php";
?>
<div class="container">
<div class="col-xs-6 col-xs-offset-3">
    <div class="well">
        <h2 class="text-center">Login Form</h2><hr>
        <form action ="includes/login.php" method="post">
            <div class="form-group">
                <input name="username" type="text" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <input name="password" type="password" class="form-control" placeholder="Enter Password">
            </div><hr>
            <div class="form-group">
                    <button class="btn btn-primary " name="login" type="Submit">Submit</button>
                </div>
        </form>
    </div>
</div>
</div>




