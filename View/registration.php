<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link rel="stylesheet" type="text/css" href="./public/css/main.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Nhúng file CSS -->
    <link rel="stylesheet" href="./Public/css/login.css">

</head>

<body onload="autoloading()">

    <!-- Nhúng file JavaScript -->

    <div class="container-fluid">
        <div class="row" style="background-image: url(https://hinhnen123.com/wp-content/uploads/2021/10/Tong-hop-88-hinh-nen-xanh-duong-cute-dep-tuyet-voi-3.jpg); height: 750px">>
            <div class="form-container sign-up-container">
                <form action="index.php" method="POST">

                    <input type="hidden" name="controller" value="authController">
                    <input type="hidden" name="page" value="register">
                    <h1>ĐĂNG KÝ</h1>
                    <?php if(isset($_SESSION['errors'])) { ?>
                    <h5 style="color: red;"><?php echo $_SESSION['errors']; unset($_SESSION['errors']); ?></h5>
                    <?php } ?>
                    <div class="social-container">
                        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <span>Điền các thông tin để đăng ký</span>
                    <input type="text" placeholder="Số điện thoại" name="phone" id="phone">
                    <input type="text" placeholder="Tên đầy đủ" name="full_name" id="full_name">
                    <input type="password" placeholder="Nhập mật khẩu" name="password" id="password">
                    <input type="password" placeholder="Nhập lại mật khẩu" name="password-repeat" id="password-repeat">
                    <input type="text" placeholder="Địa chỉ" name="address" id="address">
                    <button type="submit" class="submit">Đăng ký</button>

                </form>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./Public/js/logout.js"></script>
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

</html>