<?php
    include "header.php";
    require "app/edit_sub.php";

    $datasub = $conn->query("SELECT * FROM sub_kategori WHERE id_sub ='$_GET[id]'");
    $rowsub = mysqli_fetch_array($datasub);

?>
<ul class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="./">Home</a>
    </li>
    <li class="breadcrumb-item">
        <a href="upload_produk">Edit Subkategori</a>
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
                        Edit SubKategori Produk Organiku
                    </h6>
                    <form method="post" enctype="multipart/form-data">

                        <div class="element-box">
                            
                            <div class="row">
                                <div class="col-sm-6">
                                <div class="form-group">
                      <label for="">Pilih Kategori</label>
                      
                      <select class="form-control" name="kat">
                      <?php
                            $data1=$conn->query("SELECT * FROM kategori WHERE id_kategori='$rowsub[id_kategori]'");
                            while($row1=mysqli_fetch_array($data1)){
                          ?>
                        <option value="<?= $row1[id_kategori] ?>">
                          <?= $row1[kategori] ?>
                        </option>
                          <?php
                          }
                            $data=$conn->query("SELECT * FROM kategori");
                            while($row=mysqli_fetch_array($data)){
                          ?>
                        <option value="<?= $row[id_kategori] ?>">
                          <?= $row[kategori] ?>
                        </option>
                        <?php
                            }
                        ?>
                      </select>
                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="">Sub kategori</label><input class="form-control" placeholder="Enter Subkategori" type="text" name="sub" value="<?= $rowsub[nama] ?>" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-buttons-w">
                                <button type="submit" name="simpan_sub" class="btn btn-success upload-result2">Save Changes</button>
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
