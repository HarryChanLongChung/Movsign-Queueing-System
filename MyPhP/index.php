<?php

	function DBupdate($RawData) {
		$no 	= (int)substr($RawData,1);
		$Gpname = substr($RawData, 0, 1);
		$query 	= ("UPDATE AppTest SET Number = $no WHERE GroupName = '".$Gpname."'");
		$result = $GLOBALS['conn']->query($query);
	}

	function RefreshDisplay(){
		$query = ("SELECT * FROM AppTest");
		$result = $GLOBALS['conn']->query($query);

		while ($row = $result->fetch_assoc()) {
    	echo "<h3>Queueing status =" .$row['GroupName'] .$row['Number'] ."</h3>";
    	//$output['GroupName']=$row['GroupName'];
		//$output['Data']		=$row['GroupName'] .$row['Number'];
    	//echo json_encode($output);
    	}
	}

	include 'includes/connection.php';
	header("Refresh: 5;url='http://harryapptestingsite.net23.net/index.php'");

	//If we get a variable posted
	if (isset($_POST["name"])) {
		$name = $_POST['name'];
		DBupdate($name);
	}
	RefreshDisplay();
?>