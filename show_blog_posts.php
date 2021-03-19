

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
		<h2 class="text-warning text-center">ALL POSTS</h2>
		<br>
		<table class="table table-striped table-hover table-bordered">
			<tr class="bg-dark text-white text-center">
                             <th> Post ID </th>
                             <th> Post Title </th>
                              <th> Post Image </th>
                              <th> Post Description </th>
                              <th> Date </th>
                                <th>  Delete </th>
                                <th>  Edit </th>
			</tr>
			<?php
					include 'dbconnections/db.php';

						$qry="SELECT * FROM posts";
					    $query=mysqli_query($con,$qry);

						while($res=mysqli_fetch_array($query)){

			?>

			<tr class="text-center">
				<td><?php echo $res['id']; ?></td>
				<td><?php echo $res['title']; ?></td>
                <td><img src="blog_images/<?php echo  $res['image']; ?> " width="60" height="60"></td>
                <td><?php echo $res['descriptions']; ?></td>
                <td><?php echo $res['createdat']; ?></td>
				
				
               
				 <td> <button class="btn-danger btn"> <a href="delete_posts.php?delete_posts=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
				<td><button class="btn-success btn"><a href="update_posts.php?edit_posts=<?php echo $res['id']; ?>" class="text-white"> UPDATE</a> </button></td>
			</tr>

			<?php
				}
			?>
		</table>
</div>
</div>

</body>
</html>