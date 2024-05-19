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
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <input class="form-control" type="text" name="prodName" placeholder="Insert Product Name" required> <br/>
                <textarea class="form-control" rows="4" name="description" required>Product Description...</textarea> <br/>
                <input class="form-control" type="number" name="price" placeholder="Insert Product Price" step="0.01" required> <br/>
                <div class="text-left">
                    <span for="isFeatured">&nbsp;&nbsp;IsFeatured?&nbsp;&nbsp;</span>
                    <input type="radio" name="isFeatured" value="true" required>True&nbsp;&nbsp;
                    <input type="radio" name="isFeatured" value="false">False&nbsp;&nbsp;
                </div> <br/>
                <input class="form-control" type="file" name="pic"  required> <br/>
                <button class="btn btn-primary" type="submit" name="add_product">Submit</button>
            </form>
        </div>
    </center>

</body>
</html>
