



<table class = "table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>member_id</th>
                                    <th>Name</th>
                                    <th>Comments</th>
                                    <th>Date</th>

                                </tr>
                            </thead>
                            <tbody>

                             <?php
//

                             if(isset($_SESSION['user_id'])){

                              $user_id = $_SESSION['user_id'];
                              $query = "SELECT * FROM comment_box WHERE member_id = '$user_id'";
                             $select_members = mysqli_query($connection,$query);

                               while($row = mysqli_fetch_assoc($select_members)) {
                                   $member_id = $row['member_id'];
                                   $name = $row['name'];
                                   $comments = $row['comments'];
                                   $date_posted = $row['date_posted'];


                                   echo "<tr>";
                                   echo "<td>$member_id</td>";
                                   echo "<td>$name</td>";
                                   echo "<td>$comments</td>";
                                   echo "<td>$date_posted</td>";


//                                $query = "SELECT * FROM categories WHERE cat_id = $post_category_id ";
//                                $select_categories = mysqli_query($connection,$query);
//                                                             
//                                while($row = mysqli_fetch_assoc($select_categories)){
//                                $cat_id = $row['cat_id'];
//                                $cat_title = $row['cat_title'];
//                                echo "<td>{$cat_title}</td>";
//                                }


//                                   echo "<td><a href='users.php?source=edit_user&edit_user={$member_id}'>Edit</a></td>";
//                                  echo "<td><a href='users.php?delete={$member_id}'>Delete</a></td>";
                                   echo "</tr>";
                               }
                               }
                               ?>
                                    
                            </tbody>
                        </table>


<?php 
 if(isset($_GET['delete'])){

     if(isset($_SESSION['user_role'])) {
         if ($_SESSION['user_role'] == 'member') {

             $the_member_id = $_GET['delete'];

             $query = "DELETE FROM comment_box WHERE memeber_id = {$the_member_id} ";
             $delete_member_query = mysqli_query($connection, $query);
             header("Location: users.php");
         }
     }
 }


?>