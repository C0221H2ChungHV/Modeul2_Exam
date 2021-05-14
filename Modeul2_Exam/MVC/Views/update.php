<?php
require_once "./MVC/Views/layout/CSS.php";
?>
<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Cập nhật thông tin sản phẩm
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post" action="http://localhost/M2/examination/index.php?url=ProductController/update/<?php echo $data['product']['code'] ?>">
                    <div class="mb-3">
                        <label class="form-label">Tên hàng</label>
                        <input type="text" value="<?php echo $data['product']['product_Name'] ?>" name="product_Name" class="form-control">
                        <?php if (isset($errors['product_Name'])): ?>
                            <p class="text-danger"><?php echo $errors['product_Name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Loại Hàng</label>
                        <input type="text" value="<?php echo $data['product']['product_Line'] ?>" name="product_Line" class="form-control">
                        <?php if (isset($errors['product_Line'])): ?>
                            <p class="text-danger"><?php echo $errors['product_Line'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giá</label>
                        <input type="number" value="<?php echo $data['product']['price'] ?>" name="price" class="form-control">
                        <?php if (isset($errors['price'])): ?>
                            <p class="text-danger"><?php echo $errors['price'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Số Lượng</label>
                        <input type="number" value="<?php echo $data['product']['quantity'] ?>" name="quantity" class="form-control">
                        <?php if (isset($errors['quantity'])): ?>
                            <p class="text-danger"><?php echo $errors['quantity'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mô tả</label>
                        <input type="text" value="<?php echo $data['product']['description']; ?>" class="form-control" name="description">
                        <?php if (isset($errors['description'])): ?>
                            <p class="text-danger"><?php echo $errors['description'] ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                    <a type="button" href="index.php" class="btn btn-secondary">Quay lại</a>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
require_once "./MVC/Views/layout/JS.php";
?>