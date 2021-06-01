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

$patient_id	= $_POST['patient_id'];
$fname	= $conn->real_escape_string($_POST['fname']);
$lname	= $conn->real_escape_string($_POST['lname']);
$bloodgp	= $_POST['bloodgp'];
$patient_disease	= $conn->real_escape_string($_POST['patient_disease']);
$db 	= "patient";
$query	= "INSERT INTO `patient` (`patient_id`, `first_name`, `last_name`, `blood_group`, `patient_disease`)  VALUES ('" . $patient_id . "','" . $fname . "','" . $lname . "','" . $bloodgp . "','" . $patient_disease . "')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
echo "Thank You For Registering! We will be contacting you shortly <br>  <center><a href='index.html'>Return to main page</a></center> <br>"; 
$conn->close();
die();
?>
</table>
</body>
</html>
