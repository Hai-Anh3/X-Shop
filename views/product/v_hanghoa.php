<div class="container">
            <div class="grid">
                <div class="banner">
                    <a href="" class="banner__link">
                        <!-- <img src="./img/banner.jfif" alt="" class="banner__img"> -->
                    </a>
                    <span class="banner__icon banner__icon-right">
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                    <span class="banner__icon banner__icon-left">
                        <i class="fa-solid fa-angle-left"></i>
                    </span>
                </div>

                <!-- category -->
                <div class="row">
                    <div class="col-2 cate">
                        <div class="cate__heading">
                            <span class="cate__heading-icon">
                                <i class="fa-solid fa-list"></i>
                            </span>
                            <span class="cate__heading-text">Tất Cả Danh Mục</span>
                        </div>
                        <div class="cate__list">
                            <?php foreach($show_lh_product as $value):?>
                                <p class="cate__list-item">
                                <span class="cate__list-item-icon"></span><a href="?ctr=product&id_loai=<?=$value['id_loai']?>" class="cate__list-item-link"><?=$value['ten_loai']?></a></p>
                                <?php endforeach ?>
                            <p class="cate__list-item cate__list-item-see-more">Thêm
                                <i class="fa-sharp fa-solid fa-angle-down"></i>
                            </p>
                        </div>
                    </div>

                    <div class="col-10 products">
                        <div class="product__sort">
                            <div class="product__sort-main">
                                <p class="product__sort-main-head">Sắp xếp theo</p>
                                <div class="btn__sort btn--primary">Phổ biến</div>
                                <div class="btn__sort">Mới nhất</div>
                                <div class="btn__sort">Bán chạy</div>
                                <div class="btn__sort-price">Giá
                                    <i class="fa-solid fa-angle-down"></i>

                                    <div class="btn__sort-sub-price">
                                        <p class="sort-sub-price__text">Giá: Thấp đến Cao</p>
                                        <p class="sort-sub-price__text">Giá: Cao đến Thấp</p>
                                    </div>
                                </div>
                            </div>

                            <div class="product__sort-page">
                                <span class="product__sort-page-text"><span class="product__sort-page-current">1</span>/9</span>
                        <span class="btn__page btn--disabled">
                        <i class="fa-solid fa-angle-left"></i>
                        </span>
                        <span class="btn__page">
                        <i class="fa-solid fa-angle-right"></i>
                        </span>
                            </div>
                        </div>

                        <div class="row">
                            <?php foreach($sp_loai as $value):?>
                            <div class="col-2-4 products__item">
                                <a href="?ctr=chitiet&id_sp=<?=$value['id_sp']?>" class="product">
                                    <div class="product__img">
                                        <img src="public/layout/images/product/<?=$value['anh_sp']?>" onerror="this.src='https://demofree.sirv.com/nope-not-here.jpg'" height="186px" alt="">
                                    </div>
                                    <div class="product__text">
                                        <p class="product__desc">
                                            <?=$value['ten_sp']?>
                                        </p>
                                        <div class="product__price">
                                            <span class="product__price--origin"><?=number_format($value['don_gia'])?>đ</span>
                                            <span class="product__price--current"><?=number_format($value['giam_gia'])?>đ</span>
                                        </div>
                                        <div class="product__star">
                                            <span class="product__star-icon">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </span>
                                            <span class="product__star-text">Đã bán <?=number_format($value['luot_ban'])?>k</span>
                                        </div>
                                        <p class="product__address">Nước ngoài</p>
                                    </div>

                                    <!-- like + giảm giá -->
                                    <div class="product__love">Yêu thích</div>
                                    <div class="product__reduce-price">
                                        <div class="product__reduce-price-percent">30%</div>
                                        <div class="product__reduce-price-text">GIẢM</div>
                                    </div>
                                </a>
                            </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>

                <div class="pagination">
                    <span class="page__icon page--left">
                        <i class="fa-solid fa-angle-left"></i>
                    </span>
                    <div class="btn__page btn--primary">1</div>
                    <div class="btn__page">2</div>
                    <div class="btn__page">3</div>
                    <div class="btn__page">4</div>
                    <div class="btn__page">5</div>
                    <span class="page__icon page--right">
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                </div>
            </div>
        </div>