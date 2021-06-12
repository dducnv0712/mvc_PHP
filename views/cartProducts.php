<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category List</title>
    <link rel="stylesheet" href="../../mvc_PHP/views/libs/fontawesome-free-5.15.2/css/all.min.css">
    <link rel="stylesheet" href="../../mvc_PHP/views/libs/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../mvc_PHP/views/css/cartProduct.css">

</head>
<body>
<div class="container mt-5 p-3 rounded cart">
    <div class="row no-gutters">
        <div class="col-md-8">
            <div class="product-details mr-2">
                <div class="d-flex rounded-3 border-top flex-row cart-header align-items-center"><i class="fa ms-2 fa-long-arrow-left"></i><span class="ml-2"><a href="?route=Product-List" class="text-secondary backBtn"><i class="fas fa-arrow-left"></i></a> Continue Shopping</span></div>
                <div class="cart-body rounded-3 mt-3">
                    <h6 class="mb-0 ">Shopping cart</h6>
                    <div class="d-flex justify-content-between"><span>You have <?php  echo $count ?> items in your cart</span>

                </div>
                    <div  class="container-product mt-3">

                        <?php $subTotal = 0; foreach  ($cart_List as $product){?>

                            <div class="d-flex justify-content-between align-items-center mt-3 py-2 mx-3 items rounded">
                                <div class="d-flex flex-row">
                                    <div class="ml-2"><span class="fw-bold name-pr d-block"><?php echo $product['product_name'] ?></span><span class="spec"><?php echo $product['product_category'] ?></span></div>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center"><span class="d-block  fw-bold mx-5">Quantity: 2</span> <span class="d-block  mx-3 ml-5 fw-bold">Price:  <?php echo number_format($product["product_price"],0,",",'.')." VNĐ" ?></span> <button onclick="window.location.href='?route=Cart-List&delCart=<?php echo $product["product_id"]?>'" type="button" class="shadow-none btn-close"></button></div>
                            </div>
                            <?php  $subTotal += $product["product_price"] ?>
                        <?php } ?>


                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="payment-info">
                <div class="d-flex justify-content-between align-items-center"><span>Card details</span><img class="rounded" src="https://i.imgur.com/WU501C8.jpg" width="30"></div><span class="type d-block mt-3 mb-1">Card type</span><label class="radio"> <input type="radio" name="card" value="payment" checked> <span><img width="30" src="https://img.icons8.com/color/48/000000/mastercard.png" /></span> </label>
                <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/visa.png" /></span> </label>
                <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/ultraviolet/48/000000/amex.png" /></span> </label>
                <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/paypal.png" /></span> </label>
                <div><label class="credit-card-label">Name on card</label><input type="text" class="form-control credit-inputs" placeholder="Name"></div>
                <div><label class="credit-card-label">Card number</label><input type="text" class="form-control credit-inputs" placeholder="0000 0000 0000 0000"></div>
                <div class="row">
                    <div class="col-md-6"><label class="credit-card-label">Date</label><input type="text" class="form-control credit-inputs" placeholder="12/24"></div>
                    <div class="col-md-6"><label class="credit-card-label">CVV</label><input type="text" class="form-control credit-inputs" placeholder="342"></div>
                </div>
                <hr class="line">

                <div class="d-flex justify-content-between information"><span>Subtotal</span><span><?php echo number_format($subTotal,0,",",'.')." VNĐ"  ?></span></div>
                <div class="d-flex justify-content-between information"><span>Shipping</span><span><?php $shipping = 30000; echo number_format($shipping,0,",",'.')." VNĐ"  ?></span></div>
                <div class="d-flex justify-content-between information"><span>Total(Incl. taxes)</span><span><?php echo number_format($subTotal + $shipping,0,",",'.')." VNĐ"  ?></span></div>
                <input name="total" type="hidden" value="<?php echo number_format($subTotal + $shipping,0,",",'.')." VNĐ"  ?>">
                <button type="submit" class="btn btn-warning  shadow-none rounded-pill fs-6  button cartButton">Checkout</button>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="../../mvc_PHP/views/libs/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
</body>
</html>
