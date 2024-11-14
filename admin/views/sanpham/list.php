<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Sản phẩm</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php?act=sanpham_add"><button type="button" class="btn btn-block btn-dark float-sm-right">Thêm sản phẩm</button></a></li>
          </ol>
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
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th class="col-1 text-center">ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Danh mục</th>
                    <th>Giá</th>
                    <th>Lượt xem</th>
                    <th class="col-3 text-center">Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($listSanpham as $sanpham) : ?>
                    <tr>
                      <td class="text-center"><?= $sanpham["id_sanpham"] ?></td>
                      <td><?= $sanpham["ten_sanpham"] ?></td>
                      <td><?= getOneDanhmuc($sanpham["id_danhmuc"])["ten_danhmuc"] ?></td>
                      <td><?= $sanpham["gia"] ?></td>
                      <td><?= $sanpham["luotxem"] ?></td>
                      <td class="text-center">
                        <a href="index.php?act=sanpham_detail&id=<?= $sanpham["id_sanpham"] ?>"><button type="button" class="btn btn-primary">Chi tiết</button></a>
                        <a href="index.php?act=sanpham_update&id=<?= $sanpham["id_sanpham"] ?>"><button type="button" class="btn btn-primary">Sửa</button></a>
                        <a href="index.php?act=sanpham_delete&id=<?= $sanpham["id_sanpham"] ?>"><button type="button" class="btn btn-primary">Xóa</button></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
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