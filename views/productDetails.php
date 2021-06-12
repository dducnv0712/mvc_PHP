<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details Product</title>
    <link rel="stylesheet" href="../../mvc_PHP/views/libs/fontawesome-free-5.15.2/css/all.min.css">
    <link rel="stylesheet" href="../../mvc_PHP/views/libs/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../mvc_PHP/views/css/detailsProduct.css">
</head>
<body>
<div class="container  d-flex align-items-center justify-content-center">

    <div class="card rounded-3 overflow-hidden">
        <h5 class="card-header fw-bold"><a href="?route=Product-List" class="text-secondary backBtn"><i class="fas fa-arrow-left"></i></a> Product Details</h5>
        <div class="card-body">
            <h5 class="card-title"> <?php echo $product_Details['product_name'] ?></h5>
            <ul>
                <li><span class="fw-bold">Price:</span> <?php echo number_format($product_Details["product_price"],0,",",'.')." VNĐ" ?> </li>
                <li><span class="fw-bold">ID:</span> <?php echo $product_Details["product_id"] ?> </li>
                <li><span class="fw-bold">Category:</span> <?php echo $product_Details['product_category'] ?> </li>
            </ul>
            <form action="?route=Cart-Product" method="post">
                <label for="qty">Quantity</label>
                <input name="cart_id" type="hidden" value="<?php echo $product_Details["product_id"] ?>">
                <input id="qty" size="2" name="qty['<?php echo $product_Details["product_id"] ?>']" >
                <button class="btn btn-primary shadow-none rounded-pill fs-6  button detailsButton">ADD TO CART</button>
            </form>


        </div>
    </div>

</div>
<script src="../../mvc_PHP/views/libs/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
<script src="../../mvc_PHP/views/libs/bootstrap-5.0.1-dist/js/bootstrap.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>