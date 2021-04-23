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
		<form method="post">
			<label>First Name</label>
			<input type="text" name="fname" class="form-control"  placeholder="First Name" required><br>
			<label>Last Name</label>
			<input type="text" name="lname" class="form-control"  placeholder="Last Name" required><br>
			<label>Addres</label>
			<input type="text" name="address" class="form-control"  placeholder="Address" required><br>
			<label>City</label>
			<input type="text" name="city" class="form-control"  placeholder="City" required><br>
			<label>State</label>
			<input type="text" name="state" class="form-control" placeholder="State"required><br>
			<label>Zip</label>
			<input type="text" name="zip" class="form-control" placeholder="Zip" required><br>
			<input type="checkbox" name="checkbox" onclick="FillAddress(this.form)">
			<em>Check this box if Current Address and Permanent Address are the same.</em>
			<label>Addres</label>
			<input type="text" name="Sameaddress" class="form-control" placeholder="Address" required><br>
			<label>City</label>
			<input type="text" name="Samecity" class="form-control" placeholder="City" required><br>
			<label>State</label>
			<input type="text" name="Samestate" class="form-control" placeholder="State"required><br>
			<label>Zip</label>
			<input type="text" name="Samezip" class="form-control" placeholder="Zip" required><br>
			<input type="submit" name="submit" value="Submit" class="btn btn-outline-primary col-sm-12"> 
</form>
	</div>
		

	</form>
<script>
function FillAddress(f) {
  if(f.checkbox.checked == true) {
    f.Sameaddress.value = f.address.value;
    f.Samecity.value = f.city.value;
    f.Samestate.value = f.state.value;
    f.Samezip.value = f.zip.value;
  }
}
</script>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	extract($_POST);
	$data = serialize(array($address,$city,$state,$zip));

	$query = mysqli_query($con,"INSERT INTO `serialize_table`(`First Name`, `Last Name`, `Address`) VALUES ('$fname','$lname','$data')");
	if($query == true)
	{
		echo "<script>alert('Data Insert Successfully');window.location='show_data.php'</script>";
	}
	else
	{
		echo "<script>alert('Something Went Wrong');</script>";
	}



}

?>