
<?php require_once 'config/Controller/authcontroller.php';


    
    
    if(isset($_GET['token'])){
        $token=$_GET['token'];
        verifyUser($token);
    }
    
    
    if(!isset($_SESSION['id'])){
        header('location: login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
   
    <link href="https://fonts.googleapis.com/css2?family=Coiny&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style1.css">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> 
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
          <div class="container-fluid">
            
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">TECHYSL</a>
            </div>
      
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="home2.php?logout=1">Logout</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="blog/index.php">BLOG PAGE</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      
      
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>
      
       
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="images/i2.jpg" alt="...">
              <div class="carousel-caption">
                <h2 class="animated bounceInRight" style="animation-delay: 1s">We Are TECHYSL</h2>
                <h3 class="animated bounceInLeft" style="animation-delay: 2s">Gems and Jewellery</h3>
              
              </div>
            </div>
            <div class="item">
              <img src="images/i3.jpg" alt="...">
              <div class="carousel-caption">
                <h2 class="animated slideInDown" style="animation-delay: 1s">We Deliver On Time</h2>
                <h3 class="animated slideInRight" style="animation-delay: 2s">best products</h3>
              </div>
            </div>
            <div class="item">
              <img src="images/i1.jpg" alt="...">
              <div class="carousel-caption">
                <h2 class="animated zoomIn" style="animation-delay: 1s">Best Customer Support</h2>
                <h3 class="animated zoomIn" style="animation-delay: 2s">GEM ITEMS</h3>
              </div>
            </div>
      
          </div>
      
         
          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </header> 
    
      <main>
       
          <div class="row text-center">
              <div class="col-md-12">
                  <h1>Our Products</h1>
              </div>
          
      </div>
          <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;" id="id1">
                        <div class="inner">
                            <img class="card-img-top animated bounceInLeft" src="images/f1.png" alt="Card image cap" width="200px" height="200px">
                        </div>
                       
                        <div class="card-body text-center">
                          <h5 class="card-title">ruby</h5>
                          <p class="card-text">$500</p>
                          <a href="#" class="btn btn-success">More</a>
                          <a href="login.php" class="btn btn-success">Add to cart</a>
                        </div>
                      </div>
                </div>
          
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;" id="id2">
                        <div class="inner">
                            <img class="card-img-top animated bounceInLeft" src="images/f2.jpg" alt="Card image cap" width="200px" height="200px">
                        </div>
                      
                        <div class="card-body text-center">
                          <h5 class="card-title">blue</h5>
                          <p class="card-text">$600</p>
                          <a href="#" class="btn btn-success">More</a>
                          <a href="#" class="btn btn-success">Add to cart</a>
                        </div>
                      </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card shadow" style="width: 20rem;" id="id3">
                        <div class="inner">
                            <img class="card-img-top animated bounceInLeft" src="images/f3.jpg" alt="Card image cap" width="200px" height="200px">
                        </div>
                       
                        <div class="card-body text-center">
                          <h5 class="card-title">green</h5>
                          <p class="card-text">$1000</p>
                          <a href="#" class="btn btn-success">More</a>
                          <a href="#" class="btn btn-success">Add to cart</a>
                        </div>
                      </div>
                </div>
                <div class="col-md-4">
                  <div class="card shadow" style="width: 20rem;" id="id4">
                      <div class="inner">
                          <img class="card-img-top animated bounceInLeft" src="images/f4.jpg" alt="Card image cap" width="200px" height="200px">
                      </div>
                    
                      <div class="card-body text-center">
                        <h5 class="card-title">blue gem</h5>
                        <p class="card-text">$300</p>
                        <a href="#" class="btn btn-success">More</a>
                        <a href="#" class="btn btn-success">Add to cart</a>
                      </div>
                    </div>
              </div>
              <div class="col-md-4">
                <div class="card shadow" style="width: 20rem;" id="id5">
                    <div class="inner">
                        <img class="card-img-top animated bounceInLeft" src="images/f5.jpg" alt="Card image cap" width="200px" height="200px">
                    </div>
                  
                    <div class="card-body text-center">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">$200</p>
                      <a href="#" class="btn btn-success">More</a>
                      <a href="#" class="btn btn-success">Add to cart</a>
                    </div>
                  </div>
            </div>
            <div class="col-md-4">
              <div class="card shadow" style="width: 20rem;" id="id6">
                  <div class="inner">
                      <img class="card-img-top animated bounceInLeft" src="images/f6.jpg" alt="Card image cap" width="200px" height="200px">
                  </div>
                
                  <div class="card-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">$350</p>
                    <a href="#" class="btn btn-success">More</a>
                    <a href="#" class="btn btn-success">Add to cart</a>
                  </div>
                </div>
          </div>
          
            </div>
         </div>
      </main>
      <footer id="item1">
        <div class="footer-top">
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12 segment-one">
                  <h3>TECHYSL</h3>
                  <p>your needs, we provide</p>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12 segment-two">
                <h2>SLGEMBUY.lk</h2>
                <ul>
                  <li><a href="#">Best Prices</a></li>
                  <li><a href="#">Customer support</a></li>
                  <li><a href="#">Career</a></li>
                  <li><a href="#">My Products</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 segment-three">
                <h2>Follow Us</h2>
                <p>Please follow us on our social media in order to keep touch in products</p>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-youtube"></i></a>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 segment-three"> 
              <h4>Our Prices</h4>
              <p>best customer support</p>
              <form>
                <input type="email">
                <input type="submit" value="Subscribe">
              </form>
            </div>
            </div>
          </div>
        </div>
      </footer>
      

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 
</body>
</html>