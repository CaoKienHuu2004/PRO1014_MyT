<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tổng quan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Tổng quan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>


    <section class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-3 col-6">

                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?=format_cash($tong_giaodich)?></h3>
                            <p>Tổng giao dịch</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?=format_cash($tong_tainguyen)?></h3>
                            <p>Tổng tài nguyên</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?=format_cash($tong_thanhvien)?></h3>
                            <p>Tổng thành viên</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?=format_cash($tong_sodu_user)?></h3>
                            <p>Tổng số dư thành viên</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">Xem thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Thống kê tháng <?=date('m', time());?></h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                <p class="text-success text-xl">
                                    <i class="ion ion-ios-refresh-empty"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                                    <span class="font-weight-bold">
                                        <?=format_cash(pdo_query_value("SELECT SUM(`Total_Pcoin`) FROM `order` WHERE YEAR(Date_oder) = ".date('Y')." AND MONTH(Date_oder) = ".date('m')." "))?> PCoin </span>
                                    <span class="text-muted">TỔNG DOANH THU</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                <p class="text-warning text-xl">
                                    <i class="ion ion-ios-cart-outline"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                                    <span class="font-weight-bold">
                                        <?=format_cash(pdo_query_value("SELECT COUNT(*) FROM `order` WHERE YEAR(Date_oder) = ".date('Y')." AND MONTH(Date_oder) = ".date('m')." "))?> </span>
                                    <span class="text-muted">TỔNG GIAO DỊCH</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                            <div class="d-flex justify-content-between align-items-center mb-0">
                                <p class="text-danger text-xl">
                                    <i class="ion ion-ios-people-outline"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                                    <span class="font-weight-bold">
                                        <?=format_cash(pdo_query_value("SELECT COUNT(*) FROM `user` WHERE YEAR(create_date) = ".date('Y')." AND MONTH(create_date) = ".date('m')." "))?> </span>
                                    <span class="text-muted">THÀNH VIÊN MỚI</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Thống kê tuần</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                <p class="text-success text-xl">
                                    <i class="ion ion-ios-refresh-empty"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                                    <span class="font-weight-bold">
                                        <?=format_cash(pdo_query_value("SELECT SUM(`Total_Pcoin`) FROM `order` WHERE WEEK(Date_oder, 1) = WEEK(CURDATE(), 1) "))?> PCoin</span>
                                    <span class="text-muted">TỔNG DOANH THU</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                <p class="text-warning text-xl">
                                    <i class="ion ion-ios-cart-outline"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                                    <span class="font-weight-bold">
                                    <?=format_cash(pdo_query_value("SELECT COUNT(*) FROM `order` WHERE WEEK(Date_oder, 1) = WEEK(CURDATE(), 1) "))?> </span>
                                    <span class="text-muted">TỔNG GIAO DỊCH</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                            <div class="d-flex justify-content-between align-items-center mb-0">
                                <p class="text-danger text-xl">
                                    <i class="ion ion-ios-people-outline"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                                    <span class="font-weight-bold">
                                    <?=format_cash(pdo_query_value("SELECT COUNT(*) FROM `user` WHERE WEEK(create_date, 1) = WEEK(CURDATE(), 1) "))?> </span>
                                    <span class="text-muted">THÀNH VIÊN MỚI</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6">
                    <div class="card">
                        <div class="card-header border-0">
                            <h3 class="card-title">Thống kê hôm nay</h3>
                        </div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                <p class="text-success text-xl">
                                    <i class="ion ion-ios-refresh-empty"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                                    <span class="font-weight-bold">
                                        <?=format_cash(pdo_query_value("SELECT SUM(`Total_Pcoin`) FROM `order` WHERE `Date_oder` >= DATE(NOW()) AND `Date_oder` < DATE(NOW()) + INTERVAL 1 DAY "))?> PCoin</span>
                                    <span class="text-muted">TỔNG DOANH THU</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                            <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                                <p class="text-warning text-xl">
                                    <i class="ion ion-ios-cart-outline"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                                    <span class="font-weight-bold">
                                    <?=format_cash(pdo_query_value("SELECT count(*) FROM `order` WHERE `Date_oder` >= DATE(NOW()) AND `Date_oder` < DATE(NOW()) + INTERVAL 1 DAY "))?> </span>
                                    <span class="text-muted">TỔNG GIAO DỊCH</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                            <div class="d-flex justify-content-between align-items-center mb-0">
                                <p class="text-danger text-xl">
                                    <i class="ion ion-ios-people-outline"></i>
                                </p>
                                <p class="d-flex flex-column text-right">
                                    <span class="font-weight-bold">
                                    <?=format_cash(pdo_query_value("SELECT count(*) FROM `user` WHERE `create_date` >= DATE(NOW()) AND `create_date` < DATE(NOW()) + INTERVAL 1 DAY "))?> </span>
                                    <span class="text-muted">THÀNH VIÊN MỚI</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>
</section>

</div>
<?php
require_once('view/footer.php');
?>