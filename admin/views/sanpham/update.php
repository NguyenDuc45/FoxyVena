<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sửa sản phẩm</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <form action="index.php?act=sanpham_update&id=<?= $sanpham["id_sanpham"] ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="ten_sanpham">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="ten_sanpham" id="ten_sanpham" value="<?= $sanpham["ten_sanpham"] ?>" placeholder="Tên sản phẩm" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="id_danhmuc">Danh mục</label>
                    <select class="form-control select2" name="id_danhmuc" id="id_danhmuc" style="width: 100%;">
                      <?php foreach ($listDanhmuc as $danhmuc) : ?>
                        <option value="<?= $danhmuc["id_danhmuc"] ?>" <?php if ($danhmuc["id_danhmuc"] == $sanpham["id_danhmuc"]) echo "selected"; ?>><?= $danhmuc["ten_danhmuc"] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="gia">Giá</label>
                    <input type="number" class="form-control" name="gia" id="gia" value="<?= $sanpham["gia"] ?>" placeholder="Giá" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="mota">Mô tả</label>
                    <input type="text" class="form-control" name="mota" id="mota" value="<?= $sanpham["mota"] ?>" placeholder="Mô tả" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label for="hinhanh">Hình ảnh</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="hinhanh" id="hinhanh">
                        <label class="custom-file-label" for="hinhanh">Chọn ảnh</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="sua">Sửa</button>
                  <button type="reset" class="btn btn-primary">Nhập lại</button>
                  <a href="index.php?act=sanpham"><button type="button" class="btn btn-primary">Quay lại</button></a>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->