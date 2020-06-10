
<?php
// the dbconnect.php file caontains all the information
// that we need to connect to the database

// we use the mysqli_connect() function
// this has 4 parameters (location, username, passwokd, db name)
// we put this into a varible so we can use it anytime

$dbconnect = mysqli_connect("localhost", "root", "", "studentdb" );



 ?>
