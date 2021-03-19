<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
   
    <link href="https://fonts.googleapis.com/css2?family=Coiny&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style1.css">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> 
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <style>
      body{
        background-color: #c65039;
 
        color: #fff;
      }
      
    </style>
</head>
<body>
 
      <main>
       
          <div class="row text-center">
              <div class="col-md-12">
                  <h1>ADMIN PANEL</h1>
              </div>
          
      </div>
          <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;" id="id1">
                        <div class="inner">
                            <img class="card-img-top animated bounceInLeft" src="images/products.png" alt="Card image cap" width="200px" height="200px">
                        </div>
                       
                        <div class="card-body text-center">
                          <h5 class="card-title">Insert Products</h5>
                         
                          <a href="insert_product.php" class="btn btn-success">Click here</a>
                        </div>
                      </div>
                </div>
          
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;" id="id2">
                        <div class="inner">
                            <img class="card-img-top animated bounceInLeft" src="images/updateproduct.jfif" alt="Card image cap" width="200px" height="200px">
                        </div>
                      
                        <div class="card-body text-center">
                          <h5 class="card-title">Edit Products</h5>
                        
                          <a href="show_products.php" class="btn btn-success">EDIT</a>
                        </div>
                      </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;" id="id3">
                        <div class="inner">
                            <img class="card-img-top animated bounceInLeft" src="images/customers.png" alt="Card image cap" width="200px" height="200px">
                        </div>
                       
                        <div class="card-body text-center">
                          <h5 class="card-title">View Cstomers</h5> 
                        
                          <a href="show_customers.php" class="btn btn-success">EDIT</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                  <div class="card shadow" style="width: 20rem;" id="id4">
                      <div class="inner">
                          <img class="card-img-top animated bounceInLeft" src="images/insertpcat.jfif" alt="Card image cap" width="200px" height="200px">
                      </div>
                    
                      <div class="card-body text-center">
                        <h5 class="card-title">Insert Product Categories</h5>
                      
                        <a href="insert_product_categories.php" class="btn btn-success">Add Categories</a>
                      </div>
                    </div>
              </div>
              <div class="col-md-4">
                <div class="card shadow" style="width: 20rem;" id="id5">
                    <div class="inner">
                        <img class="card-img-top animated bounceInLeft" src="images/editcat.jpg" alt="Card image cap" width="200px" height="200px">
                    </div>
                  
                    <div class="card-body text-center">
                      <h5 class="card-title">Edit product categories</h5>
                      
                      <a href="show_product_categories.php" class="btn btn-success">More Info</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
              <div class="card shadow" style="width: 20rem;" id="id6">
                  <div class="inner">
                      <img class="card-img-top animated bounceInLeft" src="images/insertcate.jpg" alt="Card image cap" width="200px" height="200px">
                  </div>
                
                  <div class="card-body text-center">
                    <h5 class="card-title">Insert Categories</h5>
                   
                    <a href="#" class="btn btn-success">More Info</a>
                  </div>
                </div>
          </div>
          <div class="col-md-4">
              <div class="card shadow" style="width: 20rem;" id="id6">
                  <div class="inner">
                      <img class="card-img-top animated bounceInLeft" src="images/editcate.png" alt="Card image cap" width="200px" height="200px">
                  </div>
                
                  <div class="card-body text-center">
                    <h5 class="card-title">Edit Categories</h5>
                   
                    <a href="#" class="btn btn-success">More Info</a>
                  </div>
                </div>
          </div>
          <div class="col-md-4">
              <div class="card shadow" style="width: 20rem;" id="id6">
                  <div class="inner">
                      <img class="card-img-top animated bounceInLeft" src="images/orders.png" alt="Card image cap" width="200px" height="200px">
                  </div>
                
                  <div class="card-body text-center">
                    <h5 class="card-title">View Customer Orders</h5>
                   
                    <a href="show_orders.php" class="btn btn-success">More Info</a>
                  </div>
                </div>
          </div>
          
          <div class="col-md-4">
              <div class="card shadow" style="width: 20rem;" id="id6">
                  <div class="inner">
                      <img class="card-img-top animated bounceInLeft" src="images/payments.jpg" alt="Card image cap" width="200px" height="200px">
                  </div>
                
                  <div class="card-body text-center">
                    <h5 class="card-title">View Customer payments</h5>
                   
                    <a href="#" class="btn btn-success">More Info</a>
                  </div>
                </div>
          </div>
          <div class="col-md-4">
              <div class="card shadow" style="width: 20rem;" id="id6">
                  <div class="inner">
                      <img class="card-img-top animated bounceInLeft" src="images/bloginsert.jpg" alt="Card image cap" width="200px" height="200px">
                  </div>
                
                  <div class="card-body text-center">
                    <h5 class="card-title">Add New Posts-Blog</h5>
                   
                    <a href="insert_blog_post.php" class="btn btn-success">More Info</a>
                  </div>
                </div>
          </div>
          <div class="col-md-4">
              <div class="card shadow" style="width: 20rem;" id="id6">
                  <div class="inner">
                      <img class="card-img-top animated bounceInLeft" src="images/editblog.jpg" alt="Card image cap" width="200px" height="200px">
                  </div>
                
                  <div class="card-body text-center">
                    <h5 class="card-title">View blog posts</h5>
                   
                    <a href="show_blog_posts.php" class="btn btn-success">More Info</a>
                  </div>
                </div>
          </div>
            </div>
         </div>
      </main>
    
      

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 
</body>
</html>