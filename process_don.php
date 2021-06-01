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
$conn    = Connect();
$donid   = $_POST['donid'];
$fname    = $conn->real_escape_string($_POST['fname']);
$lname    = $conn->real_escape_string($_POST['lname']);
$bg       =$conn->real_escape_string($_POST['bg']);
$mreport = $conn->real_escape_string($_POST['mreport']);
$street    = $conn->real_escape_string($_POST['street']);
$city    = $conn->real_escape_string($_POST['city']);
$zip    = $conn->real_escape_string($_POST['zip']);
$phone    = $conn->real_escape_string($_POST['phone']);
$db      = "donor";
$query   = "INSERT INTO `donor` (`donor_id`, `first_name`, `last_name`, `blood_group`, `medical_report`, `street`, `city`, `zipcode`, `phone`)VALUES('" . $donid . "','" . $fname . "','" . $lname . "','" . $bg . "','". $mreport . "','". $street . "','". $city . "','". $zip . "','". $phone . "')";
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
