<?php 
include("dbconnections/db.php");

    if(isset($_GET['delete_orders'])){
        
        $delete_id = $_GET['delete_orders'];
        
        $delete_pro = "delete from customer_orders where pID='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('Customer order has been deleted successfully')</script>";
            
            echo "<script>window.open('show_orders.php','_self')</script>";
            
        }
        
    }

?>