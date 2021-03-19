<?php


include 'dbconnections/db.php';

if(isset($_POST['done'])){
	
	$ptitle=$_POST['pcattitle'];
	$pdesc=$_POST['pcatdesc'];
	
	

	$qry="select * from pcategories where pcattitle ='$ptitle'";
	$result=mysqli_query($con,$qry);

	$i=mysqli_num_rows($result);


if($i==1){

	echo "This category already added";
}
else{

	$qry1="INSERT INTO pcategories(pCAT_Title,pCATDESC) VALUES ('$hosaddress','$hosemail')";
		mysqli_query($con,$qry1);

	
      echo '<script>alert("Data inserted successfully!")</script>';


	}

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>product category details</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
	body, html {
  height: 100%;
}
.bg {
 
  background-image: url("ho1.jpg");


  height: 100%;

  
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.container{
	opacity: 0.8;
	width:570px;
}

#btn3 {
	float: right;
}

#a12{
	text-decoration: none;
}

</style>
</head>
<body >

<div class="container">
	<br><br>
	<h1 class="text-center text-primary">Add New Product Category</h1>
	
	<div class="col-lg-8-m-auto d-block">

		<form class="bg-light" action="" method="POST">
			
			
			<div class="form-group">
				<label>Caegory Title</label>
				<input type="text" name="pcattitle" class="form-control" autocomplete="off" required >
				
				
			</div>
				<div class="form-group">
				<label>Category Description</label>
				<input type="text" name="pcatdesc"  class="form-control" autocomplete="off" required >
				
				
			
			</div>
			<button type="submit" class="btn btn-success" name="done">ADD</button>
		</form>
		
	</div>
</div>
</div>


<script src="backjs.js">
	
</script>



</body>
</html>



