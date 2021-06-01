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
$hospital_id	= $_POST['hospital_id'];
$db 	= "patient_blood_usage";
$query	= "INSERT INTO `patient_blood_usage` (`patient_id`,`hospital_id`)  VALUES ('" . $patient_id . "','".$hospital_id."')";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: Please register first ".$conn->error);
}
echo "<h2> PATIENT DETAILS SUCCESSFULLY ADDED </h2> <br>  <center><div><a href='query.html'>Return to main page</a>
</center></div>";
 
$conn->close();
die();
?>
</body>
</html>
