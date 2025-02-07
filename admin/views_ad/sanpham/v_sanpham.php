<body>
    <div class="main">
        <div class="menu">
            <a href="index.php" class="link__home">
                <div class="menu__logo">
                    <div class="logo">
                    <a href="index.php"><img src="../../project1/public/layout/images/banner_logo/cu_dem_pro.png" alt=""></a>

                    </div>
                    <div class="name__logo">
                        <h2>Cudem.<span class="pro">Pro</span></h2>
                    </div>
                </div>
            </a>

            <div class="title">
                <ul class="menu__title">
                <li><a href="?ctr=category">Loại Hàng</a></li>
                    <li><a href="?ctr=product">Sản Phẩm</a></li>
                    <li><a href="?ctr=basket">Giỏ Hàng</a></li>
                    <li><a href="?ctr=client">Khách Hàng</a></li>
                    <li><a href="?ctr=comment">Bình Luận</a></li>
                    <li><a href="?ctr=statistical">Thống Kê</a></li>
                    <li><a href="../../project1/index.php">Vào WEBSITE</a></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <div class="header">
                <div class="user">
                    <div class="header__img-user">
                    <img src="../../project1/public/layout/images/avatar/<?=$_SESSION['user']['hinh']?>" alt="">
                    </div>
                    <div class="header__name-user">
                        <p>Xin chào <span class="r9e80"><?=$_SESSION['user']['ho_ten']?></span></p>
                        <div class="logout">
                            <p><a href="#">Đăng Xuất</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="Manipulation">
                <div class="hello">
                    <h1>QUẢN TRỊ HÀNG HÓA</h1>
                </div>
                <div class="btn__Manipulation">
                    <a href="?ctr=product2"><button class="t9d0ea">Trang Tiếp</button></a>
                    <a href="?ctr=add_product"><button class="t9d0ea t9d0ea1">Nhập Thêm</button></a>
                </div>
            </div>

            <div style="margin-top: 215px;"></div>
            
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Đơn Giá</th>
                    <th>Giảm Giá</th>
                    <th>Ảnh Sản Phẩm</th>
                    <th>lượt Bán</th>
                    <th>Ngày Nhập</th>
                    <th>Thao Tác</th>
                </tr>
                <?php foreach($sanpham as $value) :?>
                <tr class="d0r94">
                    <td><?= $value['id_sp'] ?></td>
                    <td class="sp__td-2"><?= $value['ten_sp'] ?></td>
                    <td><?= number_format($value['don_gia']) ?></td>
                    <td><?= number_format($value['giam_gia']) ?></td>
                    <td><img src="../../project1/public/layout/images/product/<?= $value['anh_sp'] ?>" class="img__admin" alt=""></td>
                    <td><?= $value['luot_ban'] ?></td>
                    <td><?= $value['ngay_nhap'] ?></td>
                    <td class="sp__td_8">
                        <a href="?ctr=edit_product&id_sp=<?=$value['id_sp']?>"><button class="t9d0ea">Edit</button></a>
                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="?ctr=delete_product&id_sp=<?= $value['id_sp']?>"><button class="t9d0ea">Delete</button></a>
                    </td>
                </tr>
                <?php endforeach?>
            </table>
        </div>
    </div>
</body>

</html>