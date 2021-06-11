<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category List</title>
    <link rel="stylesheet" href="../../mvc_PHP/views/libs/bootstrap-5.0.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../mvc_PHP/views/css/productList.css">

</head>
<body>

<div class="container ">
    <button onclick="window.location.href='?route=Category-List'" class="btn mt-4 shadow-none  btn-secondary"><< Back</button>
    <h2 class="text-center fw-bold mt-5">Products List</h2>
    <table class="table mt-3 text-center rounded-3" >
        <thead class="header-table ">
        <tr >
            <th class="border-top border-bottom-0" scope="col">Noun</th>
            <th class="border-top border-bottom-0" scope="col">Products ID</th>
            <th class="border-top border-bottom-0"  scope="col">Products Name</th>
            <th class="border-top border-bottom-0"  scope="col">Product Category</th>
            <th class="border-top border-bottom-0"  scope="col">Product Price</th>
            <th class="border-top border-bottom-0"  scope="col">Category ID</th>
            <th class="border-top border-bottom-0"  scope="col">Functions</th>
        </tr>
        </thead>
        <tbody>
        <?php  $num=1; foreach ($product_List as $item){ ?>

            <tr class="tr-table bg-light" >
                <th  scope="row">
                    <?php  echo $num++ ;?>
                </th>
                <td><a   href="#"><?php echo $item['product_id']?></a></td>
                <td><a   href="#"><?php echo $item['product_name']?></a></td>
                <td><a   href="#"><?php echo $item['product_category']?></a></td>
                <td><a   href="#"><?php echo number_format($item["product_price"],0,",",'.')." VNĐ"?></a></td>
                <td><a   href="#"><?php echo $item['category_id']?></a></td>

                <td>
                    <div class="btn-group  btn-group-sm" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-secondary text-dark shadow-none  rounded-pill rounded-end button  tableButton" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $item["product_id"]?>">Delete</button>
                        <button type="button" class="btn btn-secondary text-dark shadow-none rounded-pill rounded-start button tableButton" data-bs-toggle="modal" data-bs-target="#updateModal<?php echo $item["product_id"]?>">Update</button>
                    </div>


                    <!-- Cập Nhật Thể Loại Sản Phẩm -->
                    <div class="modal fade" id="updateModal<?php echo $item["product_id"]?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered rounded-3 overflow-hidden">
                            <div class="modal-content rounded-3 overflow-hidden">
                                <div style="  background-image: linear-gradient(#fff, #ccc);" class="modal-header">
                                    <h5 class="modal-title fw-bold" id="exampleModalToggleLabel">Update Category </h5>
                                    <button type="button" style="box-shadow: none" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="?route=Update-Product" method="post">
                                    <div class="modal-body text-lg-start">
                                        <div class="mb-3">
                                            <input value="<?php echo $item["product_id"]?>"  type="hidden"  id="nameProduct" name="idProduct">
                                            <label for="nameProduct" class="form-label fw-bold">Name Product</label>
                                            <input value="<?php echo $item["product_name"]?>" id="nameProduct" type="text" name="nameProduct" class="form-control rounded-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                        <div class="mb-3">
                                            <label for="priceProduct" class="form-label fw-bold">Price Product</label>
                                            <input value="<?php echo $item["product_price"]?>" id="priceProduct" type="text" name="priceProduct" class="form-control rounded-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                                        </div>
                                        <div class="mb-3">
                                            <label for="nameCategory" class="form-label fw-bold">Name Category</label>
                                            <select  id="nameCategory" name="nameCategory" class="form-select" aria-label="Default select example">

                                                <?php foreach ($list_category as $item_category){?>
                                                    <option value="<?php echo $item_category['category_name'] ?>" ><?php echo $item_category['category_name']."-".$item_category['category_id'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="idCategory"  class="form-label fw-bold">ID Category</label>
                                            <select id="idCategory"  name="idCategory" class="form-select" aria-label="Default select example">
                                                <?php foreach ($list_category as $item_category){?>
                                                    <option value="<?php echo $item_category['category_id'] ?>" ><?php echo  $item_category['category_id']."-".$item_category['category_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-light">
                                        <button type="submit" class="btn btn-secondary text-dark rounded-pill    button tableButton">Update</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>


                    <!-- Xóa Thể Loại Sản Phẩm -->
                    <div class="modal fade" id="deleteModal<?php echo $item["product_id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                                    <button type="button" class="shadow-none btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    You Want To Delete Category <span class="fw-bold"><?php echo $item['product_name']?></span>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn shadow-none  btn-secondary text-dark rounded-pill  button tableButton" data-bs-dismiss="modal">Close</button>
                                    <button onclick="window.location.href='?route=Delete-Product&delProduct=<?php echo $item['product_id']?>'"  class="btn shadow-none btn-danger text-light rounded-pill  button deleteButton">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </td>
            </tr>
        <?php }?>
        <tr class="bg-light table-responsive-lg" >
            <th class="table-sm">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" role="button" id="categorySelect" data-bs-toggle="dropdown" aria-expanded="false">
                        Select Category
                    </a>

                    <ul class="dropdown-menu position-absolute " style="z-index: 99" aria-labelledby="categorySelect">
                        <?php foreach ($list_category as $item_category){?>
                            <li class="dropdown-item"><a  href="?route=Select-Product&category_ID=<?php echo $item_category['category_id'] ?>"><?php echo $item_category['category_name'] ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </th>
            <th class="table-sm"> </th>
            <th class="table-sm"> </th>
            <th class="table-sm"> </th>
            <td class="table-sm"></td>
            <td class="table-sm"></td>
            <td class="table-sm">  <button type="button" class="btn  btn-secondary text-dark rounded-pill fw-bold  button tableButton" data-bs-toggle="modal" data-bs-target="#insertTable">Insert Table</button></td>
        </tr>
        </tbody>
    </table>
    <!-- Thêm Thể Loại Sản Phẩm -->
    <div class="modal fade" id="insertTable" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered rounded-3 overflow-hidden">
            <div class="modal-content rounded-3 overflow-hidden">
                <div style="  background-image: linear-gradient(#fff, #ccc);" class="modal-header">
                    <h5 class="modal-title fw-bold" id="exampleModalToggleLabel">Insert Product</h5>
                    <button type="button" style="box-shadow: none" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="?route=Insert-Product" method="post">
                    <div class="modal-body text-lg-start">
                        <div class="mb-3">
                            <label for="nameProduct" class="form-label fw-bold">Name Product</label>
                            <input id="nameProduct" type="text" name="name_Product" class="form-control rounded-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <div class="mb-3">
                            <label for="priceProduct" class="form-label fw-bold">Price Product</label>
                            <input id="priceProduct" type="text" name="price_Product" class="form-control rounded-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        <div class="mb-3">
                        <label for="nameCategory" class="form-label fw-bold">Name Category</label>
                        <select id="nameCategory" name="name_Category" class="form-select" aria-label="Default select example">

                            <?php foreach ($list_category as $item_category){?>
                                <option value="<?php echo $item_category['category_name'] ?>" ><?php echo $item_category['category_name']."-".$item_category['category_id'] ?></option>
                            <?php } ?>
                        </select>
                        </div>
                        <div class="mb-3">
                            <label for="idCategory"  class="form-label fw-bold">ID Category</label>
                            <select id="idCategory"  name="id_Category" class="form-select" aria-label="Default select example">
                                <?php foreach ($list_category as $item_category){?>
                                    <option value="<?php echo $item_category['category_id'] ?>" ><?php echo  $item_category['category_id']."-".$item_category['category_name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>


                    <div class="modal-footer bg-light">
                        <button type="submit" class="btn btn-secondary text-dark rounded-pill    button tableButton">Insert</button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>


<script src="../../mvc_PHP/views/libs/bootstrap-5.0.1-dist/js/bootstrap.min.js"></script>
<script src="../../mvc_PHP/views/libs/bootstrap-5.0.1-dist/js/bootstrap.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>

