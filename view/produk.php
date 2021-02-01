<?php
    include "headerwrapper.php";
?>


            <section class="hot-deal-area">
                <div class="container">
                    <div class="row">
                        
                        <div class="">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Section Title -->
                                    <div class="section-title ml-0px mt-res-sx-30px">
                                        <h2>Produk Organiku</h2>
                                        <p>produk organik untuk hidupmu</p>
                                    </div>
                                    <!-- Section Title -->
                                </div>
                            </div>
                            <!-- New Product Slider Start -->
                            <div class="row">
                                <!-- Product Single Item -->

                               
                                <?php
                                    $data=$conn->query("SELECT * FROM produk ORDER BY id_produk DESC ");
                                         while($row=mysqli_fetch_array($data)){
                                         $i++;
                                            $sub=$conn->query("SELECT * FROM sub_kategori WHERE id_sub='$row[id_sub]'");
                                            $row2=mysqli_fetch_array($sub);
                                            $kat=$conn->query("SELECT * FROM kategori WHERE id_kategori='$row2[id_kategori]'");
                                            $row3=mysqli_fetch_array($kat);
                            ?>
                            <div class="col-sm-3">
                                <div class="product-inner-item">

                                    <article class="list-product mb-30px">
                                        <div class="img-block">
                                            <a href="https://wa.me/6287781737152?text=Hallo%20saya%20mau%20beli%20<?= $row[nama] ?>" class="thumbnail">
                                                <img class="first-img" src="organiku-admin-panel/upload/<?= $row[img] ?>" alt=""  style="width: 100%"/>
                                                <img class="second-img" src="organiku-admin-panel/upload/<?= $row[img] ?>" alt="" style="width: 100%"/>
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
                                            <a class="inner-link" href="shop-4-column.html"><span><?= $row3[kategori] ?></span></a>
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
            <br>
            <br>
            <br>
<?php
    include "footerwrapper.php";
?>
