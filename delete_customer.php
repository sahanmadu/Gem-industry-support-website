<?php 
include("dbconnections/db.php");

    if(isset($_GET['delete_customers'])){
        
        $delete_id = $_GET['delete_customers'];
        
        $delete_pro = "delete from customerbuy where CID='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_pro);
        
        if($run_delete){
            
            echo "<script>alert('Customer deleted successfully')</script>";
            
            echo "<script>window.open('show_orders.php','_self')</script>";
            
        }
        
    }

?>