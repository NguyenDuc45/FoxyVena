<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Chi tiết sản phẩm</h1>
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
                            <div class="row mb-2">
                                <div class="col-4">
                                    <img src="<?= BASE_URL . "/uploads/" . $listAnhsanpham[0]["url"] ?>" alt="img" class="rounded float-left img-fluid">
                                </div>
                                <div class="col-8">
                                    <p><b>Tên sản phẩm: </b><?= $sanpham["ten_sanpham"] ?></p>
                                    <p><b>Danh mục: </b><?= $danhmuc["ten_danhmuc"] ?></p>
                                    <p><b>Giá: </b><?= $sanpham["gia"] ?></p>
                                    <p><b>Lượt xem: </b><?= $sanpham["luotxem"] ?></p>
                                    <p><b>Mô tả: </b><?= $sanpham["mota"] ?></p>
                                </div>
                            </div>

                            <div class="col-12">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Ảnh</th>
                                            <th class="col-2">Hành động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listBinhluan as $binhluan) : ?>
                                            <tr>
                                                <td><?= getOneTaikhoan($binhluan["id_taikhoan"])["hoten"] ?></td>
                                                <td><?= $binhluan["noidung"] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-12">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="col-4">Người bình luận</th>
                                            <th>Nội dung</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($listBinhluan as $binhluan) : ?>
                                            <tr>
                                                <td><?= getOneTaikhoan($binhluan["id_taikhoan"])["hoten"] ?></td>
                                                <td><?= $binhluan["noidung"] ?></td>
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