<?php
	session_start();
	$cabang = isset($_POST['cabang'])?$_POST['cabang']:'';
	$username = isset($_POST['username'])?$_POST['username']:'';	
	$password = isset($_POST['password'])?$_POST['password']:'';	
	if($cabang=="Jakarta"){	
		if($username!="UserJKT" || $password!="Jkt1234$"){					
			header("location:index.php?msg=Login cabang Jakarta tidak valid");
			exit();
		}		
	}		
	else if($cabang=="Bali"){
		if($username!="UserBali" || $password!="Bali4321#"){
			header("location:index.php?msg=Login cabang Bali tidak valid");
			exit();
		}		
	}			
	$_SESSION['login'] = $username;	
	$_SESSION['cabang'] = $cabang;	
	header("location:home.php");	
?>