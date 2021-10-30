<?php

session_start();


if ((isset($_POST['nameregister'])) && (isset($_POST['emailregister'])) && (isset($_POST['mobileregister'])) && (isset($_POST['ageregister'])) && (isset($_POST['villageregister'])) && (isset($_POST['roleregister'])) && (isset($_POST['usernameregister'])) && (isset($_POST['passwordregister']))) {
	
	if((!empty($_POST['nameregister'])) && (!empty($_POST['emailregister'])) && (!empty($_POST['mobileregister'])) && (!empty($_POST['ageregister'])) && (!empty($_POST['villageregister'])) && (!empty($_POST['roleregister'])) && (!empty($_POST['usernameregister'])) && (!empty($_POST['passwordregister']))){

		$name = $_SESSION['reg_action_name'] = $_POST['nameregister'];
		$email = $_POST['emailregister'];
		$mobile = $_POST['mobileregister'];
		$age = $_POST['ageregister'];
		$village = $_POST['villageregister'];
		$role = $_POST['roleregister'];
		$user = $_SESSION['reg_action_username'] = $_POST['usernameregister'];
		$pass = $_SESSION['reg_action_password'] = $_POST['passwordregister'];

		require_once('config.php');

		$sql = "INSERT INTO `users`(`id`, `name`, `email`, `mobile`, `age`, `village`, `role`, `username`, `password`, `token`) VALUES (NULL,'$name','$email','$mobile','$age','$village','$role','$user','$pass','true');";
		$result = mysqli_query( $conn , $sql );
        if( !$result ){
            echo mysqli_error($conn);
            exit("error");
        }
        else{
        	if($role == "manager")
            	header("Location: main/");        
            else
            	header("Location: labor/");	
        }

	}
	else{
		exit('Error From 2nd Frame');
	}
}
else if(isset($_POST['usernamelog']) && isset($_POST['rolelog']) && isset($_POST['passwordlog'])){

	if((!empty($_POST['usernamelog'])) && (!empty($_POST['rolelog'])) && (!empty($_POST['passwordlog']))) {

		require_once('config.php');

		$usernamelog = $_SESSION['log_action_username'] = $_POST['usernamelog'];
		$rolelog = $_POST['rolelog'];
		$passwordlog = $_SESSION['log_action_password'] = $_POST['passwordlog'];

		$sql = "SELECT * FROM `users` where `username` = '$usernamelog' and `password` = '$passwordlog';";
		$result = mysqli_query($conn,$sql);
		$row=mysqli_fetch_assoc($result);
		$_SESSION['log_action_name'] = $row["name"];
		if( !$result ){
            echo mysqli_error($conn);
            exit("error");
        }
        else{
        	if($rolelog == "manager")
            	header("Location: main/");        
            else
            	header("Location: labor/");	
        }

	}
}
else{
	exit('Error From 1st Frame');
}

?>