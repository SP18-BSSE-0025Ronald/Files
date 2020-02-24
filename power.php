

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Square</title>
   </head>
   <body>
<form class="" action="power.php" method="post">
  <input type="number" name="num1" placeholder="Enter a base value"><br>
  <input type="number" name="num2" placeholder="Enter a Power value">
  <input type="submit" name="submit" value="submit">
</form>

<?php
if(isset($_POST["submit"])){
  $n1=$_POST['num1'];
  $n2=$_POST['num2'];



$n3=1;



for($i=0; $i<$n2; $i++){
     $n3=$n1* $n3;

}
echo $n3;
}

?>

   </body>
 </html>
