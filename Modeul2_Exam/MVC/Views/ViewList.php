<?php
require_once "./MVC/Views/layout/CSS.php";
?>
    <div class="col-12 col-md-12 mt-2">
        <div class="card">
            <div class="card-header">
                Danh sách san pham
            </div>
            <div class="card-body">
                <div class="col-12">
                    <a class="btn btn-success mb-2" href="./index.php?url=ProductController/addProduct">Thêm mới</a>
                    <span>
                    <form method="post" action="index.php?url=ProductController/searchProduct">
<input type="text" name="product_Name">
    <button type="submit">Tìm Kiếm</button>
</form>
</span>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên hàng</th>
                            <th>Loại Hàng</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($data

                        as $key => $product): ?>
                        <tr>
                            <td><?php echo ++$key ?></td>
                            <td><?php echo $product['product_Name'] ?></td>
                            <td><?php echo $product['product_Line'] ?></td>
                            <td><a href="./index.php?url=ProductController/delete/<?php echo $product['code']; ?>"
                                   class="btn btn-danger btn-sm" onclick="return confirm('Bạn chắc chắn muốn xoá?')">Delete</a>
                                <a href="./index.php?url=ProductController/update/<?php echo $product['code']; ?>"
                                   class="btn btn-primary btn-sm">Update</a></td>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php
require_once "./MVC/Views/layout/JS.php";
?>