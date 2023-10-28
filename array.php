<form action="array.php" method = "GET">
<input type ="text" name="name">
<input type="submit">


</form>
<h1> arrays </h1>
<?php
$name = $_GET["name"];
//associative _array
$family = ["hala " , "hind" ,"maryam" ];
$family = [ 
    "designer" => "hala" , "programmer"=> "hind" , "gamer"=> " maryam"
];
$score = [ 
    "hala" =>  ["99", "A"] , "hind"=> ["100","A"] , "maryam"=> [" 100","A"] ,
];
echo  "score:" . $score [$name][0];
echo "<br>";
echo  "grade:". $score [$name][1];

 echo count($family);




?>