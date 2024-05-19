<?php

    session_start();

    include("../includes/sqlconnection.php");

    if(isset($_POST['add_product'])){
        $prodName = $_POST['prodName'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $pic = $_FILES['pic']['name'];

        $sql = "INSERT INTO products(prodName, description, price, pic)
            VALUES('$prodName', '$description', '$price', '$pic')";

        if($conn->query($sql)===TRUE){
            move_uploaded_file($_FILES['pic']["tmp_name"],"../images/".$_FILES['pic']['name']);  
            $_SESSION['add-product-status'] = "Product Added Succesfully";  
            header('location:../admin/');   
        } else {
            $_SESSION['add-product-status'] = "Error: Message Submit Failed.";
            header('location:../admin/');
        }

        $conn->close();

    }

?>