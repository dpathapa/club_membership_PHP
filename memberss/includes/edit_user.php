<?php
if(isset($_GET['edit_user'])){
    $the_member_id = $_GET['edit_user'];
    
     $query = "SELECT * FROM comment_box WHERE member_id = $the_member_id ";
     $select_members_query = mysqli_query($connection,$query);

       while($row = mysqli_fetch_assoc($select_members_query)){
           $id=$row['id'];
       $member_id = $row['member_id'];
       $name = $row['name'];
       $comments = $row['comments'];
       $date_posted = $row['date_posted'];

  }
}

  if(isset($_POST['edit_user'])){
//      $member_id = $_POST['member_id'];
      $name = $_POST['name'];
      $comments = $_POST['comments'];
      $date_posted = date('d-m-y');

            
 $query = "UPDATE comment_box SET name = '{$name}', comments = '{$comments}', date_posted = now() where member_id =$the_member_id";

    
    $update_member_query = mysqli_query($connection,$query);
    
    confirmQuery($update_member_query);
    echo "<p class='bg-success'>Member Updated: " . " " . "<a href='users.php?member_id={$the_member_id}'>View members</a> ";
      
  }

?>


<form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" value="<?php echo $name; ?>" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="comments">Comments</label>
        <input type="text" value="<?php echo $comments; ?>" class="form-control" name="comments">
    </div>


    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="edit_user" value="Edit user">
    </div>
    
</form>