<?php
 require 'connection.php';
 $conn	= Connect();
 $uname = $conn->real_escape_string($_POST['uname']);
 $psw	= $conn->real_escape_string($_POST['psw']);
 $db 	= "hospital";
 $sql 	= "SELECT * FROM hospital where phone='" . $uname . "' and hospital_id='" . $psw . "' ";
 $result= mysqli_query($conn,$sql);
 $num 	= mysqli_num_rows($result);
 if ($num > 0) {
	//  while($row = mysqli_fetch_assoc($result)){
	// 	 $hname = $row['hospital_name'];
	//  }
	//  echo "Successful LOGIN! Welcome " . $hname . " ";
	 header('Location: query.html');
	 exit();
 }
 else {
	 echo "<h2> Wrong username/password </h2>";
 }
 $conn->close();
 
?>