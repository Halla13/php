<?php
//calculator 
echo $_GET["number1"] +  $_GET["number2"];
echo $_GET["number1"] -  $_GET["number2"];
echo $_GET["number1"] * $_GET["number2"];
;
?>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="calc.php" method="GET" class ="form">
            <div>
                <lable>Enter number1:</lable>
                <input type="number" id="num1" name="number1" class="form-contrl">
</div>
<div>
                <lable>Enter number2:</lable>
                <input type="number" id="num2" name="number2" class="form-contrl">
</div>
<br>
<input type="submit" class="btn btn-primary">
</form>
</div>
</body>