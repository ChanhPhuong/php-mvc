<header id="header">
		<div class="container-fluid offset-md-2 col-md-9">
			<div id="header-wrap">
				<div id="logo">
					<a href="#">
						<img src="./Public/images/logo.jpg" alt="">
					</a>
				</div>
				<div id="main-menu-container">
					<ul id="main-menu">
						<li id="item-menu">
							<a href="<?php echo url_pattern('homeController', 'home'); ?>" style="text-decoration: none">Trang chủ</a>
						</li>
						<li id="item-menu">
							<a href="<?php echo url_pattern('homeController', 'products'); ?>" style="text-decoration: none">Sản Phẩm</a>
						</li>
						<li id="item-menu">
							<a href="<?php echo url_pattern('homeController', 'news'); ?>" style="text-decoration: none">Tin tức</a>
						</li>
						<li id="item-menu">
							<a href="<?php echo url_pattern('homeController', 'introduce'); ?>" style="text-decoration: none">Giới Thiệu </a>
						</li>
						<li id="item-menu">
							<a href="<?php echo url_pattern('homeController', 'contact'); ?>" style="text-decoration: none">Liên hệ</a>
						</li>
						<li id="item-menu">
							<a href="<?php echo url_pattern('authController', 'login')?>" style="text-decoration: none">Đăng nhập</a>
						</li>
						<li id="item-menu">
							<a href="<?php echo url_pattern('authController', 'registration')?>" style="text-decoration: none">Đăng ký</a>
						</li>
					</ul>
				</div>
				<!--<div class="btn-user">
					<div class="btn-cart1" onclick="show()">
						<img id="icons-cart" src="images/cart.png" alt="">
					</div>

					<a href="dangnhap.html"><i class="fa fa-user" id="icon_user" style="color: black;"></i></a>
					<div id="user" class="">
						<a href="dangky.html" id="btn-dangkymoi">Đăng ký</a>
						<a href="dangnhap.html" onclick="login();">Đăng nhập</a>
					</div>
				</div>

				<div class="column-cart" id="displayBlock">
					<div class="cart-total">
						<strong class="cart-total-title">Tổng Tiền: </strong>
						<span class="cart-total-price">0đ</span>
					</div>
				</div>-->
			</div>
		</div>
	</header>