<?php
  if(isset($_POST['create_user'])){
      $member_id= $_POST['member_id'];
      $member_name = $_POST['member_name'];
      $comments = $_POST['comments'];
      $Date = date('d-m-y');

            
$query = "INSERT INTO members(member_id,name,comments,date))";
$query .= "VALUES('{$member_id}','{$member_name}','{$comments}',now())";
      
      $create_member_query = mysqli_query($connection, $query);
      confirmQuery($create_member_query);     //function confirmQuery($result)-- result can be any-declared var
      
      echo "Post Created: " . " " . "<a href='members.php'>View members</a> or <a href='members.php?source=add_members'>Add More users </a>" ;
  }
?>


<form action="" method="post" enctype="multipart/form-data">

<!--    <div class="form-group">-->
<!--        <label for="title">Member_id</label>-->
<!--        <input type="text" class="form-control" name="member_id">-->
<!--    </div>-->
    <div class="form-group">
        <label for="member_name">Name</label>
        <input type="text" class="form-control" name="member_name">
    </div>
    <div class="form-group">
        <label for="comments">Comments</label>
        <input type="text" class="form-control" name="comments">
    </div>
        
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Add member">
    </div>
    
</form>