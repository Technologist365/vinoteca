<?php

class MysqlVinosDB {
 
	private $databaseURL = "mysql.hostinger.es";
	private $databaseName = "u385059401_vinoteca"; 
	 
    private $databaseUName = "u385059401_not";
    private $databasePWord = "notpass23";
    

    function getDatabaseURL(){
            return $this->databaseURL;
        }
    function getDatabaseUName(){
            return $this->databaseUName;
        }
    function getDatabasePWord(){
            return $this->databasePWord;
        } 
    function getDatabaseName(){
            return $this->databaseName;
        } 
}
?>