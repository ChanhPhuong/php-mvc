<?php require_once './Model/ProductModel.php'; ?>
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
</head>
<body onload="autoloadimg ()">
<?php include_once './View/inc/header.php'?>
<hr>
    <div class="container-fluid">
        <div class="row mt-5">
        
            <div class="offset-1 col-md-8">
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng</th>
                             
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total_all = 0;?>
                        <?php if(count($productList) > 0 ) foreach ($productList as $product) { ?>
                        
                        <tr>
                            <td class="remove"><a class="btn btn-outline-red " href="<?php echo url_pattern('homeController', 'cartDelete', $product['productId']); ?>" role="button"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                            <td>
                                <img style="width: 50px; height: 50px;" src="<?php echo $product['image']; ?>" alt="">
                            </td>
                            <td><?php echo $product['name']; ?></td>
                            <td><?php echo number_format($product['price']); ?></td>
                            <td><?php echo $product['quantity']; ?></td>
                            <td><?php echo calc_product_price($product); ?></td>
                        </tr>
                        
                        <?php   
                        $total_all += $product['price']*$product['quantity'];
                        } ?>
                        <tr>  
                            <th>Tổng</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th> <?= number_format($total_all) ?></th>
                            
                        </tr>
                       
                    </tbody>
                    
                </table>
                
               
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-outline-success " style="margin-top:20px"><i class="fa fa-arrow-left" aria-hidden="true" ></i> <a href="<?php echo url_pattern('homeController', 'home'); ?>" style="text-decoration: none; color:black"> TIẾP TỤC XEM SẢN PHẨM</a></button>
                <button type="button"class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top:30px; color:black; padding-top: 5px"><i class="fa fa-credit-card" aria-hidden="true"></i> TIẾN HÀNH THANH TOÁN</button>
            </div>
            <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">HÓA ĐƠN</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formPay" method="POST" action="<?php echo url_pattern('homeController', 'payProcess'); ?>">
                            <input type="hidden" name="controller" value="homeController">
                            <input type="hidden" name="page" value="payProcess">
                            <label for="inputPassword5" class="form-label">Họ và tên</label>
                            <input type="text" class="form-control" placeholder="Họ và tên" value="<?php echo $infoUser['full_name']; ?>" name="name">
                            <label for="inputPassword5" class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" placeholder="Số điện thoại" value="<?php echo $user['phone']; ?>" name="phone">
                            <label for="inputPassword5" class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control" placeholder="Địa chỉ" value="<?php echo $infoUser['address']; ?>" name="address">
                            <label for="exampleFormControlTextarea1" class="form-label">Ghi chú về đơn hàng</label>
                            <textarea name="note" class="form-control" placeholder="Ghi chú đơn hàng, ví dụ: thời gian giao hay địa điểm giao chi tiết" rows="3"></textarea>
                        </form>
                       
                    </div>
                    <div class="modal-footer">
                        <button type="submit" form="formPay" class="btn btn-success" style="color: black;">THANH TOÁN</button>
                    </div>
                    </div>
                </div>
                </div>
        </div>
    </div>
    <hr>
    <?php include_once './View/inc/footer.php'?>
    <!--end footer-->
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>     -->
   
</html>