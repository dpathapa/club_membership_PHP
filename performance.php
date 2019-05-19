<?php include('includes/db.php');
include ('includes/header.php');
include ('includes/navigation.php');
?>

<table class = "table table-bordered table-hover">
    <thead>
    <tr>
        <th>Event Id</th>
        <th>Event Name</th>
        <th>Event Categories</th>
        <th>Event Date</th>
        <th>Member</th>
        <th>Timings</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $query = "SELECT * FROM swim_records";
    $select_records = mysqli_query($connection,$query);

    while($row = mysqli_fetch_assoc($select_records)){
        $event_id = $row['event_id'];
        $event_name = $row['event_name'];
        $event_categories = $row['event_categories'];
        $event_date= $row['event_date'];
        $member_id= $row['member_id'];
        $time_recorded = $row['time_recorded'];
        
        


        echo "<tr>" ;
        echo "<td>$event_id</td>";
        echo "<td>$event_name</td>";
        echo "<td>$event_categories</td>";
        echo "<td>$event_date</td>";
        echo "<td>$member_id</td>";
        echo "<td>$time_recorded</td>";

//        echo "<td><a href='posts.php?source=edit_post&edit_post={$event_id}'>Edit</a></td>";
//        echo "<td><a href='posts.php?delete={$event_id}'>Delete</a></td>";
        echo "</tr>" ;

    }
    ?>

    </tbody>
</table>

