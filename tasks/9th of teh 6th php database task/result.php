<?php

// this page will run a query and display the result(s)

// we incluse the dbconnect.php code to link the sites to the database
include("dbconnect.php");

// grab the search content from the POST array, put into a varible.
$search = $_POST['search']

//there are 3 steps to running a select query
// 1. set up the query in a verible

$result_sql = "SELECT * FROM student WHERE firstname LIKE %$search% ";

// 2. we go to the database and run the query.
// we use mysqli_query(). this takes the two parameters : db connects and query
$result_qry = mysqli_query($dbconnect, $result_sql);

// 3. we organise our results into an associative array
// bassically. we can use the column headings from the database table
// we use the mysqli_fetch_assoc() function
$result_aa = mysqli_fetch_assoc($result_qry);

// dispaly the information
$firstname = $result_aa['firstname'];
$lastname = $result_aa['lastname'];

echo $result_aa['firstname'];
echo $result_aa['lastname'];
 ?>
