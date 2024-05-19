<?php
    
    session_start();

    include("includes/sqlconnection.php");

    if(isset($_POST['add_comment'])){
        $productID = $_POST['productID'];
        $comment = $_POST['comment'];

        $sql = "INSERT INTO comments(productID, comment)
            VALUES('$productID', '$comment')";

        if($conn->query($sql)===TRUE){  
            $_SESSION['add-comment-status'] = "Product Added Succesfully";  
            header("location:productDetails.php?id=$productID");   
        } else {
            $_SESSION['add-comment-status'] = "Error: Message Submit Failed.";
            header('location:productDetails.php?id=$productID');
        }

        $conn->close();

    }

?>