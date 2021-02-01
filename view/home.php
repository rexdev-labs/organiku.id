<?php
    include "headerwrapper.php";
?>

<div class="slider-area">
                <div class="slider-active-3 owl-carousel slider-hm8 owl-dot-style">
                    <!-- Slider Single Item Start -->
                    <div class="slider-height-6 d-flex align-items-start justify-content-start bg-img" style="background-image: url(assets/images/slider-image/sample-1.jpg);">
                        <div class="container">
                            <div class="slider-content-1 slider-animated-1 text-left">
                                <span class="animated">ORGANIK DAN SEHAT</span>
                                <h1 class="animated">
                                    Beras Merah<br />
                                    Organik
                                </h1>
                                <p class="animated">Gratis Ongkir Untuk Banyuwangi Kota</p>
                                <a href="#" class="shop-btn animated">BELI SEKARANG</a>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item End -->
                    <!-- Slider Single Item Start -->
                    <div class="slider-height-6 d-flex align-items-start justify-content-start bg-img" style="background-image: url(assets/images/slider-image/sample-2.jpg);">
                        <div class="container">
                            <div class="slider-content-1 slider-animated-1 text-left">
                                <span class="animated">100% NATURAL</span>
                                <h1 class="animated">
                                    Organic Fruits <br />
                                    Summer Drinks
                                </h1>
                                <p class="animated">fresh New pack Brusting Fruits</p>
                                <a href="#" class="shop-btn animated">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                    <!-- Slider Single Item End -->
                </div>
            </div>
          
                        </div>
                    </div>
                </div>
            </section>
            <section class="hot-deal-area">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Section Title -->
                                    <div class="section-title ml-0px mt-res-sx-30px">
                                        <h2>Produk Beras Organik</h2>
                                        <p>produk organik untuk hidupmu</p>
                                    </div>
                                    <!-- Section Title -->
                                </div>
                            </div>
                            <!-- New Product Slider Start -->
                            <div class="new-product-slider owl-carousel owl-nav-style">
                                <!-- Product Single Item -->

                               
                                <?php
                                    $data=$conn->query("SELECT * FROM produk WHERE kategori = '1' ORDER BY id_produk DESC ");
                                         while($row=mysqli_fetch_array($data)){
                                         $i++;
                                            $sub=$conn->query("SELECT * FROM sub_kategori WHERE id_sub='$row[id_sub]'");
                                            $row2=mysqli_fetch_array($sub);
                                            $kat=$conn->query("SELECT * FROM kategori WHERE id_kategori='$row2[id_kategori]'");
                                            $row3=mysqli_fetch_array($kat);
                            ?>
                                <div class="product-inner-item">

                                    <article class="list-product mb-30px">
                                        <div class="img-block">
                                            <a href="https://wa.me/6287781737152?text=Hallo%20saya%20mau%20beli%20<?= $row[nama] ?>" class="thumbnail">
                                                <img class="first-img" src="organiku-admin-panel/upload/<?= $row[img] ?>" alt="" />
                                                <img class="second-img" src="organiku-admin-panel/upload/<?= $row[img] ?>" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="https://wa.me/6287781737152?text=Hallo%20saya%20mau%20beli%20<?= $row[nama] ?>" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="https://wa.me/6287781737152?text=Hallo%20saya%20mau%20beli%20<?= $row[nama] ?>"><span><?= $row3[kategori] ?></span></a>
                                            <h2><a href="https://wa.me/6287781737152?text=Hallo%20saya%20mau%20beli%20<?= $row[nama] ?>" class="product-link"><?= $row[nama] ?></a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">Rp. <?= number_format($row[harga_awal]) ?></li>
                                                    <li class="current-price">Rp. <?= number_format($row[harga]) ?></li>
                                                    <li class="discount-price">Hemat Rp.<?= number_format($row[harga_awal]-$row[harga]) ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="https://wa.me/6287781737152?text=Hallo%20saya%20mau%20beli%20<?= $row[nama] ?>">Beli Sekarang </a></li>
                                               
                                            </ul>
                                        </div>
                                    </article>
                                    
                                         </div>
                                <?php
                                         }
                                ?>
                            </div>
                            <!-- Product Slider End -->
                        </div>

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Section Title -->
                                    <div class="section-title ml-0px mt-res-sx-30px">
                                        <h2>Produk Segar </h2>
                                        <p>produk segar untuk hidupmu</p>
                                    </div>
                                    <!-- Section Title -->
                                </div>
                            </div>
                            <!-- New Product Slider Start -->
                            <div class="new-product-slider owl-carousel owl-nav-style">
                                <!-- Product Single Item -->

                               
                                <?php
                                    $data=$conn->query("SELECT * FROM produk WHERE kategori != '1' ORDER BY id_produk DESC ");
                                         while($row=mysqli_fetch_array($data)){
                                         $i++;
                                            $sub=$conn->query("SELECT * FROM sub_kategori WHERE id_sub='$row[id_sub]'");
                                            $row2=mysqli_fetch_array($sub);
                                            $kat=$conn->query("SELECT * FROM kategori WHERE id_kategori='$row2[id_kategori]'");
                                            $row3=mysqli_fetch_array($kat);
                            ?>
                                <div class="product-inner-item">

                                    <article class="list-product mb-30px">
                                        <div class="img-block">
                                            <a href="https://wa.me/6287781737152?text=Hallo%20saya%20mau%20beli%20<?= $row[nama] ?>" class="thumbnail">
                                                <img class="first-img" src="organiku-admin-panel/upload/<?= $row[img] ?>" alt="" />
                                                <img class="second-img" src="organiku-admin-panel/upload/<?= $row[img] ?>" alt="" />
                                            </a>
                                            <div class="quick-view">
                                                <a class="quick_view" href="https://wa.me/6287781737152?text=Hallo%20saya%20mau%20beli%20<?= $row[nama] ?>" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                    <i class="ion-ios-search-strong"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ul class="product-flag">
                                            <li class="new">New</li>
                                        </ul>
                                        <div class="product-decs">
                                            <a class="inner-link" href="https://wa.me/6287781737152?text=Hallo%20saya%20mau%20beli%20<?= $row[nama] ?>"><span><?= $row3[kategori] ?></span></a>
                                            <h2><a href="https://wa.me/6287781737152?text=Hallo%20saya%20mau%20beli%20<?= $row[nama] ?>" class="product-link"><?= $row[nama] ?></a></h2>
                                            <div class="rating-product">
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                                <i class="ion-android-star"></i>
                                            </div>
                                            <div class="pricing-meta">
                                                <ul>
                                                    <li class="old-price">Rp. <?= number_format($row[harga_awal]) ?></li>
                                                    <li class="current-price">Rp. <?= number_format($row[harga]) ?></li>
                                                    <li class="discount-price">Hemat Rp. <?= number_format($row[harga_awal]-$row[harga]) ?></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="add-to-link">
                                            <ul>
                                                <li class="cart"><a class="cart-btn" href="https://wa.me/6287781737152?text=Hallo%20saya%20mau%20beli%20<?= $row[nama] ?>">Beli Sekarang</a></li>
                                                
                                            </ul>
                                        </div>
                                    </article>
                                    
                                         </div>
                                <?php
                                         }
                                ?>
                            </div>
                            <!-- Product Slider End -->
                        </div>
                    </div>
                </div>
            </section> 
            <!-- Category Area Start -->
            <section class="categorie-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section Title -->
                            <div class="section-title mt-res-sx-30px mt-res-md-30px">
                                <h2>Popular Categories</h2>
                                <p>Add Popular Categories to weekly line up</p>
                            </div>
                            <!-- Section Title -->
                        </div>
                    </div>
                    <!-- Category Slider Start -->
                    <div class="category-slider owl-carousel owl-nav-style">
                        <!-- Single item -->
                        <div class="category-item">
                            <div class="category-list mb-30px">
                                <div class="category-thumb">
                                    <a href="shop-4-column.html">
                                        <img src="assets/images/product-image/organic/thumb-1.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="desc-listcategoreis">
                                    <div class="name_categories">
                                        <h4>Fresh Vegetables</h4>
                                    </div>
                                    <span class="number_product">17 Products</span>
                                    <a href="shop-4-column.html"> Shop Now <i class="ion-android-arrow-dropright-circle"></i></a>
                                </div>
                            </div>
                            <div class="category-list">
                                <div class="category-thumb">
                                    <a href="shop-4-column.html">
                                        <img src="assets/images/product-image/organic/thumb-2.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="desc-listcategoreis">
                                    <div class="name_categories">
                                        <h4>Fresh Salad & Dips</h4>
                                    </div>
                                    <span class="number_product">17 Products</span>
                                    <a href="shop-4-column.html"> Shop Now <i class="ion-android-arrow-dropright-circle"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single item -->
                        <div class="category-item">
                            <div class="category-list mb-30px">
                                <div class="category-thumb">
                                    <a href="shop-4-column.html">
                                        <img src="assets/images/product-image/organic/thumb-3.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="desc-listcategoreis">
                                    <div class="name_categories">
                                        <h4>Fresh Fruit</h4>
                                    </div>
                                    <span class="number_product">17 Products</span>
                                    <a href="shop-4-column.html"> Shop Now <i class="ion-android-arrow-dropright-circle"></i></a>
                                </div>
                            </div>
                            <div class="category-list">
                                <div class="category-thumb">
                                    <a href="shop-4-column.html">
                                        <img src="assets/images/product-image/organic/thumb-4.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="desc-listcategoreis">
                                    <div class="name_categories">
                                        <h4>Baking & Cooking</h4>
                                    </div>
                                    <span class="number_product">17 Products</span>
                                    <a href="shop-4-column.html"> Shop Now <i class="ion-android-arrow-dropright-circle"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single item -->
                        <div class="category-item">
                            <div class="category-list mb-30px">
                                <div class="category-thumb">
                                    <a href="shop-4-column.html">
                                        <img src="assets/images/product-image/organic/thumb-5.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="desc-listcategoreis">
                                    <div class="name_categories">
                                        <h4>Fresh Cream & Custard</h4>
                                    </div>
                                    <span class="number_product">17 Products</span>
                                    <a href="shop-4-column.html"> Shop Now <i class="ion-android-arrow-dropright-circle"></i></a>
                                </div>
                            </div>
                            <div class="category-list">
                                <div class="category-thumb">
                                    <a href="shop-4-column.html">
                                        <img src="assets/images/product-image/organic/thumb-6.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="desc-listcategoreis">
                                    <div class="name_categories">
                                        <h4>Milk, Butter & Eggs</h4>
                                    </div>
                                    <span class="number_product">17 Products</span>
                                    <a href="shop-4-column.html"> Shop Now <i class="ion-android-arrow-dropright-circle"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single item -->
                        <div class="category-item">
                            <div class="category-list mb-30px">
                                <div class="category-thumb">
                                    <a href="shop-4-column.html">
                                        <img src="assets/images/product-image/organic/thumb-7.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="desc-listcategoreis">
                                    <div class="name_categories">
                                        <h4>Spreads & Margarine</h4>
                                    </div>
                                    <span class="number_product">17 Products</span>
                                    <a href="shop-4-column.html"> Shop Now <i class="ion-android-arrow-dropright-circle"></i></a>
                                </div>
                            </div>
                            <div class="category-list">
                                <div class="category-thumb">
                                    <a href="shop-4-column.html">
                                        <img src="assets/images/product-image/organic/thumb-8.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="desc-listcategoreis">
                                    <div class="name_categories">
                                        <h4>Fresh Vegetables</h4>
                                    </div>
                                    <span class="number_product">17 Products</span>
                                    <a href="shop-4-column.html"> Shop Now <i class="ion-android-arrow-dropright-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br>
            <br>
            <br>
<?php
    include "footerwrapper.php";
?>
