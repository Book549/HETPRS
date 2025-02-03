<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>patient_records</title>
</head>
<body>
	<a href="index.php">หน้าหลัก</a><br>
	<?php include 'conn.php'; 
	$result = mysqli_query($conn, "SELECT * FROM `patient_records`");
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_assoc($result)){
			foreach ($row as $key => $value) {
				echo "$key => $value";
			}
			echo "<br>";
		}
	}else{
		echo "ไม่พบรายการคนไข็";
	}
	?>

</body>
</html>