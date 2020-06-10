<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>froggy tinder</title>
  </head>
  <body>
    <?php
//to comment is "//"
//php lines end in a ";"
// "echo() is a baisc print function"
echo "<h1> frog image </h1>";

//varibles are "$name" then make the varible a value
$name = "frog";

echo "<h3>$name site</h3>";

     ?>
<!-- here is the code to send infomation between the websites -->
<!-- this is teh code for an enter bar for a password -->
     <form action="hello.php" method="post">
       <input type="text" name="firstname" value="enter your name">
       <button type="submit" name="button">leme see them frogs</button>
     </form>
     <img src="pully-frog.jpg" alt="cursed frog">
  </body>
</html>
