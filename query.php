<html>
	<title>result</title>
<body>
	<style>
	html {
	font-family: 'Open Sans', sans-serif;
	}
	body
	{
		
		background-image: url("http://www.freebiesgallery.com/wp-content/uploads/2014/02/blurred-background-10.jpg");
		background-attachement:center;
		background-size:cover;
		font-family: 'Open Sans', sans-serif;
	 }
	h1
	{
		color:#800060;
		text-decoration: underline;
	}
		h11
	{
		color:rgb(0, 0, 102);
		font-size: 250%;
		
	}
	h12
	{
		color:rgb(255, 102, 102);
		font-size: 250%;
		
	}
	h13
	{
		color:rgb(51, 51, 204);
		font-size: 250%;
		
	}
	a:link {
    color: white;
	}
	a:visited {
    color: white;
		}
		ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
li {
    float: left;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 12px 16px;
    text-decoration: none;
}
li a:hover:not(.active) {
    background-color: #111;
}
.active {
    background-color: #4CAF50;
}
	table {
		color: #333;
		font-family: Helvetica, Arial, sans-serif;
		width: 640px;
		border-collapse:
		collapse; border-spacing: 0;
		}

	td, th {
		border: 1px solid #e6ccff; /* No more visible border */
		height: 30px;
		transition: all 0.3s; /* Simple transition for hover effect */
			}

	th {
		background: #cc99ff; /* Darken header a bit */
		font-weight: bold;
		text-align: center;		
	}

	td {
	background: #FAFAFA;
	text-align: center;
	}

	/* Cells in even rows (2,4,6...) are one color */
	tr:nth-child(even) td { background: #b3b3ff; }

	/* Cells in odd rows (1,3,5...) are another (excludes header cells) */
	tr:nth-child(odd) td { background: #ffb3b3; }

	tr td:hover { background: #660033; color: #ffccff; } /* Hover cell effect! */
	
	</style>
	<center>
		<center><h11>ONLINE</h11><h12> PLASMA </h12><h13>BANK</h13></center>
<br>
	<ul>
	<li><a href='query.html'>Back</a></li>
	</ul>
	<br>
	<center><h1> DONOR'S LIST </h1></center>
<table border="1">
<tr>
<?php
require 'connection.php';
$conn    = Connect();
$bg       =$conn->real_escape_string($_POST['bg']);
$city       =$conn->real_escape_string($_POST['city2']);
$db      = "donor";
$sql   = "SELECT * FROM donor WHERE blood_group='".$bg."' AND city='".$city."'";
$result = mysqli_query($conn,$sql);
 $num = mysqli_num_rows($result);
 $all_property = array();
 echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    array_push($all_property, $property->name);  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";
$conn->close();
die();
?>
</table>
	</center>
	
</body>
</html>