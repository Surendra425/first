<!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('public/assets/js/jquery.min.js')?>"></script>
  <script src="<?= base_url('public/assets/js/popper.min.js')?>"></script>
  <script src="<?= base_url('public/assets/js/bootstrap.min.js')?>"></script>
 <!-- simplebar js -->
  <script src="<?= base_url('public/assets/plugins/simplebar/js/simplebar.js')?>"></script>
  <!-- horizontal-menu js -->
  <script src="<?= base_url('public/assets/js/horizontal-menu.js')?>"></script>
  <!-- loader scripts -->
  <script src="<?= base_url('public/assets/js/jquery.loading-indicator.js')?>"></script>
  <!-- Custom scripts -->
  <script src="<?= base_url('public/assets/js/app-script.js')?>"></script>
  <!-- Chart js -->
  <script src="<?= base_url('public/assets/plugins/Chart.js/Chart.min.js')?>"></script>
  <!-- Vector map JavaScript -->
  <script src="<?= base_url('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')?>"></script>
  <script src="<?= base_url('public/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')?>"></script>
  <!-- Easy Pie Chart JS -->
  <script src="<?= base_url('public/assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js')?>"></script>
	<!-- Apex Chart JS -->
  <script src="<?= base_url('public/assets/plugins/apexcharts/apexcharts.js')?>"></script>
  <!-- Sparkline JS -->
  <script src="<?= base_url('public/assets/plugins/sparkline-charts/jquery.sparkline.min.js')?>"></script>
  <script src="<?= base_url('public/assets/plugins/jquery-knob/excanvas.js')?>"></script>
  <script src="<?= base_url('public/assets/plugins/jquery-knob/jquery.knob.js')?>"></script>
    <script>
        $(function() {
            $(".knob").knob();
        });
    </script>
  <!-- Index js -->

  <?php
  if(!empty($script) && count($script) > 0){

    foreach ($script as $key => $value) { ?>
      <script src="<?= base_url('public/assets/js/'. $value)?>"></script>
    <?php } }
  ?>
  
  
 
  
  <!--Select Plugins Js-->
    <script src="<?= base_url('public/assets/plugins/select2/js/select2.min.js')?>"></script>
    <!--Inputtags Js-->
    <script src="<?= base_url('public/assets/plugins/inputtags/js/bootstrap-tagsinput.js')?>"></script>
    <!--Bootstrap Datepicker Js-->
    <script src="<?= base_url('public/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>
    <script>
      $('#default-datepicker').datepicker({
        todayHighlight: true
      });
      $('#autoclose-datepicker').datepicker({
        autoclose: true,
        todayHighlight: true
      });
      $('#inline-datepicker').datepicker({
         todayHighlight: true
      });
      $('#dateragne-picker .input-daterange').datepicker({
       });
    </script>
    <!--Multi Select Js-->
    <script src="<?= base_url('public/assets/plugins/jquery-multi-select/jquery.multi-select.js')?>"></script>
    <script src="<?= base_url('public/assets/plugins/jquery-multi-select/jquery.quicksearch.js')?>"></script>
    <script>
        $(document).ready(function() {
            $('.single-select').select2();
            $('.multiple-select').select2();
        //multiselect start
            $('#my_multi_select1').multiSelect();
            $('#my_multi_select2').multiSelect({
                selectableOptgroup: true
            });
            $('#my_multi_select3').multiSelect({
                selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                afterInit: function (ms) {
                    var that = this,
                        $selectableSearch = that.$selectableUl.prev(),
                        $selectionSearch = that.$selectionUl.prev(),
                        selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                        selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';
                    that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                        .on('keydown', function (e) {
                            if (e.which === 40) {
                                that.$selectableUl.focus();
                                return false;
                            }
                        });
                    that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                        .on('keydown', function (e) {
                            if (e.which == 40) {
                                that.$selectionUl.focus();
                                return false;
                            }
                        });
                },
                afterSelect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                },
                afterDeselect: function () {
                    this.qs1.cache();
                    this.qs2.cache();
                }
            });
         $('.custom-header').multiSelect({
              selectableHeader: "<div class='custom-header'>Selectable items</div>",
              selectionHeader: "<div class='custom-header'>Selection items</div>",
              selectableFooter: "<div class='custom-header'>Selectable footer</div>",
              selectionFooter: "<div class='custom-header'>Selection footer</div>"
            });
          });
    </script>