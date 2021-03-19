

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
		<h2 class="text-warning text-center">ALL PRODUCTS CATEGORIES</h2>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<tr class="bg-dark text-white text-center">
                             <th> Product Category ID </th>
                             <th> Product Category Title </th>
                              <th> Product Category Description </th>
                              
                                <th>  Delete </th>
                                <th>  Edit </th>
			</tr>
			<?php
					include 'dbconnections/db.php';

						$qry="SELECT * FROM pcategories";
					    $query=mysqli_query($con,$qry);

						while($res=mysqli_fetch_array($query)){

			?>

			<tr class="text-center">
				<td><?php echo $res['pCAT_ID']; ?></td>
				<td><?php echo $res['pCAT_Title']; ?></td>
				
				<td><?php echo $res['pCATDESC']; ?></td>
               
				 <td> <button class="btn-danger btn"> <a href="delete_product_categories.php?delete_products_categories=<?php echo $res['pCAT_ID']; ?>" class="text-white"> Delete </a>  </button> </td>
				<td><button class="btn-success btn"><a href="update_product_categories.php?edit_products_categories=<?php echo $res['pCAT_ID']; ?>" class="text-white"> UPDATE</a> </button></td>
			</tr>

			<?php
				}
			?>
		</table>
</div>
</div>

</body>
</html>