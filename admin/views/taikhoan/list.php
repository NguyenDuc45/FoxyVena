<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tài khoản</h1>
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
            <!-- <div class="card-header">
                  <h3 class="card-title">DataTable with minimal features & hover style</h3>
                </div> -->
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th class="col-1 text-center">ID</th>
                    <th>Tên tài khoản</th>
                    <th>Họ tên</th>
                    <th>Quyền</th>
                    <th class="col-2 text-center">Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($listTaikhoan as $taikhoan) : ?>
                    <tr>
                      <td class="text-center"><?= $taikhoan["id_taikhoan"] ?></td>
                      <td><?= $taikhoan["ten_taikhoan"] ?></td>
                      <td><?= $taikhoan["hoten"] ?></td>
                      <td>
                        <?php if ($taikhoan["quyen"] == 0) echo "User"; else echo "Admin"; ?>
                      </td>
                      <td class="text-center">
                        <?php if ($taikhoan["quyen"] == 0) { ?>
                          <a href="index.php?act=taikhoan_detail&id=<?= $taikhoan["id_taikhoan"] ?>"><button type="button" class="btn btn-primary">Chi tiết</button></a>
                          <a href="index.php?act=taikhoan_delete&id=<?= $taikhoan["id_taikhoan"] ?>"><button type="button" class="btn btn-primary">Xóa</button></a>
                        <?php } ?>
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