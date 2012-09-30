<?php
	include("detectMobile.php");
	
	$mobile = detect_mobile(); 
	if($mobile === true)
		header('Location: mobi');
	
	//core
	include("services/services.php");
	
	//request parameters
	//$_GET['']
	
	//services
	$vinosHome=seleccVinosHome();
	
	//view parameters - no es necesario colocarlo en la sesion
	//$_SESSION['vinosHome']=$vinosHome;           
	
	//view
	include("view/php/home.php");
	
	
	
	
 
