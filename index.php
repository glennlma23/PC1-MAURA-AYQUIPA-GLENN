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
				  $username = "b4463086f96755";
				  $password = "f20b01d3";
				  $dbname = "ad_0d961dfda46f40f";
				  // Create connection
				  $conn = new mysqli($servername, $username, $password, $dbname);
				  // Check connection
				  if ($conn->connect_error) {
				      die("Connection failed: " . $conn->connect_error);
				  }
				  $sql = "SELECT * from datascientists";
				  $result = $conn->query($sql);
				  if ($result->num_rows > 0) {
				      // output data of each row
				      while($row = $result->fetch_assoc()) {?>
				      <tr>
				     
				      <td><?php echo $row['titulods']?><br><?php echo $row['descripcionds']?></td>
				   
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
				  $username = "b4463086f96755";
				  $password = "f20b01d3";
				  $dbname = "ad_0d961dfda46f40f";
				  // Create connection
				  $conn = new mysqli($servername, $username, $password, $dbname);
				  // Check connection
				  if ($conn->connect_error) {
				      die("Connection failed: " . $conn->connect_error);
				  }
				  $sql = "SELECT * from itprofessionals";
				  $result = $conn->query($sql);
				  if ($result->num_rows > 0) {
				      // output data of each row
				      while($row = $result->fetch_assoc()) {?>
				      <tr>
				     
				      <td><?php echo $row['tituloip']?><br><?php echo $row['descripcionip']?></td>
				   
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
