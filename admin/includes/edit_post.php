<?php
if(isset($_GET['edit_post'])) {
    // echo $_GET['p_id'];
    $the_event_id = $_GET['edit_post'];

    $query = "SELECT * FROM swim_records WHERE event_id = '$the_event_id'";
    $select_events_by_id = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_events_by_id)) {
        $event_id = $row['event_id'];
        $event_name = $row['event_name'];
        $event_categories = $row['event_categories'];
        $event_date = $row['event_date'];
        $member_id = $row['member_id'];
        $time_recorded = $row['time_recorded'];

    }
}
    if (isset($_POST['update_event'])) {
//        $event_id = $_POST['event_id'];
        $event_name = $_POST['event_name'];
        $event_categories = $_POST['event_categories'];
        $event_date = $_POST['event_date'];
        $member_id = $_POST['member_id'];
        $time_recorded = $_POST['time_recorded'];

        $query = "UPDATE swim_records SET event_name ='{$event_name}', event_categories = '{$event_categories}', event_date = '{$event_date}', member_id = '{$member_id}', time_recorded = '{$time_recorded}' WHERE event_id = '{$the_event_id}'";



        $update_event = mysqli_query($connection, $query);

        confirmQuery($update_event);

        echo "<p class='bg-success'>Post Created: " . " " . "<a href='posts.php?edit_post={$the_event_id}'>View posts</a> or <a href='posts.php'>Edit More Posts </a> ";


}
?>
     
   <form action="" method="post" enctype="multipart/form-data">
    
    <div class="form-group">
        <label for="event_name">Event Name</label>
        <input value ="<?php echo $event_name; ?>" type="text" class="form-control" name="event_name"> <!--put value to hold existing value -->
    </div>
    <div class="form-group">
        <label for="event_categories">Event Categories</label>
        <input value ="<?php echo $event_categories; ?>" type="text" class="form-control" name="event_categories">
    </div>
    <div class="form-group">
        <label for="event_date">Event Date</label>
        <input type="text" class="form-control" value="<?php echo $event_date; ?> " name="event_date">
    </div>
    <div class="form-group">
        <label for="member_id">Member</label>
        <input value ="<?php echo $member_id; ?>"type="text" class="form-control" name="member_id">
    </div>
    <div class="form-group">
        <label for="time_recorded">Timings</label>
        <input value ="<?php echo $time_recorded; ?>"type="text" class="form-control" name="time_recorded">
    </div>
    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_event" value="Update">
    </div>
    
</form>