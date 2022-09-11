<?php
    session_start();
    if(!isset($_SESSION['cabang'])){
	    header("location:index.php");
	}
?>