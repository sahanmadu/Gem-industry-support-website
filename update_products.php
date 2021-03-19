<?php 

include("dbconnections/db.php");

?>

<?php 

    if(isset($_GET['edit_products'])){
        
        $edit_id = $_GET['edit_products'];
        
        $get_p = "select * from product where pID='$edit_id'";
        
        $run_edit = mysqli_query($con,$get_p);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $p_id = $row_edit['pID'];
        
        $p_title = $row_edit['product_Title'];
        
        $p_cat = $row_edit['pCAT_ID'];
        
        $cat = $row_edit['cAT_ID'];

       
        
        $p_image1 = $row_edit['product_img1'];
        
        $p_image2 = $row_edit['product_img2'];
        
        $p_image3 = $row_edit['product_img3'];
        
        $p_price = $row_edit['product_price'];
        
        $p_keywords = $row_edit['product_keyword'];
        
        $p_desc = $row_edit['product_description'];
        
    }

    $get_p_cat = "select * from pcategories where pCAT_ID='$p_cat'";
        
    $run_p_cat = mysqli_query($con,$get_p_cat);
    
    $row_p_cat = mysqli_fetch_array($run_p_cat);
    
    $p_cat_title = $row_p_cat['pCAT_Title'];
    
    $get_cat = "select * from categories where CAT_ID='$cat'";
    
    $run_cat = mysqli_query($con,$get_cat);
    
    $row_cat = mysqli_fetch_array($run_cat);
    
    $cat_title = $row_cat['cTitle'];


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
                
                <i class="fa fa-dashboard"></i> Update Products
                
            </li>
            
        </ol>
        
    </div>
    
</div>
       
<div class="row">
    
    <div class="col-lg-12">
        
        <div class="panel panel-default">
            
           <div class="panel-heading">
               
               <h3 class="panel-title">
                   
                   <i class="fa fa-money fa-fw"></i> Edit Product 
                   
               </h3>
               
           </div> 
           
           <div class="panel-body">
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data">
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Product Title </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="product_title" type="text" class="form-control" required value="<?php echo $p_title; ?>">
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Product Category </label> 
                      
                      <div class="col-md-6">
                          
                          <select name="product_cat" class="form-control">
                              
                          <option disabled value="Select Product Category">Select Product Category</option>       
                              
                              <option value="<?php echo $p_cat; ?>"> <?php echo $p_cat_title; ?> </option>
                              
                              <?php 
                              
                              $get_p_cats = "select * from pcategories";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                  
                                  $p_cat_id = $row_p_cats['pCAT_ID'];
                                  $p_cat_title = $row_p_cats['pCAT_Title'];
                                  
                                  echo "
                                  
                                  <option value='$p_cat_id'> $p_cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Category </label> 
                      
                      <div class="col-md-6">
                          
                          <select name="cat" class="form-control">
                              
                          <option disabled value="Select Category">Select Category</option>
                              
                              <option value="<?php echo $cat; ?>"> <?php echo $cat_title; ?> </option>
                              
                              <?php 
                              
                              $get_cat = "select * from categories";
                              $run_cat = mysqli_query($con,$get_cat);
                              
                              while ($row_cat=mysqli_fetch_array($run_cat)){
                                  
                                  $cat_id = $row_cat['cAT_ID'];
                                  $cat_title = $row_cat['cTitle'];
                                  
                                  echo "
                                  
                                  <option value='$cat_id'> $cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Product Image 1 </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="product_img1" type="file" class="form-control" required> <br>
                          
                          <img width="70" height="70" src="Product_Images/<?php echo $p_image1; ?>" alt="<?php echo $p_image1; ?>">
                          
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Product Image 2 </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="product_img2" type="file" class="form-control"> <br>
                          <img width="70" height="70" src="Product_Images/<?php echo $p_image2; ?>" alt="<?php echo $p_image2; ?>">
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Product Image 3 </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="product_img3" type="file" class="form-control form-height-custom"><br>
                          <img width="70" height="70" src="Product_Images/<?php echo $p_image3; ?>" alt="<?php echo $p_image3; ?>">
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Product Price </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="product_price" type="text" class="form-control" required value="<?php echo $p_price; ?>">
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Product Keywords </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="product_keywords" type="text" class="form-control" required value="<?php echo $p_keywords; ?>">
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Product Desc </label> 
                      
                      <div class="col-md-6">
                          
                          <textarea name="product_desc" cols="19" rows="6" class="form-control"> <?php echo $p_desc; ?></textarea>
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6">
                          
                          <input name="update" value="Update Product" type="submit" class="btn btn-primary form-control">
                          
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
    <script>tinymce.init({ selector:'textarea'});</script> <!-- use tinymce to get better look text area -->
</body>
</html>


<?php 

if(isset($_POST['update'])){
    
    $product_title = $_POST['product_title'];
    $product_cat = $_POST['product_cat'];
    $cat = $_POST['cat'];
    $product_price = $_POST['product_price'];
    $product_keywords = $_POST['product_keywords'];
    $product_desc = $_POST['product_desc'];
    
    $product_img1 = $_FILES['product_img1']['name'];
    $product_img2 = $_FILES['product_img2']['name'];
    $product_img3 = $_FILES['product_img3']['name'];
    
    $temp_name1 = $_FILES['product_img1']['tmp_name'];
    $temp_name2 = $_FILES['product_img2']['tmp_name'];
    $temp_name3 = $_FILES['product_img3']['tmp_name'];
    
    move_uploaded_file($temp_name1,"Product_Images/$product_img1");
    move_uploaded_file($temp_name2,"Product_Images/$product_img2");
    move_uploaded_file($temp_name3,"Product_Images/$product_img3");
    
    $update_product = "update product set pCAT_ID='$product_cat',cAT_ID='$cat',date=NOW(),product_Title='$product_title',product_img1='$product_img1',product_img2='$product_img2',product_img3='$product_img3',product_keyword='$product_keywords',product_description='$product_desc',product_price='$product_price' where pID='$p_id'";
    
    $run_product2 = mysqli_query($con,$update_product);
    
    if($run_product2){
        
        echo "<script>alert('Product updated successfully')</script>";
        echo "<script>window.open('show_products.php','_self')</script>";
        
    }
    
}

?>


