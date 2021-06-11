<?php
include_once "Database_cn.php";
class WebControllers{
    public function Home(){

    }


    //List Category
    public function listCategory(){
        $sql_txt = "select * from category";
        $list_category = queryDB($sql_txt);
        include "views/categoryList.php";
    }
    public function insertCategory(){
        $name_Category = $_POST['name_Category'];
        $sql_txt = "INSERT INTO `category`(`category_name`) VALUES ('$name_Category')";
        if (updateDB($sql_txt)) {
            header("location:?route=Category-List");
        } else {
            echo "<script>alert('Thêm thất bại')</script>";        }

    }
    public function updateCategory(){
        $id_update = $_POST['update_Category'];
        $name_update = $_POST['name_Category'];
        $sql_txt = "UPDATE `category` SET `category_name`='$name_update' WHERE `category_id` = $id_update";
        if (updateDB($sql_txt)) {
            header("location:?route=Category-List");
        } else {
            echo "<script>alert('Update False')</script>";
        }

    }
    public function deleteCategory(){
        $id_update = $_GET['delCategory'];
        $sql_txt = "DELETE FROM `category` WHERE `category_id` = $id_update";
        if (updateDB($sql_txt)) {
            header("location:?route=Category-List");
        } else {
            echo "<script>alert('Update False')</script>";
        }

    }
    public function selectProduct(){
        $category_ID = $_GET["category_ID"];
        $sql_txt = "select * from `products` where `category_id` = $category_ID";
        $sql_txt2 = "select * from category";
        $list_category = queryDB($sql_txt2);
        $product_List = queryDB($sql_txt);
        include "views/productList.php";
    }
    //ket thuc list category
    
    
    //List Product


    //List Product
    public function listProduct(){
        $sql_txt = "select * from products";
        $sql_txt2 = "select * from category";
        $product_List = queryDB($sql_txt);
        $list_category = queryDB($sql_txt2);
        include "views/productList.php";

    }
    public function insertProduct()
    {

        $name_Product = $_POST['name_Product'];
        $price_Product = $_POST['price_Product'];
        $name_Category = $_POST['name_Category'];
        $id_Category = $_POST['id_Category'];
        $sql_txt = "INSERT INTO `products`( `product_name`, `product_price`, `product_category`, `category_id`) VALUES ('$name_Product','$price_Product','$name_Category','$id_Category')";
        if (updateDB($sql_txt)) {
            header("location:?route=Product-List");
        } else {
            echo "<script>alert('Thêm thất bại')</script>";
        }

    }
    public function deleteProduct(){
        $id_update = $_GET['delProduct'];
        $sql_txt = "DELETE FROM `products` WHERE `product_id` = $id_update";
        if (updateDB($sql_txt)) {
            header("location:?route=Product-List");
        } else {
            echo "<script>alert('Update False')</script>";
        }

    }
    public function updateProduct(){
        $id_Product = $_POST['idProduct'];
        $nameProduct = $_POST['nameProduct'];
        $priceProduct = $_POST['priceProduct'];
        $name_Category = $_POST['nameCategory'];
        $id_Category = $_POST['idCategory'];
        $sql_txt = "UPDATE `products` SET `product_name`='$nameProduct',`product_price`= $priceProduct ,`product_category`='$name_Category',`category_id`='$id_Category' WHERE `product_id`= $id_Product";
        if (updateDB($sql_txt)) {
            header("location:?route=Product-List");
        } else {
            echo "<script>alert('Cập Nhật thất bại')</script>";
        }

    }

}
