<html>
<body background="http://www.clker.com/cliparts/c/1/3/3/12930883391149431275blood-scarlet-red-splash.jpg">
<center>
<style>
body {
	font-family:verdana;
	font-size:25px;
}
table {
	opacity:0.8;
}
a {
   font-family:verdana;
  font-size: 20px;
  color: black;
}
</style>
<?php
 
require 'connection.php';
$conn	= Connect();
$plasmabankid	= $_POST['plasmabankid'];
$plasmabankname	= $conn->real_escape_string($_POST['plasmabankname']);
$street	= $conn->real_escape_string($_POST['street']);
$city	= $conn->real_escape_string($_POST['city']);
$zipcode	= $_POST['zipcode'];
$phone	= $_POST['phno'];
$db 	= "plasma_bank";
$query	= "INSERT INTO `plasma_bank` (`plasma_bank_id`, `plasma_bank_name`, `street`, `city`, `zipcode`, `phone`) VALUES ('" . $plasmabankid . "','" . $plasmabankname . "','" . $street . "','" . $city . "','" . $zipcode . "','" . $phone . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
echo "Thank You For Registering! We will be contacting you shortly <br>";
echo "<a href='index.html'>Return to main page</a>"; 
header('Refresh: 5; URL=index.html');
$conn->close();
die();
?>

</body>
</html>