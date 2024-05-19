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

        center {
            margin-bottom: 30px;
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
        <h2 class="text-center">Add Product</h2>
    </div>

    <center>
        <div class="container">
            <form action="edit.php" method="POST" enctype="multipart/form-data">
                <?php getRecord($_GET['id']); ?>
                <button class="btn btn-primary" type="submit" name="edit_product">Submit</button>
            </form>
        </div>
    </center>

</body>
</html>

<?php

    function getRecord($recno) {

        include("../includes/sqlconnection.php");

        $sql = "SELECT * FROM products WHERE id ='$recno'";
        $result = $conn->query($sql);
        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
                
                // dito mo lalagay sa loob ng echo yung code para sa isang card tas uulitin niya na yan per row product sa sql
                
                echo "
                    <input class='form-control' type='hidden' name='id' value='$row[id]' required> <br/>
                    <input class='form-control' type='text' name='prodName' value='$row[prodName]' required> <br/>
                    <textarea class='form-control' rows='4' name='description' required>$row[description]</textarea> <br/>
                    <input class='form-control' type='number' name='price' value='$row[price]' step='0.01' required> <br/>
                    <input class='form-control' type='hidden' name='pic_old' value='$row[pic]'>
                    <input class='form-control' type='file' name='pic'> <br/>
                ";
            }
        } else {
            echo "No Record Found";
        }
    }

?>
