<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>del</title>
</head>
<body>
<?php 
	include 'conn.php'; 
	if (!isset($_GET['id']) || empty($_GET['id'])) {
	    echo "<h1>Error: No ID provided.</h1>";
	    echo '<a href="patient_records.php">Back to Patient Records</a>';
	    exit();
	}

	$id = mysqli_real_escape_string($conn, $_GET['id']);
	$sql = "DELETE FROM `patient_records` WHERE `id` = ".$id;
	$result = mysqli_query($conn, $sql);
	if ($result) {
		mysqli_close($conn);
		echo '<meta http-equiv="refresh" content="0;url=patient_records.php">';
		echo "done!";
		exit();
	}else{
		echo "<h1>มีบางอย่างผิดพลาด</h1>";
		echo '<a href="patient_records.php">patient_records</a>';
		mysqli_close($conn);
	}
?>

</body>
</html>