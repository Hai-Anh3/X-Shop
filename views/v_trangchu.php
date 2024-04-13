<?php if (!isset($_GET['pageNum'])) : ?>
<div>
    <div class="grid">
        <section id="banner">
            <img src="public/layout/images/banner_logo/banner_1.png" alt="">
        </section>
    </div>

    <div id="content" class="<?= !$hh_top18 ? 'hh18' : '' ?>">
        <div class="grid">
            <section id="category">
                <div class="section__category">
                    <div class="section__title">DANH MỤC</div>
                    <ul class="section__item-list">

                        <?php foreach ($data_loai as $value) : ?>
                            <li class="section__item">
                                <a href="?ctr=product&id_loai=<?= $value['id_loai'] ?>" class="link__category">
                                    <div style="height: 140px;display: flex;
                                    justify-content: center;" class="category__images">
                                        <?php
                                        echo "<img style='width: 100px;
                                                height: 108px;' src='public/layout/images/category/" . $value['anh'] . "' alt='' class='cangiua'>";
                                        ?>
                                        <!-- <img src="public/layout/images/category/thoitrangnam.png" alt="" class="cangiua"> -->


                                    </div>
                                    <div class="category__name" style="background-color: #fff;height: 56px;">
                                        <?= $value['ten_loai'] ?>
                                    </div>
                                </a>
                            </li>
                        <?php endforeach ?>

                    </ul>
                </div>
            </section>
        </div>

        <div class="grid">
            <section id="home__product" style="margin-top: 36px;">
                <div class="section__home">
                    <div class="home__title">
                        GỢI Ý HÔM NAY
                    </div>

                    <div class="section__product-list">
                        <?php if (isset($_POST['btn_search_product'])) :
                            $hh_top18 = $search_product;
                        ?>
                        <?php endif ?>
                        <?php foreach ($hh_top18 as $v) : ?>
                            <div class="box-product">
                                <a href="?ctr=chitiet&id_sp=<?= $v['id_sp'] ?>" class="link__product">
                                    <div class="sub-box-product">
                                        <div class="images__product">
                                            <?php
                                            echo "<img src='public/layout/images/product/" . $v['anh_sp'] . "' alt=''>";
                                            ?>
                                            <!-- <img src="public/layout/images/product/sp2.jpg" alt=""> -->
                                        </div>
                                        <p class="product-name"><?= $v['ten_sp'] ?></p>
                                        <div class="sale__product">
                                            Giảm 30%
                                        </div>
                                        <div class="price">
                                            <p class="col-1"><?= number_format($v['don_gia'], 0, '.', '.') ?>đ</p>
                                            <p class="col-2">Đã bán 10k</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach ?>

                    </div>
                </div>

                <?php if (!$hh_top18) : ?>
                    <div class="no-sp">
                        <h2>Chưa Có Sản Phẩm</h2>
                        <div class="img--err">
                            <!-- <img src="https://hinhgaixinh.com/wp-content/uploads/2022/03/anh-gai-xinh-hoc-sinh-tuyet-dep.jpg" alt=""> -->
                        </div>
                    </div>
                <?php endif ?>
            </section>

        </div>

        <?php if ($total_page > 1) : ?>
            <div class="see-more">
                <a href="?pageNum=2"><button>Xem Thêm</button></a>
            </div>
        <?php endif ?>
    </div>
</div>
<?php else : ?>
<div>
    <div class="grid">
    </div>

    <div id="content">

        <div class="grid">
            <section id="home__product">
                <div class="section__home">
                    <div class="all-hh__title">
                        <button>Tất cả</button>
                        <div class="border__dotted"></div>
                    </div>

                    <div class="section__product-list">

                        <?php foreach ($hanghoa_by_page as $v) : ?>
                            <div class="box-product">
                                <a href="chitiet.php" class="link__product">
                                    <div class="sub-box-product">
                                        <div class="images__product">
                                            <?php
                                            echo "<img src='public/layout/images/product/" . $v['anh_sp'] . "' alt=''>";
                                            ?>
                                            <!-- <img src="public/layout/images/product/sp2.jpg" alt=""> -->
                                        </div>
                                        <p class="product-name"><?= $v['ten_sp'] ?></p>
                                        <div class="sale__product">
                                            Giảm 30%
                                        </div>
                                        <div class="price">
                                            <p class="col-1"><?= number_format($v['don_gia'], 0, '.', '.') ?>đ</p>
                                            <p class="col-2">Đã bán 10k</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach ?>

                    </div>
                </div>
            </section>

            <div class="pagination">
                <div class="page__icon">

                    <?php if ($current_page > 1) : ?>
                        <a href="?pageNum=<?= ($current_page - 1) ?>" class="page__icon-link">
                        <?php endif ?>

                        <i class="fa-solid fa-angle-left"></i>

                        <?php if ($current_page > 1) : ?>
                        </a>
                    <?php endif ?>

                </div>
                <?php for ($i = 1; $i <= $total_page; $i++) : ?>
                    <div class="btn__page <?= ($i == $current_page) ? 'btn--primary' : '' ?>"><a class="btn__page-link <?= ($i == $current_page) ? 'btn--primary' : '' ?>" href="?pageNum=<?= $i ?>"><?= $i ?></a></div>
                    <?php
                    if ($current_page <= 5) {
                        if ($i == 7) {
                            echo "<div class='btn__page'>...</div>";
                            break;
                        }
                    } else if ($current_page < ($total_page - 2)) {
                        if ($i == 2) {
                            echo "<div class='btn__page'>...</div>";
                            $i = $current_page - 3;
                        }
                        if ($i == ($current_page + 2)) {
                            echo "<div class='btn__page'>...</div>";
                            break;
                        }
                    } else {
                        if ($i == 2) {
                            echo "<div class='btn__page'>...</div>";
                            $i = $total_page - 5;
                        }
                    }
                    ?>
                <?php endfor ?>
                <div class="page__icon">
                    <?php
                    if ($current_page < $total_page) {
                        echo '<a href="?pageNum=' . ($current_page + 1) . '" class="page__icon-link">';
                    }
                    ?>
                    <i class="fa-solid fa-angle-right"></i>
                    <?php
                    if ($current_page < $total_page) {
                        echo '</a>';
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>
<?php endif ?>