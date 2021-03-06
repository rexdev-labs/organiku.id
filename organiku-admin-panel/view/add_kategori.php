<?php
    include "header.php";
    require "app/set_kategori.php";
    require "app/add_subkategori.php";
?>
<ul class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="./">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="produk">Products</a>
            </li>
          </ul>
<div class="content-i">
    <div class="content-box">
        <div class="element-wrapper">
            <h6 class="element-header">
                Data Produk
            </h6>
            <button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingFormModal" data-toggle="modal" type="button">Add Kategori</button>
      <div aria-hidden="true" class="onboarding-modal modal fade animated" id="onboardingFormModal" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-centered" role="document">
          <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Cancel</span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-media">
              <img alt="" src="img/bigicon5.png" width="200px">
            </div>
            <div class="onboarding-content with-gradient">
              <h4 class="onboarding-title">
                Add Kategori
              </h4>
              <div class="onboarding-text">
                Input Data Untuk Kategori Baru Yang Dapat Digunakan untuk submenu Organiku
              </div>
              <form method="POST">
                  <center>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label for="">Kategori</label><input class="form-control" name="kat" placeholder="Enter kategori..." type="text" value="">
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                <input class="mr-2 mb-2 btn btn-primary btn-lg" type="submit" name="simpan_kategori" value="Add Kategori">
                </div>
                </center>
              </form>
            </div>
          </div>
        </div>

      </div><button class="mr-2 mb-2 btn btn-primary" data-target="#onboardingFormModal2" data-toggle="modal" type="button">Add Sub Kategori</button>
      <div aria-hidden="true" class="onboarding-modal modal fade animated" id="onboardingFormModal2" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-centered" role="document">
          <div class="modal-content text-center">
            <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span class="close-label">Cancel</span><span class="os-icon os-icon-close"></span></button>
            <div class="onboarding-media">
              <img alt="" src="img/bigicon5.png" width="200px">
            </div>
            <div class="onboarding-content with-gradient">
              <h4 class="onboarding-title">
                Add Sub Kateogir
              </h4>
              <div class="onboarding-text">
                Input Add SubKategori Untuk Organiku
              </div>
              <form method="POST">
                <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                      <label for="">Pilih Kategori</label>
                      
                      <select class="form-control" name="kat">
                          <?php
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
                      <label for="">Sub kategori</label><input class="form-control" name="sub" placeholder="Enter Sub Kategori..." type="text" value="">
                    </div>
                  </div>
                  <div class="col-sm-12">
                <input class="mr-2 mb-2 btn btn-primary btn-lg" type="submit" name="simpan_subkategori" value="Add Sub Kategori">
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
            <div class="element-box">
                <h5 class="form-header">
                    Data Kategori Organiku
                </h5>
                <div class="table-responsive">
                    <table class="table" data-paging="true" data-show-toggle="false" data-expand-first="false" style="background: #fff; margin-bottom: 100px;">
                        <thead>
                                <tr>
                                    <th>No</th>
                                    <th data-breakpoints="xs">Kategoty</th>
                                    <th data-breakpoints="xs">Action</th>
                                </tr>
                        </thead>
                        <tbody>
                           <?php
                                    
                                            $sub=$conn->query("SELECT * FROM sub_kategori");
                                            while($row2=mysqli_fetch_array($sub)){
                                                $i++;
                                            $kat=$conn->query("SELECT * FROM kategori WHERE id_kategori='$row2[id_kategori]'");
                                            $row3=mysqli_fetch_array($kat);
                            ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $row3[kategori] ?> -> <?= $row2[nama] ?></td>
                                <td>
                                    <a href="edit_subkat&id=<?= $row2[id_sub] ?>"><i class="icon-feather-edit"></i></a>
                                </td>
                            </tr>
                            <?php
                                         }
                            ?>
                        </tbody>
                    </table>
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
        <!--------------------
              END - Color Scheme Toggler
              -------------------->
        <!--------------------
              START - Demo Customizer
              -------------------->
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
<script src="js/dataTables.bootstrap4.min.js"></script>
<script src="js/demo_customizer.js?version=4.4.0"></script>
<script src="footable/js/footable.js"></script>
<script src="js/main.js?version=4.4.0"></script>
<script>
    jQuery(function($){
       	$('.table').footable({
		"paging": {
            "size": 15
		}
	});
    });
    
    
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
</body>

</html>