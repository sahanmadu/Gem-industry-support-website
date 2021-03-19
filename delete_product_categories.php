<?php 
include("dbconnections/db.php");

    if(isset($_GET['delete_product_categories'])){
        
        $delete_id = $_GET['delete_product_categories'];
        
        $delete_pro = "delete from pcategories where pCAT_ID='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('Product category deleted sucessfully')</script>";
            
            echo "<script>window.open('show_product_categories.php','_self')</script>";
            
        }
        
    }

?>