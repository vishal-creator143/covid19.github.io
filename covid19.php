<!DOCTYPE html>
<html>
<head>
	<title>Covid-19 LIVE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body onload="fetch()" style="background-color: rgb(235,234,233);">

<div class="container-fluid">
	<div>
		<h1 class="text-center text-uppercase" style="color: red;border-bottom: 2px dashed black;float: left;">COVID-19 <span style="color: green">LIVE UPDATES OF THE WORLD</span></h1>

		<a href="indiacoronalive.php"><button class="btn btn-primary mt-2" style="float: right;">Indiacoronalive</button></a>

	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center" id="tbval">
			<tr>
				<th>Country</th>
				<th>TotalConfirmed</th>
				<th>TotalRecovered</th>
				<th>TotalDeaths</th>
				<th>NewConfirmed</th>
				<th>NewRecovered</th>
				<th>NewDeaths</th>
			</tr>
		</table>
	</div>
</div>


<script type="text/javascript">
	function fetch()
	{
		$.get("https://api.covid19api.com/summary",

				function(data){
					var tbval = document.getElementById('tbval');

					for(var i=1; i<(data['Countries'].length); i++)
					{
						var x = tbval.insertRow();

						x.insertCell(0);

						tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
						tbval.rows[i].cells[0].style.background = '#7a4a91';
						tbval.rows[i].cells[0].style.color = '#fff';

						x.insertCell(1);
						tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
						tbval.rows[i].cells[1].style.background = '#4bb7d8';

						x.insertCell(2);
						tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
						tbval.rows[i].cells[2].style.background = '#9cc850';

						x.insertCell(3);
						tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
						tbval.rows[i].cells[3].style.background = '#f36e23';

						x.insertCell(4);
						tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
						tbval.rows[i].cells[4].style.background = '#4bb7d8';

						x.insertCell(5);
						tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
						tbval.rows[i].cells[5].style.background = '#9cc850';

						x.insertCell(6);
						tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
						tbval.rows[i].cells[6].style.background = '#f36e23';
					}
				}

			)
	}
</script>


	<h1 class="bg-dark text-white text-capitalize text-center">Copiyright By Mr_Vishal</h1>
</body>
</html>