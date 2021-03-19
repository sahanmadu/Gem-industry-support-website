

<!DOCTYPE html>
<html>
<head>
	<title>display</title>
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
		<h2 class="text-warning text-center">ALL PRODUCTS</h2>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<tr class="bg-dark text-white text-center">
                             <th> Product ID </th>
                             <th> Product Title </th>
                              <th> Product Image</th>
                                <th> Product Price </th>
                              
                                <th> Product Keywords </th>
                                <th> Product description </th>
                                <th> Product Date </th>
                                <th> Product Delete </th>
                                <th> Product Edit </th>
			</tr>
			<?php
					include 'dbconnections/db.php';

						$qry="SELECT * FROM product";
					    $query=mysqli_query($con,$qry);

						while($res=mysqli_fetch_array($query)){

			?>

			<tr class="text-center">
				<td><?php echo $res['pID']; ?></td>
				<td><?php echo $res['product_Title']; ?></td>
				<td><img src="Product_Images/<?php echo  $res['product_img1']; ?>" width="60" height="60"></td>
				<td><?php echo $res['product_price']; ?></td>
				<td><?php echo $res['product_keyword']; ?></td>
				<td><?php echo $res['product_description']; ?></td>
                <td><?php echo $res['date']; ?></td>
				 <td> <button class="btn-danger btn"> <a href="delete_products.php?delete_products=<?php echo $res['pID']; ?>" class="text-white"> Delete </a>  </button> </td>
				<td><button class="btn-success btn"><a href="update_products.php?edit_products=<?php echo $res['pID']; ?>" class="text-white"> UPDATE</a> </button></td>
			</tr>

			<?php
				}
			?>
		</table>
</div>
</div>

</body>
</html>