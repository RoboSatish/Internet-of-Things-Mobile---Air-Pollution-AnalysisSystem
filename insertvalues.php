<html>
<title> Insertion </title>
</html>

<?php
//including the database connection file
include_once("connect.php");
$conn1 = mysqli_query($conn, "SELECT * FROM data ORDER BY id DESC LIMIT 2");
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
	 <h2 style="color: #F39C12" align="center"><b>HMS</b></h2> 
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
		date_default_timezone_set("Asia/Kolkata");
		date("Y/m/d h:i:sa");
		while($res = mysqli_fetch_array($conn1)) {		
			echo "<tr>";
			
			$id=$res[0];
			$heart=$res[3];
			$temp=$res[2];
			$tilt=$res[1];
			$dt=$res[4];
			$dt1=$dt;
			date_default_timezone_set("Asia/Kolkata");
		$dt1= date("Y/m/d h:i:sa");
			
			$sql = "INSERT INTO data1(id, Tilt, Temp,Heart,DateTime)
					VALUES ('','$res[1]', '$res[2]', '$res[3]','$dt1')";
					
					if ($conn->query($sql) === TRUE) 
					{
					//echo "New record created successfully";
					} 
					else {
					echo "Error: " . $sql . "<br>" . $conn->error;
					}
		
			
		}
		
		
		?>

		
		
	</table>	</div>
	
	<meta http-equiv="refresh" content="10" />
	
</body>
</html>
