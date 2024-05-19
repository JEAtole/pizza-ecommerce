<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="global.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <style>
        .developers {
            width: fit-content;
            display: flex;
            margin: 10px auto;
            font-size: 2.8em;
            font-style: italic;
        }

        .dev-wrapper {
            display: flex;
            flex-direction: row;
            gap: 20px;
            margin: auto;
            width: fit-content;
        }

        .dev-card {
            text-align: center;
            font-size: 1.5em;
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

    <p class="developers merriweather-bold" style="margin-top: 70px;" >Developers</p>

    <div class="dev-wrapper">

        <div class="dev-card">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/002/206/015/small/developer-working-icon-free-vector.jpg" alt="">
            <p class="roboto-bold" >Jhan Ellen Atole</p>
        </div>

        <div class="dev-card">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/002/206/015/small/developer-working-icon-free-vector.jpg" alt="">
            <p class="roboto-bold" >Rolando Morales Jr</p>
        </div>

    </div>

    


</body>
</html>