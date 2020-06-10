<?php

// checking to see if the $_POST aray has content


// if firstname doesnt exise, it returns false
if(!isset($_POST['firstname'])) {
  header("Location:http://www.google.com");
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>froggy</title>
  </head>
  <body>
    <?php
// get the infomation out of the $_post array
$firstname = $_POST['firstname'];
echo "hello $firstname";



     ?>


  </body>
</html>
