<html>
    <head>
    	<link rel="stylesheet" type="text/css" href="view/css/estilos.css" />
    </head>
	<body>
		<div>
			<h3>Home</h3>
		</div>
		<div>
			<table border="1">
				<tr><td class="cabeceras">Nombre</td></tr>
				<?php 
					 for($index=0; $index < count($vinosHome); $index++)
					 {
					 	$vino = $vinosHome[$index];
					 	 echo "<tr>";
	                     echo "<td>".$vino->getNombre()." "."</td>";
	                     echo "</tr>";
					 }
				?>				
			</table>
		</div>
	</body>
</html>                