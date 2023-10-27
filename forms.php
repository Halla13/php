
<form action="form.php" method="GET" >
Name:<input type="text "  name="fname" >
Last:<input type="text "  name="lname" >
<input type ="submit">

</form>
<?php
echo $_GET["fname"];
echo $_GET["lname"];

?>

<form action="form.php" method="POST" >
Name:<input type="text "  name="fname" >
<input type ="submit">

</form>
<?php
echo $_REQUEST["fname"];
echo $_REQUEST["lname"];

?>

