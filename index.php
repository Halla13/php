<?php
//variables المتغيرات 
$title="hala";
$num=40;
$float=3.14;


//strings 
echo $string ="hala";
echo $string;
echo "<br>";
 echo strtolower($string);
 echo strtoupper($string);
 echo $string[3]= "n";
 echo $string;

//math functions عمليات رياضية
//echo abs(-30);
//echo pow(5,3);
echo sqrt(9);
//echo round (3.6);
//echo floor(3.8);
//echo ceil(3.1);
echo max(3,10);
echo min(3,10);



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title  . "home page " ?></title>
</head>
<body>
  <?php echo "<h1>welcome to  $title</h1>"  ?>

</body>
</html>

