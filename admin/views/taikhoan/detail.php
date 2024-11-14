<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Chi tiết tài khoản</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><button class="btn btn-block btn-dark float-sm-right" onclick="history.go(-1);">Quay lại</button></li>
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
              <div class="row mb-5">
                <div class="col-4">
                  <img src="<?= BASE_URL . "/uploads/" . $taikhoan["hinhanh"] ?>" alt="img" class="rounded float-left img-fluid">
                </div>
                <div class="col-8">
                  <p><b>Tên tài khoản: </b><?= $taikhoan["ten_taikhoan"] ?></p>
                  <p><b>Họ tên: </b><?= $taikhoan["hoten"] ?></p>
                  <p><b>Email: </b><?= $taikhoan["email"] ?></p>
                  <p><b>Số điện thoại: </b><?= $taikhoan["sdt"] ?></p>
                  <p><b>Ngày sinh: </b><?= $taikhoan["ngaysinh"] ?></p>
                  <p><b>Địa chỉ: </b><?= $taikhoan["diachi"] ?></p>
                </div>
              </div>
              <div class="col-12">
                <h4>Lịch sử đặt hàng</h4>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th class="col-1 text-center">ID</th>
                      <th>Mã đơn hàng</th>
                      <th>Ngày đặt hàng</th>
                      <th>Trạng thái</th>
                      <th class="col-2 text-center">Hành động</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($listDonhang as $donhang) : ?>
                      <tr>
                        <td class="text-center"><?= $donhang["id_donhang"] ?></td>
                        <td><?= $donhang["ma_donhang"] ?></td>
                        <td><?= $donhang["created_at"] ?></td>
                        <td><?= $donhang["trangthai"] ?></td>
                        <td class="text-center">
                          <a href="index.php?act=donhang_detail&id=<?= $donhang["id_donhang"] ?>"><button type="button" class="btn btn-primary">Chi tiết</button></a>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
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