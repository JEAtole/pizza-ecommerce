<?php

    session_start();

    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = array(); // If not, initialize it as an empty array
        }
        
        // Add the item to the cart
        $id = $_POST['id'];
        $_SESSION['cart'][] = $id;

        echo "success";
        // Process the received string (e.g., save it to a file, store in a database, etc.)
    } else {
        echo "error";
    }

?>