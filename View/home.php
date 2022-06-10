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
    <link rel="shortcut icon" href="./Public/images/logo.jpg" />
    <link rel="stylesheet" href="./Public/css/styles.css">
    <link rel="stylesheet" href="./Public/css/do.anbootstrap1.css">
    <link rel="stylesheet" href="./Public/css/login_registration.css">
    <title>Trang chủ</title>
</head>

<body onload="autoloading()">
    <!-- Section header -->
    <?php include_once './View/inc/header.php'; ?>
    <!-- end header -->

    <script src="JS/load.js"></script>
    <div class="anh-nen">
        <img src="./Public/images/menu1.jpg" id="anh-nen-a" alt="">
        <div class="tieu-de-anh-nen">
        </div>
    </div>

    <div class="clear"></div>

    <!-- phần sp -->
    <div class="container-fluid">
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-4">
                <div class="khoi">
                    <a href="phongkhach.html" class="gallery">
                        <div class="text">
                            <strong class="chu1">Phòng khách</strong>
                            <span>
                                <p class="text-center">Xem sản phẩm</p>
                            </span>
                        </div>
                        <img src="https://sbshouse.vn/wp-content/uploads/2022/01/M%E1%BA%ABu-nh%C3%A0-2-t%E1%BA%A7ng-%C4%91%E1%BA%B9p-6.jpg"
                            alt="" width="100%" height="300">
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="khoi">
                    <a href="phongngu.html" class="gallery">
                        <div class="text">
                            <strong class="chu1">Phòng ngủ</strong>
                            <p class="text-center">Xem sản phẩm</p>
                        </div>
                        <img src="https://adarchitect.com.vn/wp-content/uploads/2021/09/thi%E1%BA%BFt-k%E1%BA%BF-ph%C3%B2ng-ng%E1%BB%A7-3x4-10.jpg"
                            alt="" width="100%" height="300">
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="khoi">
                    <a href="phongbep.html" class="gallery">
                        <div class="text">
                            <strong class="chu1">Phòng bếp</strong>
                            <p class="text-center">Xem sản phẩm</p>
                        </div>
                        <img src="https://noithattli.vn/uploads/tiny_uploads/thiet-ke-noi-that-phong-bep-nha-ong9-scaled.jpg"
                            alt="" width="100%" height="300">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <P></P>
    <div class="clear"></div>

    <div class="phan2" id="phan-menu" style="margin-top: 30px;">
        <div class="bao-bang">
            <div class="bang-n">
                <div class="ten-bang ha text-center">
                    <h1 style="border-bottom: 3px rgb(212, 109, 12) solid;"><a>SẢN PHẨM NỔI BẬT</a></h1>
                </div>

                <!-- sản phẩm -->
                <div class="san-pham">
                    <!-- Vung du lieu -->
                    <?php
                    foreach ($hotProductList as $product) { ?>
                    <div class="column">
                        <div class="item-column hoverimage">
                            <img class="image" src="<?php echo $product->image; ?>" / width="85%" height="150px">
                            <div class="ten-item-column">
                                <a
                                    href="<?php echo url_pattern('homeController', 'single', $product->id); ?>"><?php echo $product->name; ?></a>
                            </div>
                            <p class="gia"><?php echo str_replace(',', '.', number_format($product->price)); ?>đ</p>
                            <a class="btn btn-default" href="<?php echo url_pattern('homeController', 'cart', $product->id); ?>">Đặt hàng</a>
                        </div>
                    </div>
                    <?php    } ?>
                </div>
                <!-- end sp -->
            </div>

            <div class="clear"></div>
            <div class="ten-bang ha clear" style="margin-top: 20px;">
                <h1 id="phong-khach" style="border-bottom: 3px rgb(212, 109, 12) solid;">
                    Phòng Khách
                </h1>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-md-3">
                    <div class="khoi">
                        <ul class="menu_phongkhach">
                            <li>
                                <a style="font-size: 17px;">Ghế Sofa Bộ</a>
                            </li>
                            <li>
                                <a style="font-size: 17px;">Ghế Sofa Đơn</a>
                            </li>
                            <li>
                                <a style="font-size: 17px;">Bàn Trà</a>
                            </li>
                            <li>
                                <a style="font-size: 17px;">Kệ Tivi</a>
                            </li>
                            <li>
                                <a style="font-size: 17px;">Ghế Gỗ cao cấp</a>
                            </li>
                            <li>
                                <a style="font-size: 17px;">Gối tự lưng</a>
                            </li>
                            <li>
                                <a style="font-size: 17px;">Thảm Trang trí</a>
                            </li>
                        </ul>
                        <div class="hoverimage" style="padding-top: 8;">
                            <img src="https://bizweb.dktcdn.net/100/368/970/themes/740033/assets/bn_cate.png?1652847056103"
                                alt="" width="100%" height="250">
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="khoi">
                        <!-- Vung du lieu -->
                        <?php
                        foreach ($productKhachList as $product) { ?>
                        <div class="column">
                            <div class="item-column hoverimage">
                                <img class="image" src="<?php echo $product->image; ?>" / width="85%" height="150px">
                                <div class="ten-item-column">
                                    <a
                                        href="<?php echo url_pattern('homeController', 'single', $product->id); ?>"><?php echo $product->name; ?></a>
                                </div>
                                <p class="gia"><?php echo str_replace(",", ".", number_format($product->price)); ?>đ</p>
                                <a class="btn btn-default" href="<?php echo url_pattern('homeController', 'cart', $product->id); ?>">Đặt hàng</a>
                            </div>
                        </div>
                        <?php    } ?>
                    </div>
                </div>
            </div><!-- end row -->

            <div class="clear"></div>
            <div class="ten-bang t clear" style="margin-top: 20px;">
                <h1 id="phong-ngu" style="border-bottom: 3px rgb(212, 109, 12) solid;">
                    Phòng Ngủ
                </h1>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-md-3">
                    <div class="khoi">
                        <ul class="menu_phongkhach">
                            <li>
                                <a style="font-size: 17px;">Giường ngủ hiện đại</a>
                            </li>
                            <li>
                                <a style="font-size: 17px;">Tủ đầu giường</a>
                            </li>
                            <li>
                                <a style="font-size: 17px;">Đèn ngủ</a>
                            </li>
                            <li>
                                <a style="font-size: 17px;">Phụ kiện trang trí</a>
                            </li>
                            <li>
                                <a style="font-size: 17px;">Đệm ngủ sang trọng</a>
                            </li>
                            <li>
                                <a style="font-size: 17px;">Chăn, ga, gối, bộ</a>
                            </li>
                            <li>
                                <a style="font-size: 17px;">Tủ quần áo</a>
                            </li>
                        </ul>
                        <div class="hoverimage" style="padding-top: 8;">
                            <img src="https://bizweb.dktcdn.net/100/368/970/themes/740033/assets/bn_cate2.png?1652847056103"
                                alt="" width="100%" height="250">
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="khoi">
                        <!-- Vung du lieu -->
                        <?php
                        foreach ($productNguList as $product) { ?>
                        <div class="column">
                            <div class="item-column hoverimage">
                                <img class="image" src="<?php echo $product->image; ?>" / width="85%" height="150px">
                                <div class="ten-item-column">
                                    <a
                                        href="<?php echo url_pattern('homeController', 'single', $product->id); ?>"><?php echo $product->name; ?></a>
                                </div>
                                <p class="gia"><?php echo str_replace(",", ".", number_format($product->price)); ?>đ</p>
                                <a class="btn btn-default" href="<?php echo url_pattern('homeController', 'cart', $product->id); ?>">Đặt hàng</a>
                            </div>
                        </div>
                        <?php    } ?>
                    </div>
                </div>
            </div><!-- end row -->

            <div class="clear"></div>
            <div class="ten-bang t clear" style="margin-top: 20px;">
                <h1 id="phong-bep" style="border-bottom: 3px rgb(212, 109, 12) solid;">
                    Phòng Bếp
                </h1>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-md-3">
                    <div class="khoi">
                        <ul class="menu_phongkhach">
                            <li>
                                <a style="font-size: 17px;">Bàn ghế ăn </a>
                            </li>
                            <li>
                                <a style="font-size: 17px;">Tủ ghế gỗ</a>
                            </li>
                            <li>
                                <a style="font-size: 17px;">Chạm bát treo tường</a>
                            </li>
                            <li>
                                <a style="font-size: 17px;">Phụ kiện dùng bếp</a>
                            </li>
                            <li>
                                <a style="font-size: 17px;">Mặt bàn bếp</a>
                            </li>
                        </ul>
                        <div class="hoverimage" style="padding-top: 8;">
                            <img src="https://bizweb.dktcdn.net/100/368/970/themes/740033/assets/bn_cate3.png?1652847056103"
                                alt="" width="100%" height="250">
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="khoi">
                        <!-- Vung du lieu -->
                        <?php
                        foreach ($productBepList as $product) { ?>
                        <div class="column">
                            <div class="item-column hoverimage">
                                <img class="image" src="<?php echo $product->image; ?>" / width="85%" height="150px">
                                <div class="ten-item-column">
                                    <a
                                        href="<?php echo url_pattern('homeController', 'single', $product->id); ?>"><?php echo $product->name; ?></a>
                                </div>
                                <p class="gia"><?php echo str_replace(",", ".", number_format($product->price)); ?>đ</p>
                                <a class="btn btn-default" href="<?php echo url_pattern('homeController', 'cart', $product->id); ?>">Đặt hàng</a>
                            </div>
                        </div>
                        <?php    } ?>
                    </div>
                </div>
            </div><!-- end row -->
        </div>

    </div>



    <!-- tin tức - khuyến mãi -->
    <div class="clear"></div>
    <p>
        <hr style="color: coral;">
    </p>
    <div class="row" style="padding-top: 30;">
        <div class="col-md-6">
            <div class="khoi">
                <div class="new_title t">
                    <h2>
                        <a>Cẩm nang nhà đẹp</a>
                    </h2>
                </div>
                <div class="log" style="margin-top: 8px;">
                    <a href="">
                        <img src="https://bietthunhaphodep.com/wp-content/uploads/2022/04/nhung-mau-biet-thu-nha-vuon-dep-nhat-370x270.jpg"
                            alt="" width="100%" height="400px">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="khoi">
                <div class="new_title t">
                    <h2>
                        <a>Hãy cùng trãi nghiệm</a>
                    </h2>
                </div>
                <iframe width="740" height="400" src="https://www.youtube.com/embed/1IlGL2bqEhY"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen style="margin-top: 8px;"></iframe>
            </div>
        </div>
    </div>

    <!-- tin tức - khuyến mãi -->
    <div class="container-fluid">
        <div class="tin-tuc">
            <div class="ten-bang t clear" style="margin-top: 20px;">
                <h1 style="border-bottom: 3px rgb(212, 109, 12) solid;">
                    Kiến thức phong thuỷ
                </h1>
            </div>
            <div class="column-tintuc">
                <div class="item-column-tintuc">
                    <img class="image"
                        src="https://bizweb.dktcdn.net/thumb/large/100/368/970/articles/7-650x339.jpg?v=1574742097003" />
                    <div class="ten-item-column">
                        <a href="#" style="text-decoration: none">Nội thất biệt thự mang phong cách xe sang LEXUS
                    </div></a>
                    <p>Vinhomes Impera Hải Phòng – Nội thất biệt thự sang trọng và ấn tượng mang phong cách xe sang
                        Lexus nhờ ứng dụng công nghệ sơn High-gloss và...</p>
                </div>
            </div>

            <div class="column-tintuc">
                <div class="item-column-tintuc">
                    <img class="image"
                        src="https://bizweb.dktcdn.net/thumb/large/100/368/970/articles/noi-that-phong-khach-nhap-khau-dep4-650x339.jpg?v=1574742714653" />
                    <div class="ten-item-column">
                        <a href="#" style="text-decoration: none">Nội thất phòng khách nhập khẩu được ưa chuộng trong
                            2022
                    </div></a>
                    <p>Nếu ví ngôi nhà là một cá thể nhất định thì không gian phòng khách chính là vẻ bề ngoài còn nội
                        thất của phòng khách thể hiện phần...</p>

                </div>
            </div>

            <div class="column-tintuc">
                <div class="item-column-tintuc">
                    <img class="image"
                        src="https://bizweb.dktcdn.net/thumb/large/100/368/970/articles/tin-tuc-650x339.jpg?v=1574743375003" />
                    <div class="ten-item-column">
                        <a href="#" style="text-decoration: none">Phòng thay đồ (Closet) trong nhà – Không gian sống nên
                            có của phụ nữ hiện đại
                    </div></a>
                    <p>“Phụ nữ hiện đại, ra đường phải ăn mặc như công chúa và sống như một nữ thần, là bà hoàng của
                        cuộc đời mình, kiêu hãnh và...</p>

                </div>
            </div>

            <div class="column-tintuc">
                <div class="item-column-tintuc">
                    <img class="image"
                        src="https://bizweb.dktcdn.net/thumb/large/100/368/970/articles/tan-trang-noi-that-phong-ngu-dep-650x339.jpg?v=1574743741250" />
                    <div class="ten-item-column">
                        <a href="#" style="text-decoration: none"> Tân trang phòng ngủ đẹp với nội thất cao cấp dịp cuối
                            năm
                    </div></a>
                    <p>Chỉ còn vài tháng nữa thôi là một năm nữa kết thúc, đây chính là lúc mọi người quan tâm đến nội
                        thất và mọi đồ vật xung quanh...</p>

                </div>
            </div>

            <div class="view-more">
                <a href="<?php echo url_pattern('homeController', 'news'); ?>" style="text-decoration: none">
                    <h1 class="sp text-center">XEM TẤT CẢ</h1>
                </a>
            </div>
        </div>
    </div>

    <!-- <div class="container">
        <div class="row text-center" style="margin-top: 20px;">
            <div class="col-md-3" style="margin-top: 20px;">
                <img class="chinhsua" src="https://png.pngtree.com/element_our/png_detail/20181228/delivery-truck-vector-icon-png_296956.jpg" width="100%" height="100px">
                <p class="chinhchu">Free ship 64 tỉnh</p>
                <p>Áp dụng cho hóa đơn trên 500k.</p>
            </div>
            <div class="col-md-3" style="margin-top: 20px;">
                <img class="chinhsua" src="https://glovi.vn/wp-content/uploads/2018/04/chuong-goi-khong-day-icon-1521165655.png" width="100%" height="100px">
                <p class="chinhchu">Đổi trả hàng miễn phí</p>
                <p>Trong vòng 1 tháng.</p>
            </div>
            <div class="col-md-3" style="margin-top: 20px;">
                <img class="chinhsua" src="http://bizweb.dktcdn.net/100/216/592/themes/707614/assets/icon-service-recieve-money.png?1621158435073" width="100%" height="100px">
                <p class="chinhchu">Thanh toán tại nhà</p>
                <p>Kiểm tra hàng trước khi thanh toán.</p>
            </div>
            <div class="col-md-3" style="margin-top: 20px;">
                <img class="chinhsua" src="https://thumbs.dreamstime.com/b/authentic-stamp-red-authentic-stamp-sign-icon-illustration-authentic-stamp-red-authentic-stamp-icon-161667497.jpg" width="100%" height="100px">
                <p class="chinhchu">Chất lượng Authentic</p>
                <p>Xài hàng hiệu không cần tiền triệu.</p>
            </div>
        </div>
    </div> -->
    <!--end container-->

    <div class="clear"></div>
    <div class="clear"></div>
    <!-- footer -->
    <?php include_once './View/inc/footer.php' ?>
    <!-- end footer -->
</body>

<script src="./Public/js/Cart.js"></script>

<script type="text/javascript">
var vimg = document.getElementById("anh-nen-a");
var t;
var i = 1;

function autoloading() {
    t = setInterval(function autoloading() {
        i++;
        if (i > 3) {
            i = 1;
        }
        vimg.src = "./Public/images/" + "menu" + i + ".jpg";
    }, 2000)
}
</script>
<script src="JS/login_registration.js"></script>

</html>