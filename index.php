<!DOCTYPE html>
 <html>
 <head>
  <title>PHP Starter Application</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>

    <div>
    	<center>
    	<IMG SRC="/images/imgone.jpg" WIDTH="1260" HEIGHT="300" >
    	</center>
    </div>
 
		 
 
 	<div>
 	<table>

	<table border="1px" align="left">
 			 <?php
				  $servername = "us-cdbr-iron-east-03.cleardb.net";
				  $username = "b74ba3320e82ec";
				  $password = "2d194843";
				  $dbname = "ad_bb6ddb2f34daf52";
				  // Create connection
				  $conn = new mysqli($servername, $username, $password, $dbname);
				  // Check connection
				  if ($conn->connect_error) {
				      die("Connection failed: " . $conn->connect_error);
				  }
				  $sql = "SELECT * from servicios";
				  $result = $conn->query($sql);
				  if ($result->num_rows > 0) {
				      // output data of each row
				      while($row = $result->fetch_assoc()) {?>
				      <tr>
				     
				    <td><?php echo $row['nombre_servicio']?><br><?php echo $row['descripcion_servicio']?></td>
				   
				   	  </tr>	
				      
		     <?php }
			  } else {
			      echo "0 results";
			  }
			  $conn->close();
			 ?> 
	</table>
	 		
 	<table border="1px" align="right">	
 			 <?php
				   $servername = "us-cdbr-iron-east-03.cleardb.net";
  				   $username = "b74ba3320e82ec";
				   $password = "2d194843";
				   $dbname = "ad_bb6ddb2f34daf52";
				  // Create connection
				  $conn = new mysqli($servername, $username, $password, $dbname);
				  // Check connection
				  if ($conn->connect_error) {
				      die("Connection failed: " . $conn->connect_error);
				  }
				  $sql = "SELECT * from servicios";
				  $result = $conn->query($sql);
				  if ($result->num_rows > 0) {
				      // output data of each row
				      while($row = $result->fetch_assoc()) {?>
				      <tr>
				     
				      <td><?php echo $row['nombre_servicio']?><br><?php echo $row['descripcion_servicio']?></td>
				   
				   	  </tr>	
				      
		     <?php }
			  } else {
			      echo "0 results";
			  }
			  $conn->close();
			 ?> 
	</table>
 	
 	</table>
    </div>
 
 	<div>
 		<center>
 		<IMG SRC="/images/imgtwo.jpg" WIDTH="1260" HEIGHT="300" >
 		</center>
    </div>
 
 
 </body>
 </html>
