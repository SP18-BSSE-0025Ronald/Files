<?php
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Even Number Check</title>
  </head>
  <body>


<form  action="even.php" method="post">
  <input type="text" name="num" placeholder="Enter a number">
  <input type="submit" name="submit" >
</form>


<?php

if(isset($_POST['submit'])){
  $num1=$_POST['num'];

if($num1 %2 == 0 ){
  echo "Even";
}
else{
  echo "Odd";
}



}


 ?>

  </body>
</html>
