<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="./Public/images/logo.png" />
    <link rel="stylesheet" href="./Public/css/products.css">
    <link rel="stylesheet" href="./Public/css/styles.css">
    <title>Sản phẩm</title>
</head>

<body onload="autoloading()">
    <!-- Section header -->
    <?php include_once './View/inc/header.php'; ?>
    <!--End section header-->
    <hr>
    <div class="container-fluid">
        <!-- <div class="row">
            <div class="col-md-4">
                <a href="https://imgs.vietnamnet.vn/Images/2017/08/28/12/20170828120044-vay-dam-nu-1.jpg" class="thumbnail">
                    <img src="https://imgs.vietnamnet.vn/Images/2017/08/28/12/20170828120044-vay-dam-nu-1.jpg" width="100%" height="300">
                </a>
            </div>
            <div class="col-md-4">
                <a href="https://vn-test-11.slatic.net/p/0d90b4c62fcde892b398868a5b6d78db.jpg" class="thumbnail">
                    <img src="https://vn-test-11.slatic.net/p/0d90b4c62fcde892b398868a5b6d78db.jpg" width="100%" height="300">
                </a>
            </div>
            <div class="col-md-4">
                <a href="https://cf.shopee.vn/file/e903ad0c5a357af61d1a9a0543c56a64" class="thumbnail">
                    <img src="https://cf.shopee.vn/file/e903ad0c5a357af61d1a9a0543c56a64" width="100%" height="300">
                </a>
            </div>
        </div> -->
        <h2 class="text-center text-danger text-uppercase dam">Tất cả sản phẩm</h2>

        <div class="row" style="margin-top: 20px;">
            <div class="col-md-9">
                <div class="tab-title">
                    <h2 class="h2-title">
                        <i class="fa fa-star text-center" aria-hidden="true"
                            style="margin-top:-2px; color: #834453; font-size: 30px; margin-left:-4px"></i>
                    </h2>
                    <h1 class="title-product">Tất cả mẫu sản phẩm nội thất các phòng cho các gia đình lựa chọn</h1>
                </div>

                <!-- sản phẩm -->
                <div class="san-pham">
                    <!-- Vung du lieu -->
                    <?php
                    foreach ($allProductList as $product) { ?>
                    <div class="column">
                        <div class="item-column hoverimage">
                            <img class="image" src="<?php echo $product->image; ?>" / width="85%" height="150px">
                            <div class="ten-item-column">
                                <a
                                    href="<?php echo url_pattern('homeController', 'single', $product->id); ?>"><?php echo $product->name; ?></a>
                            </div>
                            <p class="gia"><?php echo str_replace(',', '.', number_format($product->price)); ?>đ</p>
                            <a class="btn btn-default" href="order.php?id=<?php echo $product->id; ?>">Đặt hàng</a>
                        </div>
                    </div>
                    <?php    } ?>
                </div>
            </div><!-- end col-md-9 -->

            <div class="col-md-3">
                <div class="row">
                    <div class="tab-title">
                        <h2 class="h2-title">
                            <i class="fa fa-star text-center" aria-hidden="true"
                                style="margin-top:-2px; color: #834453; font-size: 30px; margin-left:-4px"></i>
                        </h2>
                        <h1 class="title-product">Giá</h1>
                    </div>
                    <form>
                        <div class="row align-items-center nho">
                            <input type="checkbox">200.000
                        </div><br>
                        <div class="row align-items-center nho">
                            <input type="checkbox">Từ 200.000 -> 500.000
                        </div><br>
                        <div class="row align-items-center nho">
                            <input type="checkbox">Từ 500.000 -> 1.000.000
                        </div><br>
                        <div class="row align-items-center nho">
                            <input type="checkbox">Từ 1.000.000 -> 2.000.000
                        </div><br>
                        <div class="row align-items-center nho">
                            <input type="checkbox">Từ 2.000.000 -> 3.000.000
                        </div><br>
                        <div class="row align-items-center nho">
                            <input type="checkbox">Từ 3.000.000 -> 4.000.000
                        </div><br>
                        <div class="row align-items-center nho">
                            <input type="checkbox">Từ 4.000.000 -> 5.000.000
                        </div><br>
                        <div class="row align-items-center nho">
                            <input type="checkbox">Từ 5.000.000 -> 10.000.000
                        </div><br>
                        <div class="row align-items-center nho">
                            <input type="checkbox">Trên 10.000.000
                        </div>
                    </form>
                </div>

                <div class="row" style="margin-top: 30px">
                    <div class="tab-title">
                        <h2 class="h2-title">
                            <i class="fa fa-star text-center" aria-hidden="true"
                                style="margin-top:-2px; color: #834453; font-size: 30px; margin-left:-4px"></i>
                        </h2>
                        <h1 class="title-product">Hãng</h1>
                    </div>

                    <form>
                        <div class="row align-items-center nho">
                            <input type="checkbox">AARON
                        </div><br>
                        <div class="row align-items-center nho">
                            <input type="checkbox">ROW
                        </div><br>
                        <div class="row align-items-center nho">
                            <input type="checkbox">ASHLEY
                        </div><br>
                        <div class="row align-items-center nho">
                            <input type="checkbox">DUNELM GROUP
                        </div>
                    </form>
                </div>

                <div class="row" style="margin-top: 30px;">
                    <div class="tab-title">
                        <h2 class="h2-title">
                            <i class="fa fa-star text-center" aria-hidden="true"
                                style="margin-top:-2px; color: #834453; font-size: 30px; margin-left:-4px"></i>
                        </h2>
                        <h1 class="title-product">Video giới thiệu</h1>
                    </div>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/FQz5GAEeoXo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--end container-->

    <!-- footer -->
    <?php include_once './View/inc/footer.php' ?>
    <!-- end footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>