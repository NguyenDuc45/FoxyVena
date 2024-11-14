<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Bình luận</h1>
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
                    <th>Người bình luận</th>
                    <th>Nội dung</th>
                    <th>Sản phẩm</th>
                    <th class="col-2 text-center">Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($listBinhluan as $binhluan) : ?>
                    <tr>
                      <td><?= getOneTaikhoan($binhluan["id_taikhoan"])["hoten"] ?></td>
                      <td><?= $binhluan["noidung"] ?></td>
                      <td><?= getOneSanpham($binhluan["id_sanpham"])["ten_sanpham"] ?></td>
                      <td class="text-center">
                        <?php if ($binhluan["trangthai"] == 1) {
                          $act = 'binhluan_hide&id=' . $binhluan["id_binhluan"];
                          $opt = "Ẩn";
                        } else {
                          $act = 'binhluan_unhide&id=' . $binhluan["id_binhluan"];
                          $opt = "Bỏ ẩn";
                        } ?>
                        <a href="index.php?act=<?= $act ?>"><button type="button" class="btn btn-primary"><?= $opt ?></button></a>
                        <a href="index.php?act=binhluan_delete&id=<?= $binhluan["id_binhluan"] ?>"><button type="button" class="btn btn-primary">Xóa</button></a>
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