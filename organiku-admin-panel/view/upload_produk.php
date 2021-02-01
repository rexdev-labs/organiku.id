<?php
    include "header.php";
    require "app/set_produk.php";
?>
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="./">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="upload_produk">Upload Products</a>
    </li>
</ul>
<!--------------------
          END - Breadcrumbs
          -------------------->
<div class="content-i">
    <div class="content-box">
        <div class="row">
            <div class="col-lg-12">
                <div class="element-wrapper">
                    <h6 class="element-header">
                        Upload Produk Organiku
                    </h6>
                    <form method="post" enctype="multipart/form-data">

                        <div class="element-box">
                            <div class="container">
                                <input type="file" name="gambar" id="preview_gambar" />
                                <input type="text" name="url_gambar" placeholder="Gambar Melalu Url" class="form-control" style="margin: 20px 0px;">
                                <img src="img/preview.png" id="gambar_nodin" width="320" style="overflow: hidden; postition: relative;" alt="Preview Gambar" />
                            </div>

                            <div class="form-group">
                                <label for=""> Nama Produk</label><input class="form-control" placeholder="Nama Produk" type="text" name="nama" required>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for=""> Harga Sebelum Diskon</label><input class="form-control" placeholder="Harga Sebelum Diskon" type="text" name="harga_disk" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Harga Real</label><input class="form-control" placeholder="Harga Real" type="text" name="harga_real" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""> Kategori</label><select class="form-control" name="kategori" required>
                                    <?php
                                            $sub=$conn->query("SELECT * FROM sub_kategori");
                                            while($row2=mysqli_fetch_array($sub)){
                                            $kat=$conn->query("SELECT * FROM kategori WHERE id_kategori='$row2[id_kategori]'");
                                            $row3=mysqli_fetch_array($kat);
                                    ?>
                                    <option value="<?= $row2[id_sub] ?>|<?= $row2[id_kategori] ?>">
                                        <?= $row3[kategori] ?> >> <?= $row2[nama] ?>
                                    </option>
                                    <?php
                                            }
                                                ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label> Deskripsi Produk</label>
                                <textarea cols="80" id="ckeditor1" name="deskripsi" rows="10" placeholder="Masukan Deskripsi Produk" required></textarea>
                            </div>




                            <div class="form-buttons-w">
                                <button type="submit" name="simpan_produk" class="btn btn-success upload-result2">Save Product</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
        <!--------------------
              START - Color Scheme Toggler
              -------------------->
        <div class="floated-colors-btn three-floated-btn">
            <div class="os-toggler-w">
                <div class="os-toggler-i">
                    <div class="os-toggler-pill"></div>
                </div>
            </div>
            <span>Dark </span><span>Colors</span>
        </div>

    </div>
</div>
</div>
</div>
<div class="display-type"></div>
</div>


<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/popper.js/dist/umd/popper.min.js"></script>
<script src="bower_components/moment/moment.js"></script>
<script src="bower_components/chart.js/dist/Chart.min.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="bower_components/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
<script src="bower_components/ckeditor/ckeditor.js"></script>
<script src="bower_components/bootstrap-validator/dist/validator.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bower_components/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
<script src="bower_components/dropzone/dist/dropzone.js"></script>
<script src="bower_components/editable-table/mindmup-editabletable.js"></script>
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
<script src="bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
<script src="bower_components/tether/dist/js/tether.min.js"></script>
<script src="bower_components/slick-carousel/slick/slick.min.js"></script>
<script src="bower_components/bootstrap/js/dist/util.js"></script>
<script src="bower_components/bootstrap/js/dist/alert.js"></script>
<script src="bower_components/bootstrap/js/dist/button.js"></script>
<script src="bower_components/bootstrap/js/dist/carousel.js"></script>
<script src="bower_components/bootstrap/js/dist/collapse.js"></script>
<script src="bower_components/bootstrap/js/dist/dropdown.js"></script>
<script src="bower_components/bootstrap/js/dist/modal.js"></script>
<script src="bower_components/bootstrap/js/dist/tab.js"></script>
<script src="bower_components/bootstrap/js/dist/tooltip.js"></script>
<script src="bower_components/bootstrap/js/dist/popover.js"></script>
<script src="js/demo_customizer.js?version=4.4.0"></script>
<script src="js/main.js?version=4.4.0"></script>
<script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-XXXXXXX-9', 'auto');
    ga('send', 'pageview');

</script>

<script>
    function bacaGambar(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#gambar_nodin').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#preview_gambar").change(function() {
        bacaGambar(this);
    });

</script>




</body>

</html>
