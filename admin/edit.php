<?php

    session_start();

    include("../includes/sqlconnection.php"); 

    if(isset($_POST['edit_product'])){

        $id = $_POST['id'];
        $prodName = $_POST['prodName'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $pic_new = $_FILES['pic']['name'];
        $pic_old = $_POST['pic_old'];

        if($pic_new != ''){
            unlink("../images/".$pic_old);
            $update_pic = $pic_new;
        } else {
            $update_pic = $pic_old;
        }

        $sql = "UPDATE products SET prodName='$prodName',description='$description',price='$price', pic='$update_pic' WHERE id='$id'";

        if($conn->query($sql)===TRUE){
            move_uploaded_file($_FILES['pic']["tmp_name"],"../images/".$_FILES['pic']['name']);
            $_SESSION['edit-product-status'] = "Product Updated Succesfully";
            header('location:../admin/');
        } else {
            $_SESSION['edit-product-status'] = "Error: Update Failed.";
            header('location:../admin/');
        }

        $conn->close();

    }

?>