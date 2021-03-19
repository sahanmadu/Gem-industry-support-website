<?php 

include("dbconnections/db.php");

?>

<?php 

    if(isset($_GET['edit_products_categories'])){
        
        $edit_id = $_GET['edit_products_categories'];
        
        $get_p = "select * from pcategories where pCAT_ID='$edit_id'";
        
        $run_edit = mysqli_query($con,$get_p);
        
        $row_edit = mysqli_fetch_array($run_edit);
        
        $pc_id = $row_edit['pCAT_ID'];
        
        $pc_title = $row_edit['pCAT_Title'];
        
        $pc_desc = $row_edit['pCATDESC'];
      
        
        
        
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
                
                <i class="fa fa-dashboard"></i> Update Products Categories
                
            </li>
            
        </ol>
        
    </div>
    
</div>
       
<div class="row">
    
    <div class="col-lg-12">
        
        <div class="panel panel-default">
            
           <div class="panel-heading">
               
               <h3 class="panel-title">
                   
                   <i class="fa fa-money fa-fw"></i> Edit Product Categories
                   
               </h3>
               
           </div> 
           
           <div class="panel-body">
               
               <form method="post" class="form-horizontal" >
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Product Category Title </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="productcatt" type="text" class="form-control" required value="<?php echo  $pc_title; ?>">
                          
                      </div>
                       
                   </div>
                   
                   <div class="form-group">
                       
                      <label class="col-md-3 control-label"> Product Category Description </label> 
                      
                      <div class="col-md-6">
                          
                          <input name="pdesc" type="text" class="form-control" required value="<?php echo $pc_desc; ?>">
                          
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
    
    $productcat_title = $_POST['productcatt'];
    $productcat_desc = $_POST['pdesc'];
    
    
    
    $update_product = "update pcategories set pCAT_Title='$productcat_title',pCATDESC='$productcat_desc' where pCAT_ID='$pc_id'";
    
    $run_product2 = mysqli_query($con,$update_product);
    
    if($run_product2){
        
        echo "<script>alert('Product category updated successfully')</script>";
        echo "<script>window.open('show_product_categories.php','_self')</script>";
        
    }
    
}

?>


