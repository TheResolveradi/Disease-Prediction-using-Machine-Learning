<?php
echo '<link href="css/style.css" rel="stylesheet">';
require_once('conn.php');
session_start();
$name=$_SESSION['PharmacyName'];
//echo $name;
$query="select * from pharmacy;";
$result = mysqli_query($con,$query);
//echo $query;
if($result->num_rows > 0) {
	echo '<style>
	body{
		background-color: #DEF0F5;
	}	
	button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #3a9ecb;
  width: 100px;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
  margin-top:10px;
  margin-bottom:10px;
}</style>';
	echo '<center><table cellpadding=10 cellspacing=2 border=1>';
		echo '<tr>';
		echo '<th>Area</th>
			  <th>Name</th>';
		echo '</tr>';
	while($row = $result->fetch_assoc()) {
	$area=$row['Area'];
	echo '<tr>';
			echo '  <td>' . $row["Area"] . '</td>';
			echo '  <td>' . $row["Chemist"] . '</td>';
			echo '  </td></tr>';
		}
	}
	echo "<a href='Welcomepharmacy.php'><button>Back</button></a></center>";
?> 