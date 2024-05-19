<?php

    session_start();

    include("../includes/sqlconnection.php");

    if(isset($_GET['id'])){

        $id = $_GET['id'];
        $pic = $_GET['pic'];
        $sql = "DELETE FROM products WHERE id = '$id'";
        if($conn->query($sql)===TRUE){
            unlink("../images/".$pic);
            $_SESSION['delete-product-status'] = "Product Deleted Succesfully";
            header('location:../admin/');
        } else {
            $_SESSION['delete-product-status'] = "Error: Deletion Failed.";
            header('location:../admin/');
        }
    
         $conn->close();

    }

?>