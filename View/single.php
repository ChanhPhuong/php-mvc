<!DOCTYPE html>
<html>

<head>
    <title>Xem chi tiết</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="./Public/css/chitiet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="./Public/css/styles.css">
    <link rel="stylesheet" href="./Public/css/single.css">
</head>

<body onload="autoloading()">
    <!-- Section header -->
    <?php include_once './View/inc/header.php'; ?>
    <!-- end header -->

    <hr>
    <div class="container-fluid">
        <div class="row" style="margin-top: 10px;">
            <div class="col-md-3">
                <img id="h1" src="<?php echo $product->image; ?>" width="450px" height="500px">
            </div>

            <div class="col-md-4 offset-md-1">
                <div class="row" style="border-bottom: 1px solid #ddd; border-top: 1px solid #ddd;">
                    <span class="special-price">
                        <h2><?php echo str_replace(',', '.', number_format($product->price)); ?> đ
                            <del class="price product-price-old"
                                style="margin-left: 15px; color: #ADADAD; font-size: 0.65cm;">3.000.000đ</del>
                            <span class="discount" style="font-size: 0.5cm; margin-left: 15px;">(-30%)</span>
                        </h2>
                    </span>
                </div>

                <div class="row" style="margin-top: 10px;">
                    <div class="col-md-6 offset-md-3">
                        <h5><strong>Tình trạng:</strong> Còn hàng</h5>
                        <h5><strong>Mã sản phẩm:</strong> BT-H4</h5>
                        <h5><strong>Hãng sản xuất:</strong> Mew Furniture</h5>
                        <h5><strong>Loại:</strong> Bàn trà</h5>
                    </div>
                </div>

                <div class="row" style="margin-top: 30px">
                    <div class="col-md-5">
                        <form>
                            <tr>
                                <td>
                                    <label for="major"><b>
                                            <h4> Kích thước: </h4>
                                        </b></label>
                                </td><br>

                                <td>
                                    <select style="padding: 10px 120px 18px 12px">
                                        <option value="M">Ngắn</option>
                                        <option value="L">Dài</option>
                                    </select>
                                </td>
                            </tr>
                        </form>
                    </div>
                    <div class="col-md-5" style="margin-left: 30px;">
                        <form>
                            <tr>
                                <td>
                                    <label for="major"><b>
                                            <h4> Màu sắc: </h4>
                                        </b></label>
                                </td><br>
                                <td>
                                    <select style="padding: 10px 120px 18px 12px">
                                        <option value="hoavan">Có hình</option>
                                        <option value="trang">Trắng xanh</option>
                                        <option value="den">Vàng</option>
                                        <option value="chamden">Hồng</option>
                                    </select>
                                </td>
                            </tr>
                        </form>
                    </div>
                </div>

                <div class="row" style="margin-top: 20px">
                    <div class="col-md-6 offset-md-3">
                        <form>
                            <tr>
                                <td><label for="major"><b>
                                            <h4> Số lượng: </h4>
                                        </b></label></td><br>
                                <td>
                                    <select style="padding: 10px 150px 18px 12px">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="4">5</option>
                                        <option value="4">6</option>
                                        <option value="4">7</option>
                                        <option value="4">8</option>
                                        <option value="4">9</option>
                                    </select>
                                </td>
                            </tr>
                        </form>
                    </div>
                </div>

                <div class="row" style="margin-top: 30px">
                    <div class="col-md-4">
                        <img onclick="a1()"
                            src="https://cdn01.dienmaycholon.vn/filewebdmclnew/public//userupload/images/goi%20tua%20lung%20dep.jpg"
                            width="150px" height="150px">
                    </div>
                    <div class="col-md-4">
                        <img onclick="a2()"
                            src="https://salt.tikicdn.com/ts/product/17/23/7b/5ecdcd5c0fdc482d146cdfebc25f3ed3.jpg"
                            width="150px" height="150px">
                    </div>
                    <div class="col-md-4">
                        <img onclick="a3()"
                            src="https://thamtraisanlacviet.com/wp-content/uploads/2018/11/goi-tua-lung-ghe-sofa-008-copy.jpg"
                            width="150px" height="150px">
                    </div>
                </div>
            </div>

            <div class="col-md-3 offset-md-1">
                <div class="row" style="border-bottom: 1px solid #ddd; border-top: 1px solid #ddd;">
                    <h2>Nội thất 2021</h2>
                </div>
                <div class="row gach" style="border-bottom: 2px solid #666; margin-top: 20px; padding-bottom: 10px;">
                    <div class="col-md-4">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/368/970/articles/7-650x339.jpg?v=1574742097003"
                            width="100px" height="70px">
                    </div>
                    <div class="col-md-8">
                        <a href="#saledam"><strong class="text-uppercase">Nội thất biệt thự mang phong cách xe sang
                                LEXUS</strong><br>
                            <i class="far fa-calendar-alt" style="margin-right: 10px"></i>08/07/2021</a>
                    </div>
                </div>
                <div class="row gach" style="border-bottom: 2px solid #666; margin-top: 10px; padding-bottom: 10px;">
                    <div class="col-md-4">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/368/970/articles/6-650x339.jpg?v=1574742415567"
                            width="100px" height="70px">
                    </div>
                    <div class="col-md-8">
                        <a href="#phongcach"><strong class="text-uppercase">Thiết kế phòng bếp hiện đại
                                2020</strong><br>
                            <i class="far fa-calendar-alt" style="margin-right: 10px"></i>08/07/2021</a>
                    </div>
                </div>
                <div class="row gach" style="border-bottom: 2px solid #666; margin-top: 10px">
                    <div class="col-md-4">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/368/970/articles/noi-that-phong-khach-nhap-khau-dep4-650x339.jpg?v=1574742714653"
                            width="100px" height="70px">
                    </div>
                    <div class="col-md-8">
                        <a href="#maudam"><strong class="text-uppercase">Nội thất phòng khách nhập khẩu được ưa chuộng
                                trong 2021</strong><br>
                            <i class="far fa-calendar-alt" style="margin-right: 10px"></i>08/07/2021</a>
                    </div>
                </div>
                <div class="row gach" style="border-bottom: 2px solid #666; margin-top: 10px; padding-bottom: 10px;">
                    <div class="col-md-4">
                        <img src="https://bizweb.dktcdn.net/thumb/large/100/368/970/articles/picture7-650x339.png?v=1574743108017"
                            width="100px" height="70px">
                    </div>
                    <div class="col-md-8">
                        <a href="#maudam"><strong class="text-uppercase">Thiết kế phòng khách tinh tế và sang
                                trọng</strong><br>
                            <i class="far fa-calendar-alt" style="margin-right: 10px"></i>08/07/2021</a>
                    </div>
                </div>
                <div class="row gach" style="border-bottom: 2px solid #666; margin-top: 10px; padding-bottom: 10px;">
                    <div class="col-md-4">
                        <img src="https://noithatngahung.com/wp-content/uploads/2021/04/4-19-1349x900.jpg" width="100px"
                            height="70px">
                    </div>
                    <div class="col-md-8">
                        <a href="#maudam"><strong class="text-uppercase">Thiết kế phòng ngủ mang phong cách sang
                                trọng</strong><br>
                            <i class="far fa-calendar-alt" style="margin-right: 10px"></i>08/07/2021</a>
                    </div>
                </div>
            </div>
        </div><!-- end row -->

    
        <div class="product">
            <div class="col-md-12" style="margin-top: 30px;">
                <div class="row">
                    <ul id="product-detail" class="nav nav-tabs product-tabs">
                        <li>
                            <a href="#product_tabs_description" data-toggle="tab" class="active" style="margin-left: 590px;">Thông tin chi tiết</a>
                        </li>
                        <li>
                            <a href="#product_tabs_custom" data-toggle="tab">Thông tin khác</a>
                        </li>
                    </ul>
                </div>
                <div id="productTabContent" class="tab-content" style="margin-top: 20px">
                    <div class="tab-pane fade in active show" id="product_tabs_description">
                        <div class="std justify add_apper">
                            <div class="row">
                                <div class="col-md-5 offset-md-1">
                                    <ul>
                                        <li>
                                            <strong>- Mã sản phẩm: BT-H4</strong>
                                        </li>
                                        <li>
                                            <strong>- Hướng dẫn sử dụng: </strong> dùng làm gối tựa lưng, gối nằm.
                                        </li>
                                        <li>
                                            <strong>- Chất liệu: </strong> làm bằng vải.
                                        </li>
                                        <li>
                                            <strong>- Kích thước: </strong> dài, ngắn, nhỏ, lớn.
                                        </li>
                                        <li>
                                            <strong>- Màu sắc: </strong> trắng xanh, vàng, hồng, có hình.
                                        </li>
                                        <li>
                                            <strong>- Bảo hành: </strong> trong vòng 12 tháng.
                                        </li>
                                        <li>
                                            <strong>- Thời gian giao hàng: </strong> trong vòng 7 ngày.
                                        </li>
                                    </ul>
                                </div> 
                                <div class="col-md-5">
                                    <ul>
                                        <li>
                                            <strong>- Công dụng : </strong> Mang lại cảm giác thoải mái, tạo điểm nhấn cho sofa, mang đến nhiều lợi ích về phong thủy.
                                        </li>
                                        <li>
                                            <strong>- Cách chọn gối: </strong> Chọn gối tựa sofa theo phong cách nội thất, lựa chọn chất liệu phù hợp, chọn theo màu sắc.
                                        </li>
                                        <li>
                                            <strong>- Cấu tạo gối: </strong> Chúng gồm 2 phần: vỏ gối và lõi gối.
                                        </li>
                                    </ul>
                                </div>      
                            </div>    
                        </div>
                    </div>

                    <div class="tab-pane fade" id="product_tabs_custom">
                        <div class="product-tabs-content-inner clearfix">
                            <div class="row">
                                <div class="col-md-5 offset-md-1">
                                    <ul>
                                        <li>
                                            <p><strong>- Ưu điểm :</strong></p>
                                            <p>    + Hỗ trợ về mặt sức khỏe của người dùng </p>
                                            <p>    + Tăng tính thẩm mỹ cho sofa </p>
                                            <p>    + Thay đổi không gian sống nhanh và hiệu quả, ít tốn kém </p>
                                            <p>    + Tác dụng phong thủy tốt, mang đến tài vận cho gia chủ </p>
                                            <p>    + Sử dụng gối với nhiều mục đích khác nhau </p>
                                            <p>    + Giúp không gian trở nên ấm áp </p>
                                            <p>    + Mang đến nguồn năng lượng tích cực </p>

                                        </li>
                                    </ul>
                                </div> 
                                <div class="col-md-5">
                                    <ul>
                                        <li>
                                            <p><strong>- Lựa chọn gối tựa lưng cho từng phong cách khác nhau : </strong> </p>
                                            <p>    + Phong cách nhẹ nhàng, thiên nhiên hóa </p>
                                            <p>    + Gối tựa lưng họa tiết sinh động </p>
                                            <p>    + Gối tựa lưng truyền thống  </p>
                                            <p>    + Gối tựa lưng theo phong cách hiện đại  </p>
                                            <p>    + Gối tựa lưng chiết trung </p>

                                        </li>
                                    </ul>
                                </div>      
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end product -->

        <div class="bang-n" style="margin-top: 30px;">
                <div class="ten-bang ha text-center">
                    <h4 style="border-bottom: 3px rgb(212, 109, 12) solid;"><a>SẢN PHẨM CÙNG LOẠI</a></h4>
                </div>

                <!-- sản phẩm -->
                <div class="san-pham">
                    <!-- Vung du lieu -->
                    <?php
                    foreach ($goiTuaLungList as $product) { ?>
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
                <!-- end sp -->
            </div>
    </div><!-- end container -->
    <div class="clear"></div>
    <div class="container-fluid text-center anhnen" style="margin-top: 30px">
        <h2 class="text-danger ykien">Ý kiến của khách hàng</h2>
        <div class="row text-center" style="margin-top: 20px;">
            <div class="col-md-4">
                <img class="rounded-circle"
                    src="https://file.hstatic.net/1000388594/file/2-ao-so-mi-nu-co-tru-tay-bong-zavans-trang_b2ce6d13eb7446f6bae96ede39f0ede1.jpg"
                    style="width: 200px; height: 200px">
                <p class="chitiet">Chất vải của gối tựa lưng phù hợp, mềm, sang trọng, nhiều màu sắc để chọn lựa.</p>
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
            <div class="col-md-4">
                <img class="rounded-circle"
                    src="https://product.hstatic.net/1000311467/product/sm40-4_2267d5fda5994bbab5714824ca80d2d6_master.jpg"
                    style="width: 200px; height: 200px">
                <p class="chitiet">Có nhiều kiểu gối phù hợp với sofa hiện đang có ở nhà của tôi, làm cho bộ sofa không còn trống trãi.</p>
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
            <div class="col-md-4">
                <img class="rounded-circle"
                    src="https://file.hstatic.net/1000388594/file/ao-nu-cong-so-co-vest-mau-nude_96420c1f113a47229d9f7c19d1ebb816.jpg"
                    style="width: 200px; height: 200px">
                <p class="chitiet">Có chiếc gối tựa lưng này giúp cho sofa trong phòng khách trở nên sang trọng, tiện ích.</p>
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
            </div>
        </div>
    </div>

    <div class="clear"></div>

    <!-- footer -->
    <?php include_once './View/inc/footer.php' ?>
    <!-- end footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
<script type="text/javascript">
function a1() {
    document.getElementById("h1").src =
        "https://cdn01.dienmaycholon.vn/filewebdmclnew/public//userupload/images/goi%20tua%20lung%20dep.jpg"
}

function a2() {
    document.getElementById("h1").src =
        "https://salt.tikicdn.com/ts/product/17/23/7b/5ecdcd5c0fdc482d146cdfebc25f3ed3.jpg"
}

function a3() {
    document.getElementById("h1").src =
        "https://thamtraisanlacviet.com/wp-content/uploads/2018/11/goi-tua-lung-ghe-sofa-008-copy.jpg"
}
</script>

</html>