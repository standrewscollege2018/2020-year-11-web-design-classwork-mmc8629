<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
$counter = 1;
do {
  if ($counter%3 == 0 and $counter%5 == 0) {
echo "<p>fizz buzz</p>";
  }
else if ($counter%3 == 0) {
  echo "<p>fizz</p>";
}
else if ($counter%5 ==0) {
  echo "<p>buzz</p>";
}
else {
  echo "<p>$counter</p>";
}
$counter= $counter + 1;
} while ($counter <= choose);

     ?>

  </body>
</html>
