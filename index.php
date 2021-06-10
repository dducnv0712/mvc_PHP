<?php
include_once "controllers/WebControllers.php";
$route = isset($_GET["route"])?$_GET["route"]:"";
$controller = new WebControllers();
switch ($route){
    case "List-Category":$controller->listCategory();break;
    case "Insert-Category":$controller->insertCategory();break;
    case "Update-Category":$controller->updateCategory();break;
    case "Delete-Category":$controller->deleteCategory();break;
    default: $controller->Home();
}