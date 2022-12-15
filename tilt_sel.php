<html>
<title> Movement-Live </title>
</html>

<?php
//including the database connection file
include_once("connect.php");
$conn1 = mysqli_query($conn, "SELECT * FROM data ORDER BY id DESC LIMIT 1");

//$conn1 = mysqli_query($conn, "SELECT data.Tilt, data1.DateTime FROM data, data1");
//SELECT data.id,data.tilt, data1.DateTime FROM `data`, data1

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
		padding-top: 1px;
	}
	.nav{
		float: right;
		margin-right: 10px;
	}
	
      </style>
	
</head>

<body>
	 <h2 style="color: #F39C12" align="center"><b>Live Movement </b></h2> 
	<div class="nav">
	<a href="index.html">Home</a> </div>
	<br/><br/>
	<div class="container table_content">
	<table class="table table-striped table-light">
  <thead>
    <tr class="bg-warning">
     
      <th scope="col">ID</th>
	 
      <th scope="col">Movement of Patient</th>
     
	  
    </tr>
  </thead>
		<?php
		while($res = mysqli_fetch_array($conn1)) {		
			echo "<tr>";
			
			echo "<td>".$res['id']."</td>";
			echo "<h1>";
			echo "<td><h1>".$res['Tilt']."</h1></td>";
			echo "</h1>";
			//echo "<td>".$res['DateTime']."</td>";
			
			//echo "$res[1]";
			
			
		}
		    if($res[1]<1000)
		    {
		
                $to_email = 'girish.mulke@gmail.com';
               // $to_email = 'satish.pawale687@gmail.com';
                $subject = 'Patient is Moving, Please Take Care';
                $message = 'Patient is Moving, Please Take Care';
                //$headers = 'From: sai.swayamtechnology@gmail.com';
                $headers = 'From: pms_girish@iautolab.tech';
                mail($to_email,$subject,$message,$headers);
		//sleep(10);
		    }
		
		?>
	</table>	</div>
	<div align="center">
<img src="tilt1.gif">
</div>

<meta http-equiv="refresh" content="11" />
</body>
</html>
