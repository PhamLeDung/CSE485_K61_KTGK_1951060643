<?php
require 'view/template/header.php'
?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center mb-3">
                <h3>Danh Sách Thông Tin Độc Giả</h3>
            </div>
            <div class="col-md-12 mb-3">
                <a href="index.php?controller=docgia&action=admin"><button class="btn btn-primary">Xem chi tiết</button></a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã đọc giả</th>
                            <th scope="col">Họ Và Tên</th>
                            <th scope="col">Giới Tính</th>
                            <th scope="col">Năm sinh</th>
                            <th scope="col">Nghề nghiệp</th>
                            <th scope="col">Ngày cấp thẻ</th>
                            <th scope="col">Ngày hết hạn</th>
                            <th scope="col">Địa chỉ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($docgia as $bd) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $bd['madg'] ?></th>
                                <td><?php echo $bd['hovaten'] ?></td>
                                <td><?php echo $bd['gioitinh'] ?></td>
                                <td><?php echo $bd['namsinh'] ?></td>
                                <td><?php echo $bd['nghenghiep'] ?></td>
                                <td><?php echo $bd['ngaycapthe'] ?></td>
                                <td><?php echo $bd['ngayhethan'] ?></td>
                                <td><?php echo $bd['diachi'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>