<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>patient_records</title>
</head>
<body>
	<a href="index.php">หน้าหลัก</a><br>
	<table border="3px">
	  <tr>
	    <th>ID</th>
	    <th>JSON</th>
	    <th>TIME</th>
	    <th>EDIT</th>
	    <th>DEL</th>
	  </tr>
	<?php include 'conn.php'; 
	$result = mysqli_query($conn, "SELECT * FROM `patient_records`");
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)){
		  	echo "<tr>";
		  	echo "<td>".$row['id']."</td>";
		  	echo "<td>".$row['patient_data']."</td>";
		  	echo "<td>".$row['timestamp']."</td>";
		  	echo "<td><a href=\"edit.php?id=".$row['id']."\">edit</a></td>";
		  	echo "<td><a href=\"del.php?id=".$row['id']."\">del</a></td>";
		  	echo "</tr>";
			}
		}else{
			echo "ไม่พบรายการคนไข็";
		}

	?>
	</table>
</body>
</html>