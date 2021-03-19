<?php 

include("dbconnections/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Insert blog posts </title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    
</head>
<body>

<div class="row">
    
    <div class="col-lg-12">
        
        <div class="panel panel-default">
            
           <div class="panel-heading">
               
               <h3 class="panel-title">
                   
                   <i class="fa fa-money fa-fw"></i> Insert Blog posts
                   
               </h3>
               
           </div> 
           
           <div class="panel-body">
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data">
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Post Title </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="ptitle" type="text" class="form-control" required>
                          
                      </div>
                       
                   </div>
                   
                  
                   
                   
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Image </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="image" type="file" class="form-control" required>
                          
                      </div>
                       
                   </div>
                   
               
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Post Description </label> 
                      
                      <div class="col-md-6">
                          
                          <textarea name="pdesc" cols="19" rows="6" class="form-control"></textarea>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6">
                          
                          <input name="upload" value="Insert Product" type="submit" class="btn btn-primary form-control">
                          
                      </div>
                       
                   </div>
                   
               </form>
               
           </div>
            
        </div>
        
    </div><
    
</div>
        
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script> 
    <script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script> 
</body>
</html>


<?php 

if(isset($_POST['upload']))
{
/*
    
    $target="../blog_images/".basename($_FILES['image']['name']);

    $title=$_POST['ptitle'];
    $image=$_FILES['image']['name'];
    $des=$_POST['pdesc'];


    $sql ="INSERT INTO posts (title,image,descriptions,createdat) VALUES('$title','$image','$des',CURRENT_TIMESTAMP())";
    mysqli_query($con,$sql);

    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $msg="Image uploaded successfully";
    }

    else{
        $msg="There was an error occured, when uploading your image";


        
    }
*/

$title=$_POST['ptitle'];

$des=$_POST['pdesc'];

    $image = $_FILES['image']['name'];
    
    $temp_name1 = $_FILES['image']['tmp_name'];
 
    
    move_uploaded_file($temp_name1,"blog_images/$image");
   
    $insert_product = "INSERT INTO posts (title,image,descriptions,createdat) VALUES('$title','$image','$des',CURRENT_TIMESTAMP())";
    $run_product = mysqli_query($con,$insert_product);
    
    if($run_product){
        
        echo "<script>alert('New Item inserted successfully')</script>";
        echo "<script>window.open('show_blog_posts.php','_self')</script>";
        
    }

    

}

?>


