<body>
    <div id="main">
        <header>
            <div class="header">
                <div class="header__nav">
                    <nav class="content">
                        <div class="content--left">
                            <p class="header--download">
                                Tải ứng dụng
                                <img src="public/layout/images/header/QR-shopee.png" alt="" class="img--qr">
                            </p>
                            <p class="header--connect">Kết nối <i class="ti-facebook"></i> <i class="ti-instagram"></i>
                            </p>
                        </div>
                        <div class="content--right">
                            <div class="box__content--right">
                                <p class="header--notification">
                                    <i class="ti-bell"></i> Thông báo
                                </p>
                                
                                <?php if(!isset($_SESSION['user'])){ ?>

                                    <p class="header--register"><a href="index.php?ctr=register">Đăng Ký</a></p>
                                <p class="header--login"><a href="index.php?ctr=login">Đăng Nhập</a></p>

                                <?php }else { ?>

                                    <div class="seccion__main">
                                    <div class="seccion__img">
                                        <img src="public/layout/images/avatar/<?= $_SESSION['user']['hinh']?>" width="25px" height="25px" alt="">
                                    </div>
                                    <div class="seccion__username">
                                            <span><?= $_SESSION['user']['ho_ten']?></span>
                                            <div class="seccion__hover">
                                                <ul>
                                                    <li><a href="">Tài Khoản của tôi</a></li>
                                                    <li><a href="?ctr=logout">Đăng Xuất</a></li>
                                                    <?php if($_SESSION['user']['vai_tro'] == 'admin'):?>
                                                        <li><a href="admin/index.php">Quản Trị</a></li>
                                                    <?php endif?>
                                                </ul>
                                            </div>
                                    </div>
                                </div>
                                
                               <?php } ?>
                            </div>
                        </div>
                    </nav>
                </div>

                <div class="header-logo-search">
                    <div class="header--logo">
                        <a href="index.php"><img src="public/layout/images/banner_logo/cu_dem.png" alt=""></a>
                    </div>
                    <div class="header--search">
                        <form action="" method="POST" class="header__search--form">
                            <input type="text" name="value_from_search_product" class="header__search--input">
                            <button class="header__search--btn" name="btn_search_product" type="submit"><i class="ti-search"></i></button>
                        </form>
                    </div>
                    <div class="header--shopping">
                        <div class="shopping">

                            <a href="?ctr=<?=isset($_SESSION['user']) ? 'cart' : 'login'?>"><i class="ti-shopping-cart"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </header>