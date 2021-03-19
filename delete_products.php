<?php 
include("dbconnections/db.php");

    if(isset($_GET['delete_products'])){
        
        $delete_id = $_GET['delete_products'];
        
        $delete_pro = "delete from product where pID='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('Your product has been deleted successfully')</script>";
            
            echo "<script>window.open('show_products.php','_self')</script>";
            
        }
        
    }

?>