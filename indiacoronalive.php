<!DOCTYPE html>
<html>
<head>
	<title>Covid-19 INDIA LIVE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body onload="fetch()" style="background-color: rgb(235,234,233);">

<div class="container-fluid">
	<div>
		<h1 class="text-center text-uppercase" style="color: red;border-bottom: 2px dashed black;float: right;">COVID-19 <span style="color: green">LIVE UPDATES OF THE INDIA</span></h1>

		<a href="index.php"><button class="btn btn-primary mt-2" style="float: left;"> Back</button></a>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center">
			<tr>
				<th class="text-capitalize">Lastupdatedtime</th>
				<th class="text-capitalize">State</th>
				<th class="text-capitalize">Confirmed</th>
				<th class="text-capitalize">Active</th>
				<th class="text-capitalize">Recovered</th>
				<th class="text-capitalize">Deaths</th>
				<th class="text-capitalize">StateCode</th>
			</tr>

			<?php

			$data = file_get_contents('https://api.covid19india.org/data.json');
			$coronalive = json_decode($data, true);

			$statescount = count($coronalive['statewise']) ;

			$i=1;
			while($i < $statescount) {

				?>

				<tr>
					<td> <?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?> </td>
					<td> <?php echo $coronalive['statewise'][$i]['state'] ?> </td>
					<td> <?php echo $coronalive['statewise'][$i]['confirmed'] ?> </td>
					<td> <?php echo $coronalive['statewise'][$i]['active'] ?> </td>
					<td> <?php echo $coronalive['statewise'][$i]['recovered'] ?> </td>
					<td> <?php echo $coronalive['statewise'][$i]['deaths'] ?> </td>
					<td> <?php echo $coronalive['statewise'][$i]['statecode'] ?> </td>
				</tr>

			<?php	
				$i++;
			}
			?>

		</table>
	</div>
</div>


<h1 class="bg-dark text-white text-capitalize text-center">Copiyright By Mr_Vishal</h1>
</body>
</html>
