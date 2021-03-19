

<!DOCTYPE html>
<html>
<head>
	<title>show customers</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style type="text/css">
	body{
		background-image: url("images/wood.jpg");
		background-size: cover;
	
	}
</style>
</head>
<body>
<div class="container">
	<div class="col-lg-12">
	<br><br>
		<h2 class="text-warning text-center">CUSTOMERS</h2>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<tr class="bg-dark text-white text-center">
                             <th> Customer ID </th>
                             <th> Customer Name</th>
                              <th> Customer Email </th>
                              <th>Country </th>
                              <th> City </th>
                              <th> Address line 1 </th>
                              <th> Address line 2 </th>
                              <th> Customer IP </th>
                                <th>  Delete </th>
                               
			</tr>
			<?php
					include 'dbconnections/db.php';

						$qry="SELECT * FROM customerbuy";
					    $query=mysqli_query($con,$qry);

						while($res=mysqli_fetch_array($query)){

			?>

			<tr class="text-center">
			
				<td><?php echo $res['CID']; ?></td>
				
				<td><?php echo $res['Cname']; ?></td>
                <td><?php echo $res['Cemail']; ?></td>
                <td><?php echo $res['country']; ?></td>
                <td><?php echo $res['city']; ?></td>
                <td><?php echo $res['address1']; ?></td>
                <td><?php echo $res['address2']; ?></td>
                <td><?php echo $res['customer_ip']; ?></td>
				 <td> <button class="btn-danger btn"> <a href="delete_customer.php?delete_customers=<?php echo $res['CID']; ?>" class="text-white"> Delete </a>  </button> </td>
				
			</tr>

			<?php
				}
			?>
		</table>
</div>
</div>

</body>
</html>