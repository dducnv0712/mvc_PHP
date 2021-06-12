<?php
include_once "controllers/WebControllers.php";
$route = isset($_GET["route"])?$_GET["route"]:"";
$controller = new WebControllers();
switch ($route){
    //list category
    case "Category-List":$controller->listCategory();break;
    case "Insert-Category":$controller->insertCategory();break;
    case "Update-Category":$controller->updateCategory();break;
    case "Delete-Category":$controller->deleteCategory();break;
    case "Select-Product":$controller->selectProduct();break;
    //ket thuc list category
    //product list
    case "Product-List":$controller->listProduct();break;
    case "Insert-Product":$controller->insertProduct();break;
    case "Delete-Product":$controller->deleteProduct();break;
    case "Update-Product":$controller->updateProduct();break;
    case "Product-Details":$controller->productDetails();break;
    //cart product
    case "Cart-Product":$controller->cartProduct();break;
    case "Cart-List":$controller->cartList();break;




    default: $controller->Home();
}