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
$id   = $_POST['id1'];
$db      = "patient_blood_usage";
$query   = "DELETE FROM patient_blood_usage WHERE patient_id='".$id."'";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "<h2> PATIENT DETAILS DELETED </h2>  <br>";
echo "<a href='query.html'>Return to main page</a>"; 
header('Refresh: 5; URL=query.html');
$conn->close();
die();
?>

</body>
</html>
