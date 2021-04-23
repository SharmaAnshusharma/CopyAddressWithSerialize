<?php
include('dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Serialize Form Data</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<h1>List of Data</h1>
	<table class="table table-dark">
		<thead>
			<th>SR No.</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Address</th>
			<th>City</th>
			<th>State</th>
			<th>Zip</th>
			
		</thead>
		<?php
			$result = mysqli_query($con,"SELECT * FROM `serialize_table`");
			$srno =1;
			while($row = mysqli_fetch_array($result))
			{
				$address = $row['Address'];
				$data1 = unserialize($address);
				
				?>
				<tbody>
					<td><?php echo $srno;?></td>
					<td><?php echo $row['First Name'];?></td>
					<td><?php echo $row['Last Name'];?></td>
					<td><?php echo $data1[0];?></td>
					<td><?php echo $data1[1];?></td>
					<td><?php echo $data1[2];?></td>
					<td><?php echo $data1[3];?></td>

				</tbody>
				<?php
				$srno++;
			}


		?>
</div>
</body>
</html>