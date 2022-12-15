<html>
<title> Last Record 10</title>
</html>

<?php
//including the database connection file
include_once("connect.php");
$conn1 = mysqli_query($conn, "SELECT * FROM data1 ORDER BY id DESC LIMIT 10");
?>

<html>
<head>
	<title>Homepage</title>
	<link href = "css/bootstrap.min.css" rel = "stylesheet">
      <link href = "css/bootstrap.css" rel = "stylesheet">
      <script src="js/jquery-3.4.1.js"></script> 
      <style type="text/css">
      	body{
		
       background-image: url("images/bg3.jpg");
       background-size: cover;
	
	}
	.table_content{
		padding-top: 3px;
	}
	.nav{
		float: right;
		margin-right: 30px;
	}
      </style>
	
</head>

<body>
	 <h2 style="color: #F39C12" align="center"><b>Web Server Based HMS</b></h2> 
	<div class="nav"> 
	<a href="index.html">Home</a> </div>
	<br/><br/>
	<div class="container table_content">
	<table class="table table-striped table-light">
  <thead>
    <tr class="bg-warning">
      <th scope="col">Id</th>
      <th scope="col">Pulse of Patient</th>
	  <th scope="col">Temperature of Patient</th>
      <th scope="col">Movement</th>
      
      <th scope="col">Date</th>
     
	  
    </tr>
  </thead>
		<?php
		while($res = mysqli_fetch_array($conn1)) {		
			echo "<tr>";
			
			echo "<td>".$res['id']."</td>";
			echo "<td>".$res['Heart']."</td>";
			echo "<td>".$res['Temp']."</td>";	
			
			echo "<td>".$res['Tilt']."</td>";	
			echo "<td>".$res['DateTime']."</td>";	
			
		}
		?>
	</table>	</div>
	

</body>
</html>
