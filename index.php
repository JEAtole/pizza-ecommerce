<html>

<head>
    <title>Portfolio</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    
    <style>

        /* Google Fonts import */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        * {
            font-family: "Roboto", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        .roboto-bold {
            font-family: "Roboto", sans-serif;
            font-weight: 700;
            font-style: normal;
        }

        .merriweather-bold {
            font-family: "Merriweather", serif;
            font-weight: 700;
            font-style: normal;
        }
        
        .caveat-tagline {
            font-family: "Caveat", cursive;
            font-optical-sizing: auto;
            font-weight: 500;
            font-style: normal;
        }

        .light-black {
            color: #373737;
        }

        .width-format {
            width: 70vw;
        }

        .store-name {
            color:#3b3b3b;
            padding-left: 0px;
            padding-right: 0px
        }

        .nav-style {
            border: none; 
            /* background: #fff1e5; */
        }

        .nav > li > a:hover{
            background-color: #ffceb7;
        }
        
        .banner {
            width: 70vw;
            min-height: 100px;
            margin: 0 auto;
        }

        .banner-img {
            width: 250px;
            height: 250px;
            border-radius: 20px;
        }

        .banner-content {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            padding: 20px 0px;
        }

        .banner-quote-container {
            width: 350px; 
            height: 250px; 
            display: flex;
        }

        .banner-quote {
            width: fit-content;
            display: block;
            margin: auto;
            font-size: 3.2em;
        }

        .tagline-container {
            width: fit-content;
            display: flex;
            margin: auto;
            font-size: 3.2em;
        }

        .top-products {
            width: fit-content;
            display: flex;
            margin: 10px auto;
            font-size: 2.8em;
            font-style: italic;
        }

        .custom-card {
            width: 33.33%;
            border-radius: 15px;
            overflow: hidden;
        }

        .card-containers {
            display:flex;
            flex-direction: row;
            margin: auto;
            gap: 20px;
            width: 55vw;
        }

        .card-img {
            width:100%;
        }
        
    </style>

</head>

<body data-spy="scroll" data-target=".navbar" >

    <nav class="navbar navbar-custom nav-style" >
        <div class="container-fluid width-format">
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

    <div class="banner width-format">

        <div class="banner-content">

            <div class="banner-quote-container" >
                <p class="banner-quote merriweather-bold" >Taste the Tradition, Love the Pizza</p>
            </div>

            <img class="banner-img" src="https://cdnb.artstation.com/p/assets/images/images/068/476/557/large/farrukh-abdur-pizza-stylized-art-farrukh-03.jpg?1697903578" alt="" >

        </div>

    </div>

    <div class=" ">
        <p class="top-products merriweather-bold" >Top Products</p>
    </div>

    <div class="card-containers width-format">

        <?php showFeatured(); ?>
        
        <!-- <div class="card custom-card" >
            <img class="card-img-top card-img" src="https://cdna.artstation.com/p/assets/images/images/073/563/518/large/thekoswog-1-8.jpg?1709936182" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Pepperoni</h5>
                <p class="card-text">Some pepperoni content worht 2 lines of description.</p>
            </div>
        </div> -->

        <!-- <div class="card custom-card width-format" >
            <img class="card-img-top card-img" src="https://cdnb.artstation.com/p/assets/images/images/073/563/521/large/thekoswog-1-1.jpg?1709936186" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>

        <div class="card custom-card width-format" >
            <img class="card-img-top card-img" src="https://cdna.artstation.com/p/assets/images/images/073/563/524/large/thekoswog-1-7.jpg?1709936196" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div> -->

    </div>
</body>

</html>

<?php

    function showProducts() {

        include("../includes/sqlconnection.php");
        
        $sql = "recheck later"
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {

                // dito mo lalagay sa loob ng echo yung code para sa isang card tas uulitin niya na yan per row product sa sql
                
                echo "
                    <div class='card custom-card' >
                        <img class='card-img-top card-img' src='$row[image]' alt='Card image cap'>
                        <div class='card-body'>
                            <h5 class='card-title'>$row[prodName]</h5>
                            <p class='card-text'>$row[description]</p>
                        </div>
                    </div>
                ";
            }
        } else {
            echo "
                <div></div>
            ";
        }

    }

?>
