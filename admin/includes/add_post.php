<?php
  if(isset($_POST['create_record'])){
      $event_id = $_POST['event_id'];
      $event_name = $_POST['event_name'];
      $event_categories= $_POST['event_categories'];
      $event_date= $_POST['event_date'];
      $member_id = $_SESSION['user_role'] == 'member';
      $time_recorded =$_POST['time_recorded'];

      

$query = "INSERT INTO swim_records(event_id,event_name,event_categories,event_date,member_id,time_recorded) ";
$query .= "VALUES({'{$event_id}','{$event_name}','{$event_categories}','{$event_date}',{'$member_id'},{'$time_recorded'}) ";
      
      $create_record_query = mysqli_query($connection, $query);
      
      confirmQuery($create_record_query);     //function confirmQuery($result)-- result can be any-declared var
      echo "Published";
//   echo "Post Created: " . " " . "<a href='../post.php?event_id={$the_event_id}'>View posts</a> or <a href='./posts.php?source=add_post'>Add More Posts </a>" ;
  }
?>

<form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="event_name">Event Name</label>
        <input type="text" class="form-control" name="event_name">
    </div>

     <div class="form-group">
        <label for="event_categories">Event Categories</label>
        <input type="text" class="form-control" name="event_categories">
    </div>

    <div class="form-group">
        <label for="event_date">Event Date</label>
        <input type="text" class="form-control" name="event_date">
    </div>

    <div class="form-group">
        <label for="member_id">Member</label>
        <input type="text" class="form-control" name="member_id">
    </div>
    <div class="form-group">
        <label for="time_recorded">Timings</label>
        <input type="text" class="form-control" name="time_recorded">
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_record" value="Publish">
    </div>
    
</form>