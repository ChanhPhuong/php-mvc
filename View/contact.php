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
    <link rel="stylesheet" href="./Public/css/contact.css">
    <link rel="stylesheet" href="./Public/css/styles.css">
    <title>Sản phẩm</title>
</head>

<body onload="autoloading()">
    <!-- Section header -->
    <?php include_once './View/inc/header.php'; ?>
    <!--End section header-->
    <hr>

    <div class="container-fluid" style="margin-top: 20px">
        <div class="row">
            <div class="col-md-7">
                <h3>Liên hệ</h3>
                <div class="row">
                    <div class="col-md-2">
                        <p class="ten">Họ và tên</p>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="" title="first name" class="input-text" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <p class="ten">Email</p>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="" title="email" class="input-text" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <p class="ten">Số điện thoại</p>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="" title="" class="input-text" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <p class="ten">Địa chỉ</p>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="" title="" class="input-text" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <p class="ten">Nội dung</p>
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="" title="" class="input-text1" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-10">
                        <button class="btn-cart">Gửi liên hệ</button>
                    </div>
                </div>
            </div>

            <div class="col-md-5" style="margin-top: 50px">
                <h3 style="color: black;">
                    <p>HN22 Việt Nam sẽ mang lại cho khách hàng những trải nghiệm mua sắm thời trang hàng hiệu trực
                        tuyến
                        thú vị.</p>
                    <i class="fas fa-map-marker-alt" style="margin-right: 10px"></i> 174 Trần Phú, TT.Huế. <br><br>
                    <i class="fas fa-phone" style="margin-right: 10px"></i> 0768495661.<br><br>
                    <i class="far fa-envelope" style="margin-right: 10px"></i> hangianiok02@gmail.com
                    <img src="./Public/images/logo.jpg" width="100%" height="215" style="margin-top: 10px;">
                </h3>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="margin-top: 30px">
        <div class="row">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3826.4898345425954!2d107.58543861431143!3d16.450716533472036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a145e13320c1%3A0xcc02a0810792cc1c!2zVHLhuqduIFBow7osIFRwLiBIdeG6vywgVGjhu6thIFRoacOqbiBIdeG6vywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1622355801942!5m2!1svi!2s"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

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