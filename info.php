<html>
<body>
<?php
$name = $_POST["name"];
$username = $_POST["username"];
$Email = $_POST["Email"];
$number = $_POST["number"];
$Gender = $_POST["Gender"];
$birthdate = $_POST["birthdate"];

echo "Your name is".$name."\n";
echo $username."\n".$Email."\n".$number."\n".$Gender."\n".$birthdate;
?>
</body>
</html>