<?php	
	  include("core/vino.php");
	  include("dao/dao.php");
	  
	  function seleccVinosHome()
	  {
//	  	$result; 
	  	
//	  	$vino1=new Vino();
//	  	$vino1->setNombre('Scala Dei');	 
//	  	
//	  	$vino2=new Vino();
//	  	$vino2->setNombre('Protos');	 
//
//	  	$result[0]=$vino1;
//	  	$result[1]=$vino2;
	
	  	//Dao
	  	$result=seleccVinos();
	  	
	  	return $result;
	  }