<?php 
include 'db_connect.php';
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
      
	$Email = array();
	foreach ($_POST as $value)
	{
				array_push($Email,$value);
	}

for($i = 0;$i <count($Email);$i++) {
	mysqli_query($mysqli,"UPDATE wishes_moniter SET display=1  WHERE email='". $Email[$i] . "'");	
}
header('Location: ./admin1361988.php');
?>
