<?php
    //address of the server where db is installed
    include "includes/db.php";

    if ($connection->connect_error) {
      die("Connection failed: " . $connection->connect_error);
    }
    //the SQL query to be executed
    $query = "SELECT * FROM swim_records";
    //storing the result of the executed query
    $result = $connection-> query($query);
    //initialize the array to store the processed data
    $jsonArray = array();
    //check if there is any data returned by the SQL Query
    if ($result->num_rows > 0) {
      //Converting the results into an associative array
      while($row = $result->fetch_assoc()) {
        $jsonArrayItem = array();
        $jsonArrayItem['label'] = $row['member_id'];
        $jsonArrayItem['value'] = $row['time_recorded'];
        //append the above created object into the main array.
        array_push($jsonArray, $jsonArrayItem);
      }
    }
    //Closing the connection to DB
    $connection->close();
    //set the response content type as JSON
    header('Content-type: application/json');
    //output the return value of json encode using the echo function.
    echo json_encode($jsonArray);
?>