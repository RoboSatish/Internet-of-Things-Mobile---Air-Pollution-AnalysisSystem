<html>
<title> Temp-Live </title>
</html>

<?php
//including the database connection file
include_once("connect.php");
$conn1 = mysqli_query($conn, "SELECT * FROM data ORDER BY id DESC LIMIT 1");

?>

<html>
<head>
	<title>Homepage</title>
	<link href = "css/bootstrap.min.css" rel = "stylesheet">
      <link href = "css/bootstrap.css" rel = "stylesheet">
      <script src="js/jquery-3.4.1.js"></script> 
      <style type="text/css">
      	body{
		
       
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
	 <h2 style="color: #F39C12" align="center"><b>Live Tempearture </b></h2> 
	<div class="nav">
	<a href="index.html">Home</a> </div>
	<br/><br/>
	<div class="container table_content">
	<table class="table table-striped table-light">
  <thead>
    <tr class="bg-warning">
      <th scope="col">ID</th>
      <th scope="col">Temperature of Patient</th>
	 
     
     
	  
    </tr>
  </thead>
		<?php
		while($res = mysqli_fetch_array($conn1)) {		
			echo "<tr>";
			
			echo "<td>".$res['id']."</td>";
			echo "<td><h1>".$res['Temp']."</h1></td>";
			//echo "<td>".$res['DateTime']."</td>";
			
			
		}
		?>
	</table>	</div>
	<div align="center">
<img src="temp1.gif">
</div>

<meta http-equiv="refresh" content="5" />
</body>
</html>
