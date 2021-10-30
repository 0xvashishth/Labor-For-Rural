<?php

session_start();

if((isset($_POST['wname'])) && (isset($_POST['wprice'])) && (isset($_POST['wnumber'])) && (isset($_POST['wtime'])) && (isset($_POST['wdescription']))){

	if((!empty($_POST['wname'])) && (!empty($_POST['wprice'])) && (!empty($_POST['wnumber'])) && (!empty($_POST['wtime'])) && (!empty($_POST['wdescription']))){

		$wname = $_POST['wname'];
		$wprice = $_POST['wprice'];
		$wnumber = $_POST['wnumber'];
		$wtime = $_POST['wtime'];
		$wdescription = $_POST['wdescription'];

		$user = $_SESSION['add_work_for_user'];

		require_once('../config.php');

		$sql = "INSERT INTO `work`(`id`, `wname`, `wprice`, `wnumber`, `wtime`, `wdescription`, `linkuser`, `created_time`) VALUES (NULL,'$wname','$wprice', '$wnumber', '$wtime' ,'$wdescription','$user',NULL);";

		$result = mysqli_query( $conn , $sql );
        if( !$result ){
            echo mysqli_error($conn);
            exit("error");
        }
        else{
            	header("Location: index.php");
        }

	}
	else{
		exit('Error in frame 2');
	}
}
else{
	exit('Error in frame 1');
}

?>