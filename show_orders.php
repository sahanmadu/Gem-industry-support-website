

<!DOCTYPE html>
<html>
<head>
	<title>show customer orders</title>
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
		<h2 class="text-warning text-center">CUSTOMER ORDERS</h2>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<tr class="bg-dark text-white text-center">
                             <th> Order ID </th>
                             <th> Customer ID</th>
                              <th> Due Amount </th>
                              <th>Invoice Number </th>
                              <th> Quauntiy </th>
                              <th> Product Size </th>
                              <th> Order Date </th>
                              <th> Order Status </th>
                                <th>  Delete </th>
                               
			</tr>
			<?php
					include 'dbconnections/db.php';

						$qry="SELECT * FROM customer_orders";
					    $query=mysqli_query($con,$qry);

						while($res=mysqli_fetch_array($query)){

			?>

			<tr class="text-center">
				<td><?php echo $res['OID']; ?></td>
				<td><?php echo $res['CID']; ?></td>
				
				<td><?php echo $res['due_amount']; ?></td>
                <td><?php echo $res['invoice_no']; ?></td>
                <td><?php echo $res['qty']; ?></td>
                <td><?php echo $res['size']; ?></td>
                <td><?php echo $res['order_date']; ?></td>
                <td><?php echo $res['order_status']; ?></td>
               
				 <td> <button class="btn-danger btn"> <a href="delete_orders.php?delete_products_categories=<?php echo $res['OID']; ?>" class="text-white"> Delete </a>  </button> </td>
				
			</tr>

			<?php
				}
			?>
		</table>
</div>
</div>

</body>
</html>