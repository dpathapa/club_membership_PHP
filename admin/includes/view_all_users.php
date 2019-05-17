  <table class = "table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Username</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Age</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Role</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php 
                             $query = "SELECT * FROM users";
                             $select_users = mysqli_query($connection,$query);
                                                             
                               while($row = mysqli_fetch_assoc($select_users)){
                               $user_id = $row['user_id'];
                               $username = $row['username'];
                               $user_password = $row['user_password'];
                               $user_firstname = $row['user_firstname'];
                               $user_lastname= $row['user_lastname'];
                               $user_age = $row['user_age'];
                               $user_address = $row['user_address'];
                               $user_email = $row['user_email'];
                               $user_telephone = $row['user_telephone'];
                               $Date = $row['Date'];
                               $user_role = $row['user_role'];                         
                                   
                                                                    
                                echo "<tr>" ; 
                                echo "<td>$user_id</td>";
                                echo "<td>$username</td>";
                                echo "<td>$user_firstname</td>";
                                echo "<td>$user_lastname</td>";
                                echo "<td>$user_age</td>";
                                echo "<td>$user_address</td>";
                                echo "<td>$user_email</td>";
                                echo "<td>$user_telephone</td>";
                                echo "<td>$Date</td>";
                                echo "<td>$user_role</td>";
                                                       
                                
//                                $query = "SELECT * FROM categories WHERE cat_id = $post_category_id ";
//                                $select_categories = mysqli_query($connection,$query);
//                                                             
//                                while($row = mysqli_fetch_assoc($select_categories)){
//                                $cat_id = $row['cat_id'];
//                                $cat_title = $row['cat_title'];
//                                echo "<td>{$cat_title}</td>";
//                                }
                                                               
                                echo "<td></td>";
                                echo "<td></td>";
                                echo "<td></td>";
                                echo "<td></td>";
                                echo "<td><a href='users.php?source=edit_user&edit_user={$user_id}'>Edit</a></td>";
                                echo "<td><a href='users.php?delete={$user_id}'>Delete</a></td>";
                                echo "</tr>" ; 
                                                                      
                               }
                               ?> 
                                    
                            </tbody>
                        </table>
                        
                       
<?php 
 if(isset($_GET['delete'])){

     if(isset($_SESSION['user_role'])) {
         if ($_SESSION['user_role'] == 'admin') {

             $the_user_id = $_GET['delete'];

             $query = "DELETE FROM users WHERE user_id = {$the_user_id} ";
             $delete_user_query = mysqli_query($connection, $query);
             header("Location: users.php");
         }
     }
 }


?>