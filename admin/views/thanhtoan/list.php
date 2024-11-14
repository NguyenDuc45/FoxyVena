<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hình thức thanh toán</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php?act=thanhtoan_add"><button type="button" class="btn btn-block btn-dark float-sm-right">Thêm hình thức thanh toán</button></a></li>
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
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th class="col-1 text-center">ID</th>
                    <th>Tên hình thức</th>
                    <th class="col-2 text-center">Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($listThanhtoan as $thanhtoan) : ?>
                    <tr>
                      <td class="text-center"><?= $thanhtoan["id_thanhtoan"] ?></td>
                      <td><?= $thanhtoan["ten_thanhtoan"] ?></td>
                      <td class="text-center">
                        <a href="index.php?act=thanhtoan_update&id=<?= $thanhtoan["id_thanhtoan"] ?>"><button type="button" class="btn btn-primary">Sửa</button></a>
                        <a href="index.php?act=thanhtoan_delete&id=<?= $thanhtoan["id_thanhtoan"] ?>"><button type="button" class="btn btn-primary">Xóa</button></a>
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