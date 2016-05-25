<?php
	include("dbCon.php");

	echo "<h1>U.S. States</h1>";
	$sql = "SELECT * FROM states";
	$rec = $conn->query( $sql );
	$num = $rec->num_rows;

	echo $num;
	echo "<hr>";
	echo gettype($rec);
	echo "<hr>";
	print_r($rec);
	echo "<hr>";
	if( $num > 0 ){
		for( $i = 0; $i < $num; $i++){
			$row = mysqli_fetch_array($rec);
			echo $row['stateCode'] . " | " . $row['stateName'];
			echo "<br>";
		}

	}

	echo "<h1>COUNTRIES</h1>";
	$sql = "SELECT * FROM countries";
	$rec = $conn->query( $sql );
	$num = $rec->num_rows;

	echo $num;
	echo "<hr>";
	echo gettype($rec);
	echo "<hr>";
	print_r($rec);
	echo "<hr>";
	if( $num > 0 ){
		for( $i = 0; $i < $num; $i++){
			$row = mysqli_fetch_array($rec);
			echo $row['countryCode'] . " | " . $row['countryName'];
			echo "<br>";
		}

	}
?>