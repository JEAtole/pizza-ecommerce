<!DOCTYPE html>

<?php session_start(); ?>
<html lang="en">
<head>
    <title>Cart</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="global.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <style>
        body {
            position: relative;
            height: 100vh;
            display: flex;
            flex-direction: column; 
        }

        .your-cart {
            width: fit-content;
            display: flex;
            margin: 10px auto;
            font-size: 2.8em;
            font-style: italic;
        }

        .cart-list {
            margin: auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
            overflow: auto;
            flex-grow: 1;
            padding: 10px;
            padding-bottom: 20px;
        }

        .cart-card {
            display: flex;
            flex-direction: row;
            gap: 15px;
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
            padding: 20px;
            border-radius: 15px;

        }

        .card-img {
            width: 100px;
            height: 100px;
        }

        .card-content {
            flex-grow: 1;
        }

        .content-wrapper {
            display: flex;
            flex-direction: column;
        }

        .price {
            color: #404040;
            font-weight: bold;
            font-size: 2em;
        }

        footer {
            width: 100vw;
            height: 150px;
            background: lightblue;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
        }

    </style>
    
</head>
<body>

    <nav class="navbar nav-style navbar-fixed-top" >
        <div class="container-fluid width-format" >
            <div class="navbar-header">
                <a href="#" class="navbar-brand roboto-bold store-name">SampleName</a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a class="light-black" href="index.php">Home</a></li>
                <li><a class="light-black" href="products.php">Products</a></li>
                <li><a class="light-black" href="cart.php">Cart</a></li>
                <li><a class="light-black" href="aboutUs.php">About Us</a></li>
            </ul>
        </div>
    </nav>

    <p class="your-cart merriweather-bold" style="margin-top: 70px;" >Your Cart</p>

    <div class="cart-list width-format">

        <?php showCartItems(); ?>

        <!-- <div class="cart-card">

            <img class="card-img" src="https://png.pngtree.com/png-clipart/20220615/original/pngtree-kid-student-back-to-school-in-uniform-wear-backpack-png-image_8043401.png" alt="" >

            <div class="content-wrapper">
                <p class="card-content" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia incidunt, corporis dolores cum quisquam earum. Totam repudiandae omnis ad dignissimos, corporis obcaecati quibusdam maxime quos perspiciatis deserunt, magni rerum quidem.</p>
                
                <p class="price" >PHP 21.50</p>
            </div>


        </div>

        <div class="cart-card">

            <img class="card-img" src="https://png.pngtree.com/png-clipart/20220615/original/pngtree-kid-student-back-to-school-in-uniform-wear-backpack-png-image_8043401.png" alt="" >

            <div class="content-wrapper">
                <p class="card-content" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia incidunt, corporis dolores cum quisquam earum. Totam repudiandae omnis ad dignissimos, corporis obcaecati quibusdam maxime quos perspiciatis deserunt, magni rerum quidem.</p>
                
                <p class="price" >PHP 21.50</p>
            </div>


        </div>

        <div class="cart-card">

            <img class="card-img" src="https://png.pngtree.com/png-clipart/20220615/original/pngtree-kid-student-back-to-school-in-uniform-wear-backpack-png-image_8043401.png" alt="" >

            <div class="content-wrapper">
                <p class="card-content" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia incidunt, corporis dolores cum quisquam earum. Totam repudiandae omnis ad dignissimos, corporis obcaecati quibusdam maxime quos perspiciatis deserunt, magni rerum quidem.</p>
                
                <p class="price" >PHP 21.50</p>
            </div>


        </div>

        <div class="cart-card">

            <img class="card-img" src="https://png.pngtree.com/png-clipart/20220615/original/pngtree-kid-student-back-to-school-in-uniform-wear-backpack-png-image_8043401.png" alt="" >

            <div class="content-wrapper">
                <p class="card-content" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia incidunt, corporis dolores cum quisquam earum. Totam repudiandae omnis ad dignissimos, corporis obcaecati quibusdam maxime quos perspiciatis deserunt, magni rerum quidem.</p>
                
                <p class="price" >PHP 21.50</p>
            </div>


        </div>

        <div class="cart-card">

            <img class="card-img" src="https://png.pngtree.com/png-clipart/20220615/original/pngtree-kid-student-back-to-school-in-uniform-wear-backpack-png-image_8043401.png" alt="" >

            <div class="content-wrapper">
                <p class="card-content" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia incidunt, corporis dolores cum quisquam earum. Totam repudiandae omnis ad dignissimos, corporis obcaecati quibusdam maxime quos perspiciatis deserunt, magni rerum quidem.</p>
                
                <p class="price" >PHP 21.50</p>
            </div>


        </div>

        <div class="cart-card">

            <img class="card-img" src="https://png.pngtree.com/png-clipart/20220615/original/pngtree-kid-student-back-to-school-in-uniform-wear-backpack-png-image_8043401.png" alt="" >

            <div class="content-wrapper">
                <p class="card-content" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia incidunt, corporis dolores cum quisquam earum. Totam repudiandae omnis ad dignissimos, corporis obcaecati quibusdam maxime quos perspiciatis deserunt, magni rerum quidem.</p>
                
                <p class="price" >PHP 21.50</p>
            </div> 


        </div> -->

    </div>

    <footer class="roboto-bold " >
        
        <p class="roboto-bold " style="font-size: 2em;" >Sub Total: <?php addTotal(); ?></p>

        <button class="btn btn-success" >Checkout</button>

    </footer>
    
</body>
</html>

<?php

    function showCartItems() {

        include("includes/sqlconnection.php");
        
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $id) {
                
                $sql = "SELECT * FROM products WHERE id='$id'";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {

                        echo "
                            <div class='cart-card'>
                                <img class='card-img' src='images/$row[pic]' alt='' >
                    
                                <div class='content-wrapper'>
                                    <p class='card-content' >$row[description]</p>
                                    
                                    <p class='price' >PHP $row[price]</p>
                                </div>
                            </div>
                        ";
                    }
                } else {
                    echo "<div></div>";
                }
            }

        } else {
            echo "Cart is empty.";
        }

        $conn->close();
   
    }

    function addTotal(){
        include("includes/sqlconnection.php");
        
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {

            $total = 0;

            foreach ($_SESSION['cart'] as $id) {
                
                $sql = "SELECT * FROM products WHERE id='$id'";
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        $total += $row['price'];
                    }
                }

            }

            echo $total;

        } else {
            echo "Cart is empty.";
        }

        $conn->close();
   
    }

?>