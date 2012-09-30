<?php

class MysqlVinosDB {
 
	private $databaseURL = "localhost";
    private $databaseUName = "root";
    private $databasePWord = "";
    private $databaseName = "vinoteca";  

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