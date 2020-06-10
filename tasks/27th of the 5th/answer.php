<?php

if(!isset($_POST['guess'])) {
  header("Location:http://youtu.be/dMN-pjcchrE");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="styles.css">
  <body>

<?php

if ($_POST['guess']==50)  {
  header("location:index.php?reply=congrats");
}
elseif ($_POST['guess']>= 100 or ['guess']<=0) {
?>
<p>it is inbetween 1 and 100</p>
<?php
}

elseif ($_POST['guess']>=50) {
  ?>
<p>too high</p>
<p>try again</p>
<?php
}


elseif ($_POST['guess']<=50) {
  ?>
<p>too low</p>
<p>try again</p>
<?php
}
?>
  </body>
</html>
