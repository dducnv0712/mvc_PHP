<?php
include_once "Database_cn.php";
class WebControllers{
    public function Home(){

    }

    public function listCategory(){
        $sql_txt = "select * from category";
        $list_category = queryDB($sql_txt);
        include "views/categoryList.php";

    }
    public function insertCategory(){
        $name_Category = $_POST['name_Category'];
        $sql_txt = "INSERT INTO `category`(`category_name`) VALUES ('$name_Category')";
        if (updateDB($sql_txt)) {
            header("location:?route=List-Category");
        } else {
            echo "<script>alert('Thêm thất bại')</script>";        }

    }
    public function updateCategory(){
        $id_update = $_POST['update_Category'];
        $name_update = $_POST['name_Category'];
        $sql_txt = "UPDATE `category` SET `category_name`='$name_update' WHERE `category_id` = $id_update";
        if (updateDB($sql_txt)) {
            header("location:?route=List-Category");
        } else {
            echo "<script>alert('Update False')</script>";
        }

    }
    public function deleteCategory(){
        $id_update = $_GET['delCategory'];
        $sql_txt = "DELETE FROM `category` WHERE `category_id` = $id_update";
        if (updateDB($sql_txt)) {
            header("location:?route=List-Category");
        } else {
            echo "<script>alert('Update False')</script>";
        }

    }

}
