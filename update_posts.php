<?php 

include("dbconnections/db.php");

?>

<?php 

    if(isset($_GET['edit_posts'])){
        
        $edit_id = $_GET['edit_posts'];
        
        $qry2 = "select * from posts where id='$edit_id'";
        
        $run_edit2 = mysqli_query($con,$qry2);
        
        $row_edit = mysqli_fetch_array($run_edit2);
        
        $pid = $row_edit['id'];
        
        $ptitle = $row_edit['title'];
        
        $pimage = $row_edit['image'];
      
        $pdesc = $row_edit['descriptions'];
        
      
        
        
    }

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Update Products </title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    
</head>
<body>
    
<div class="row">
    
    <div class="col-lg-12">
        
        <ol class="breadcrumb">
            
            <li class="active">
                
                <i class="fa fa-dashboard"></i> Update Posts
                
            </li>
            
        </ol>
        
    </div>
    
</div>
       
<div class="row">
    
    <div class="col-lg-12">
        
        <div class="panel panel-default">
            
           <div class="panel-heading">
               
               <h3 class="panel-title">
                   
                   <i class="fa fa-money fa-fw"></i> Edit Posts
                   
               </h3>
               
           </div> 
           
           <div class="panel-body">
               
               <form method="post" class="form-horizontal" action="">
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Post title Title </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="title" type="text" class="form-control" required value="<?php echo  $ptitle; ?>">
                          
                      </div>
                       
                   </div>

                   <div class="form-group">
                       
                       <label class="col-md-3 control-label"> Image </label> 
                       
                       <div class="col-md-6">
                           
                           <input name="image" type="file" class="form-control" required value="<?php echo  $pimage; ?>">
                           <img width="60" height="60" src="../blog_images/<?php echo $pimage; ?>" alt="<?php echo $pimage; ?>">
                           
                       </div>
                        
                    </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Description </label> 
                      
                      <div class="col-md-6">
                          
                      <textarea name="description" cols="19" rows="6" class="form-control" > <?php echo $pdesc; ?> </textarea>
                          
                      </div>
                       
                   </div>
                   
                 
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6">
                          
                          <input name="updateposts" value="Update Product" type="submit" class="btn btn-primary form-control">
                          
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

if(isset($_POST['updateposts'])){


    $potitle = $_POST['title'];
   
    $podesc = $_POST['description'];

    $poimage = $_FILES['image']['name'];
   
    $temp_name = $_FILES['image']['tmp_name'];
    
    move_uploaded_file($temp_name,"blog_images/$poimage");

    $update_post = "update posts set title='$potitle',image='$poimage',descriptions='$podesc', createdat=CURRENT_TIMESTAMP() where id='$pid'";
    
    $run_product3 = mysqli_query($con,$update_post);

   
    
    if($run_product3){
        
        echo "<script>alert('This post has been updated successfully')</script>";
        echo "<script>window.open('show_blog_posts.php','_self')</script>";
        
    }

    
    
}

?>


