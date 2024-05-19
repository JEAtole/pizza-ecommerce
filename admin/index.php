<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <style>
        body {
            padding-top: 50px;
        }

        table, th, td{
            border: 1px solid black;
            text-align: center;
        }

        th, td {
            padding: 10px;
        }

        center {
            margin-bottom: 30px;
        }
        button a {
            color: white;
        }
    </style>
</head>
<body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="../admin/">E-commerce Admin</a>
            </div>
        </div>
    </nav>

    <div class="page-header">
        <h1 class="text-center">Admin Page</h1>
    </div>

    <?php
        session_start();
        if(isset($_SESSION['add-product-status'])){
            echo "<br/> <p class='text-center'>";
            echo $_SESSION['add-product-status'];
            echo "</p><br/>";
            unset($_SESSION['add-product-status']);
        }
        if(isset($_SESSION['edit-product-status'])){
            echo "<br/> <p class='text-center'>";
            echo $_SESSION['edit-product-status'];
            echo "</p><br/>";
            unset($_SESSION['edit-product-status']);
        }
        if(isset($_SESSION['delete-product-status'])){
            echo "<br/> <p class='text-center'>";
            echo $_SESSION['delete-product-status'];
            echo "</p><br/>";
            unset($_SESSION['delete-product-status']);
        }
    ?>

    <center>
        <div class="container">
            <form action="addProduct.php">
                <button class="btn btn-primary btn-block">Add Product</button>
            </form>
        </div>
    </center>

    <center>
        <div class="container">
            <table style="width: 100%">
                <tr>
                    <th>Product ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>isFeatured</th>
                    <th>Pic</th>
                    <th>Action</th>
                </tr>

                <!-- palitan mo to ng function name showCards or showProducts kineme haha  -->
                <?php showProducts(); ?>
            </table>
        </div>
    </center>

</body>
</html>

<?php

    function showProducts() {

        // sayo dapat include("includes/sqlconnection.php"); lang
        include("../includes/sqlconnection.php");

        $sql = "SELECT * FROM products ORDER BY id";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                
                // dito mo lalagay sa loob ng echo yung code para sa isang card tas uulitin niya na yan per row product sa sql
                
                echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[prodName]</td>
                        <td>$row[description]</td>
                        <td>$row[price]</td>
                        <td>$row[isFeatured]</td>
                        <td>
                            <img src='../images/$row[pic]' width='100' height='100' alt='$row[pic]'>
                        </td>
                        <td>
                            <button class='btn btn-primary'>
                                <a href='editProduct.php?id=$row[id]'>Edit</a>
                            </button>
                            <button class='btn btn-danger'>
                               <a href='delete.php?id=$row[id]&pic=$row[pic]'>Delete</a>
                            </button>
                        </td>
                    </tr>
                ";
            }
        } else {
                echo "
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                ";
        }
    }

?>