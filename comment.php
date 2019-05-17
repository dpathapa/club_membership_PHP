<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<!-- Navigation -->
<?php include "includes/navigation.php"; ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
<?php
        if(isset($_POST['create_comment'])){
        $comment = $_POST['comment'];
        $author = $_SESSION['user_id'];
        $member = $_SESSION['user_role'] == 'member';
        $date = date('d-m-y');



        $query = "INSERT INTO comment_table(comments,author,member,date) ";
        $query .= "VALUES({'{$comment}','{$author}','{$member}',NOW()) ";
        $create_comment_query = mysqli_query($connection, $query);

        if(! $create_comment_query){
            confirmQuery($create_comment_query);
        }
        echo "comment posted!!";
        }

?>
        <form action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="comment">Comment </label>
                <textarea class="form-control" name="comment_content" id="" cols="30" rows="10"></textarea>
            </div>

<!--            <div class="form-group">-->
<!--                <label for="author">Author</label>-->
<!--                <input type="text" class="form-control" name="author">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label for="member">Member</label>-->
<!--                <input type="text" class="form-control" name="member">-->
<!--            </div>-->
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="create_post" value="Post comment">
            </div>

        </form>



<hr>

<!-- Footer -->
<?php include "includes/footer.php"; ?>
