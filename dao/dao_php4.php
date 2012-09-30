<?php
      include("mysqlVinosDB.php");
//      include("core/vino.php");
      
      function seleccVinos()
      {
      		$mysqlVinosDB=new MysqlVinosDB();
      		
      	    $connection = mysql_connect($mysqlVinosDB->getDatabaseURL(), 
      	                                $mysqlVinosDB->getDatabaseUName(), 
      	                                $mysqlVinosDB->getDatabasePWord());      	                                
                // or die ("Error while connecting to localhost");
            $db = mysql_select_db($mysqlVinosDB->getDatabaseName(), $connection);
                //or die ("Error while connecting to database");
        
            $rowArray;
            $rowID = 0;
            $query = "SELECT * FROM VINOS";
            $result = mysql_query($query);
            while($row = mysql_fetch_array($result))
            {   
               $vino = new Vino();
			   $vino->setNombre($row['NOMBRE']);
               
               $rowArray[$rowID] = $vino;        
               $rowID = $rowID +1;
            }  
            
            mysql_close($connection);
            
            return $rowArray;
      }      
?> 