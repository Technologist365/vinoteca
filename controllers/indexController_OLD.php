<?php

	//core
	include("services/services.php");
	

	
	//services
	$vinosHome=seleccVinosHome();
	
	//view parameters - no es necesario colocarlo en la sesion
	//$_SESSION['vinosHome']=$vinosHome;           
	
	//view
	include("view/php/home.php");
	
	
	
	
 
