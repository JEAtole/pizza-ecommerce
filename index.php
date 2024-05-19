<html>

<head>
    <title>Portfolio</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="global.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    <style>

        .banner {
            width: 70vw;
            min-height: 100px;
            margin: 0 auto;
            margin-top: 50px;
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
        
    </style>

</head>

<body data-spy="scroll" data-target=".navbar" >

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

        <div class='card custom-card' >
            <img class='card-img-top card-img' src='https://cdna.artstation.com/p/assets/images/images/065/909/460/large/federico-brunetti-margherita.jpg?1691534709' alt='Card image cap'>
            <div class='card-body'>
                <h5 class='card-title'>Normal Pizza</h5>
                <p class='card-text'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas animi, sunt a, inventore voluptates odio dignissimos temporibus facere, saepe commodi repudiandae similique modi! Itaque perferendis accusamus delectus magni nisi quos? </p>
            </div>
        </div>

        <div class='card custom-card' >
            <img class='card-img-top card-img' src='https://cdna.artstation.com/p/assets/images/images/065/909/460/large/federico-brunetti-margherita.jpg?1691534709' alt='Card image cap'>
            <div class='card-body'>
                <h5 class='card-title'>Normal Pizza</h5>
                <p class='card-text'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas animi, sunt a, inventore voluptates odio dignissimos temporibus facere, saepe commodi repudiandae similique modi! Itaque perferendis accusamus delectus magni nisi quos? </p>
            </div>
        </div>

        <div class='card custom-card' >
            <img class='card-img-top card-img' src='https://cdna.artstation.com/p/assets/images/images/065/909/460/large/federico-brunetti-margherita.jpg?1691534709' alt='Card image cap'>
            <div class='card-body'>
                <h5 class='card-title'>Normal Pizza</h5>
                <p class='card-text'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas animi, sunt a, inventore voluptates odio dignissimos temporibus facere, saepe commodi repudiandae similique modi! Itaque perferendis accusamus delectus magni nisi quos? </p>
            </div>
        </div>
        
        <?php 
            // showFeatured(); 
        ?>
    </div>
</body>

</html>

<?php

    // function showProducts() {

    //     include("../includes/sqlconnection.php");
        
    //     $sql = "recheck later"
    //     $result = $conn->query($sql);

    //     if($result->num_rows > 0){
    //         while($row = $result->fetch_assoc()) {

    //             // dito mo lalagay sa loob ng echo yung code para sa isang card tas uulitin niya na yan per row product sa sql
                
    //             echo "
    //                 <div class='card custom-card' >
    //                     <img class='card-img-top card-img' src='$row[image]' alt='Card image cap'>
    //                     <div class='card-body'>
    //                         <h5 class='card-title'>$row[prodName]</h5>
    //                         <p class='card-text'>$row[description]</p>
    //                     </div>
    //                 </div>
    //             ";
    //         }
    //     } else {
    //         echo "
    //             <div></div>
    //         ";
    //     }

    // }

?>
