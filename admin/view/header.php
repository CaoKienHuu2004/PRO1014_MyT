<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <script src="https://kit.fontawesome.com/8c204d0fdf.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <link class="main-stylesheet" href="plugins/cute-alert/css/style.css" rel="stylesheet"
        type="text/css">
    <script src="plugins/cute-alert/js/cute-alert.js"></script>
    <script nonce="8fa564ec-f65a-4fb3-ad27-4d87b95a02a9">
        (function(w, d) {
            ! function(dg, dh, di, dj) {
                dg[di] = dg[di] || {};
                dg[di].executed = [];
                dg.zaraz = {
                    deferred: [],
                    listeners: []
                };
                dg.zaraz.q = [];
                dg.zaraz._f = function(dk) {
                    return async function() {
                        var dl = Array.prototype.slice.call(arguments);
                        dg.zaraz.q.push({
                            m: dk,
                            a: dl
                        })
                    }
                };
                for (const dm of ["track", "set", "debug"]) dg.zaraz[dm] = dg.zaraz._f(dm);
                dg.zaraz.init = () => {
                    var dn = dh.getElementsByTagName(dj)[0],
                        dp = dh.createElement(dj),
                        dq = dh.getElementsByTagName("title")[0];
                    dq && (dg[di].t = dh.getElementsByTagName("title")[0].text);
                    dg[di].x = Math.random();
                    dg[di].w = dg.screen.width;
                    dg[di].h = dg.screen.height;
                    dg[di].j = dg.innerHeight;
                    dg[di].e = dg.innerWidth;
                    dg[di].l = dg.location.href;
                    dg[di].r = dh.referrer;
                    dg[di].k = dg.screen.colorDepth;
                    dg[di].n = dh.characterSet;
                    dg[di].o = (new Date).getTimezoneOffset();
                    if (dg.dataLayer)
                        for (const du of Object.entries(Object.entries(dataLayer).reduce(((dv, dw) => ({
                                ...dv[1],
                                ...dw[1]
                            })), {}))) zaraz.set(du[0], du[1], {
                            scope: "page"
                        });
                    dg[di].q = [];
                    for (; dg.zaraz.q.length;) {
                        const dx = dg.zaraz.q.shift();
                        dg[di].q.push(dx)
                    }
                    dp.defer = !0;
                    for (const dy of [localStorage, sessionStorage]) Object.keys(dy || {}).filter((dA => dA.startsWith("_zaraz_"))).forEach((dz => {
                        try {
                            dg[di]["z_" + dz.slice(7)] = JSON.parse(dy.getItem(dz))
                        } catch {
                            dg[di]["z_" + dz.slice(7)] = dy.getItem(dz)
                        }
                    }));
                    dp.referrerPolicy = "origin";
                    dp.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(dg[di])));
                    dn.parentNode.insertBefore(dp, dn)
                };
                ["complete", "interactive"].includes(dh.readyState) ? zaraz.init() : dg.addEventListener("DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../index.php" class="nav-link">Trang khách</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="logout.php" class="nav-link">Đăng xuất</a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">

                            <div class="media">
                                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>

                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>


        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="index3.html" class="brand-link">
                <img src="../view/layout/assets/images/logo/logo_MyT-01.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin MyT</span>
            </a>

            <div class="sidebar">

                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Quản Trị Viên</a>
                    </div>
                </div>

                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="index.php" class="nav-link <?php echo (empty($_GET['page'])) ? 'active' : ''; ?>">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=categories" class="nav-link <?=active_sidebar(['categories', 'categories-add'])?>">
                                <i class="nav-icon fa-solid fa-folder-open"></i>
                                <p>
                                    Quản lí chuyên mục
                                    <span class="badge badge-info right">5</span>
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=products" class="nav-link <?=active_sidebar(['product-edit', 'products'])?>">
                                <i class="nav-icon fa-solid fa-folder-plus"></i>
                                <p>
                                    Quản lí sản phẩm
                                    <!-- <span class="right badge badge-danger">New</span> -->
                                    <span class="badge badge-info right">22</span>

                                </p>
                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=invoices" class="nav-link">
                                <i class="nav-icon fas fa-file-invoice-dollar"></i>
                                <p>
                                    Hoá Đơn
                                    <span class="badge badge-info right">5</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=invoices" class="nav-link">
                                <i class="nav-icon fas fa-comment-dots"></i>
                                <p>
                                    Quản lí bình luận
                                    <span class="badge badge-info right">5</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=invoices" class="nav-link">
                                <i class="nav-icon fas fa-history"></i>
                                <p>
                                    Quản lí giao dịch
                                    <span class="badge badge-info right">5</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?page=users" class="nav-link ">
                                <i class="nav-icon fa-solid fa-user"></i>
                                <p>
                                    Quản lí thành viên
                                    <!-- <i class="fas fa-angle-left right"></i> -->
                                    <span class="badge badge-info right">5</span>
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

        </aside>