<html>
<title> Select Data Node-1 </title>
</html>

<?php
//including the database connection file
include_once("connect.php");
$conn1 = mysqli_query($conn, "SELECT * FROM data1");
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
		$count=0;
		while($res2 = mysqli_fetch_array($conn1)) {		
			echo "<tr>";
			
			$id=$res2[0];
			$heart=$res2[3];
			$temp=$res2[2];
			$tilt=$res2[1];
			$dt=$res2[4];
			
			$dt1=$dt;
			
			/*date_default_timezone_set("Asia/Kolkata");
			$dt1= date("Y/m/d h:i:sa");
			
			
			$dt11= date("sa");
			$dt=date("sa");
		
			
			if ($dt11 == $dt)
			{
			$count ++;
			
			}
			
			
			
			*/
												
			
			echo "<td>";
			echo $id;
			echo "</td>";
			
			echo "<td>";
			echo $heart;
			echo "</td>";
			
			echo "<td>";
			echo $temp;
			echo "</td>";
			
			echo "<td>";
			echo $tilt;
			echo "</td>";
			
			echo "<td>";
			echo $dt;
			echo "</td>";
			
			
			
			
			
			
			/*
			echo "<td>";
			date_default_timezone_set("Asia/Kolkata");
			$dt1=date("Y/m/d h:i:sa");
			echo "$dt1";
			
			echo "</td>";
			
			
			echo "<td>".$res['id']."</td>";
			echo "<td>".$res['Heart']."</td>";
			echo "<td>".$res['Temp']."</td>";	
			
			echo "<td>".$res['Tilt']."</td>";	
			echo "<td>".$res['DateTime']."</td>";
			*/
			
			
				
			
		}
		echo "$count";
		
		?>
	</table>	</div>
	

</body>
</html>
