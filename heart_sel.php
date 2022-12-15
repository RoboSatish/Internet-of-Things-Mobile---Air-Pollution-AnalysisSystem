<html>
<title> Heart-Live </title>
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
		float: center;
		margin-right: 10px;
	}
      </style>
	
</head>

<body>
	 <h2 style="color: #F39C12" align="center"><b>Live Pulse </b></h2> 
	<div class="nav">
	<a href="index.html">Home</a> </div>
	<br/><br/>
	<div class="container table_content">
	<table class="table table-striped table-light" align="center">
  <thead>
    <tr class="bg-warning">
      <th scope="col" align="center">ID</th>
     
      <th scope="col" align="center">Pulse of Patient</th>
	 
    
     
	  
    </tr>
  </thead>
		<?php
		
		date_default_timezone_set("Asia/Kolkata");
		date("Y/m/d h:i:sa");
		
		//while ($res = $result->fetch_assoc()) {
		while($res = mysqli_fetch_array($conn1)) {
			/*	
			echo "<tr>";
			echo "<td><h1>".$res['Heart']."</h1></td>";
			echo "<td>".$res['DateTime']."</td>";
			
			date_default_timezone_set("Asia/Kolkata");
			$t1=date("Y/m/d h:i:sa");
			*/
			
			
			$id=$res[0];
			$heart=$res[3];
			
			
			
			
			
			echo "<td>";
			echo $id;
			echo "</td>";
			
			echo "<td>";
			echo $heart;
			echo "</td>";

		}
		
		echo "$h1";
		
		
		?>
	</table>	</div>
	<div align="center">
<img src="hr.gif">
</div>
<?php 
if ($heart>100 && $heart<=150)
		{
		
		echo "<div align='center'><b>1. Exercise more.</b>When you take a brisk walk, swim, or bicycle, your heart beats faster during the activity </br>
and for a short time afterward. But 					  	  exercising every day gradually slows the resting heart rate.</br>
<b>2. Reduce stress.</b>Performing the relaxation response, meditation, tai chi, and other stress-busting techniques lowers the</br>
 resting heart rate over time.
Avoid tobacco products.Smokers have higher resting heart rates. Quitting brings it back down.</br>
<b>3. Lose weight if necessary.</b>The larger the body, the more the heart must work to supply it with blood. </br>
Losing weight can help slow an elevated resting heart rate.</div>";
		}
		else if($heart>150 && $heart <=300)
		{
		echo "<div align='center'><b>Try Again, Put Finger Again</b> </div>";
		}
		else
		{
		echo "<div align='center'><b>Your BPM is Good</b> </div>";
		}
		?>

<meta http-equiv="refresh" content="5" />
</body>
</html>
