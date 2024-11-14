<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Thêm hình thức thanh toán</h1>
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
              <form action="index.php?act=thanhtoan_add" method="post">
                <div class="card-body">
                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div> -->
                  <div class="form-group">
                    <label for="ten_thanhtoan">Tên hình thức</label>
                    <input type="text" class="form-control" name="ten_thanhtoan" id="ten_thanhtoan" placeholder="Tên hình thức" autocomplete="off">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="themmoi">Thêm mới</button>
                  <button type="reset" class="btn btn-primary">Nhập lại</button>
                  <a href="index.php?act=thanhtoan"><button type="button" class="btn btn-primary">Quay lại</button></a>
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