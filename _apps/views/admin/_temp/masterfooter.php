          <div class="footer">
            <div class="pull-right">Design By : <a href="https://apps-gerejatoraja.org/" target="blank"><strong>Biro Inforkom Gereja Toraja</strong></a></div>
            <div><strong>Copyright</strong> BPS Gereja Toraja &copy; 2020 </div>
          </div> <!-- end .footer -->
          
        </div> <!-- end .col-lg-12 -->
      </div> <!-- end .row -->
      </div> <!-- end .wrapper-content -->
    </div> <!-- end #page-wrapper .gray-bg dashbard-1 -->
    <?php #$this->load->view('admin/_temp/admin-small-chat'); ?>
    <?php #$this->load->view('admin/_temp/admin-right-sidebar'); ?>

  </div> <!-- end #wrapper -->

  <!-- Mainly scripts -->
  <script src="<?php echo base_url('_library/admin/js/jquery-3.1.1.min.js') ?>"></script>
  <script src="<?php echo base_url('_library/admin/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('_library/admin/js/plugins/metisMenu/jquery.metisMenu.js') ?>"></script>
  <script src="<?php echo base_url('_library/admin/js/plugins/slimscroll/jquery.slimscroll.min.js') ?>"></script>

  <?php if ($this->uri->segment(2) === 'home') : ?>
    <!-- Flot -->
    <script src="<?php echo base_url('_library/admin/js/plugins/flot/jquery.flot.js') ?>"></script>
    <script src="<?php echo base_url('_library/admin/js/plugins/flot/jquery.flot.tooltip.min.js') ?>"></script>
    <script src="<?php echo base_url('_library/admin/js/plugins/flot/jquery.flot.spline.js') ?>"></script>
    <script src="<?php echo base_url('_library/admin/js/plugins/flot/jquery.flot.resize.js') ?>"></script>
    <script src="<?php echo base_url('_library/admin/js/plugins/flot/jquery.flot.pie.js') ?>"></script>
    <!-- Peity -->
    <script src="<?php echo base_url('_library/admin/js/plugins/peity/jquery.peity.min.js') ?>"></script>
    <script src="<?php echo base_url('_library/admin/js/demo/peity-demo.js') ?>"></script>
    <!-- jQuery UI -->
    <script src="<?php echo base_url('_library/admin/js/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
    <!-- GITTER -->
    <script src="<?php echo base_url('_library/admin/js/plugins/gritter/jquery.gritter.min.js') ?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url('_library/admin/js/plugins/sparkline/jquery.sparkline.min.js') ?>"></script>
    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url('_library/admin/js/demo/sparkline-demo.js') ?>"></script>
    <!-- ChartJS-->
    <script src="<?php echo base_url('_library/admin/js/plugins/chartJs/Chart.min.js') ?>"></script>
  <?php endif; ?>

  <!-- Custom and plugin javascript -->
  <script src="<?php echo base_url('_library/admin/js/inspinia.js') ?>"></script>
  <script src="<?php echo base_url('_library/admin/js/plugins/pace/pace.min.js') ?>"></script>

  <!-- Data Table -->
  <script src="<?php echo base_url('_library/admin/js/plugins/dataTables/datatables.min.js') ?>"></script>

  <!-- Chosen -->
  <script src="<?php echo base_url('_library/admin/js/plugins/chosen/chosen.jquery.js') ?>"></script>

  <!-- Input Mask-->
  <script src="<?php echo base_url('_library/admin/js/plugins/jasny/jasny-bootstrap.min.js') ?>"></script>

  <!-- Data picker -->
   <script src="<?php echo base_url('_library/admin/js/plugins/datapicker/bootstrap-datepicker.js') ?>"></script>


  <?php if ($this->uri->segment(2) === 'home') : ?>
    <!-- Toastr -->
    <script src="<?php echo base_url('_library/admin/js/plugins/toastr/toastr.min.js') ?>"></script>

    <script>
      $(document).ready(function() 
      {
          setTimeout(function() {
              toastr.options = {
                  closeButton: true,
                  progressBar: true,
                  showMethod: 'slideDown',
                  timeOut: 4000
              };
              toastr.success('SISTEM INFORMASI GEREJA TORAJA', 'Welcome to SIGET');
          }, 1300);

          var data1 = [
              [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
          ];
          var data2 = [
              [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
          ];

          $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
              data1, data2
          ],
                  {
                      series: {
                          lines: {
                              show: false,
                              fill: true
                          },
                          splines: {
                              show: true,
                              tension: 0.4,
                              lineWidth: 1,
                              fill: 0.4
                          },
                          points: {
                              radius: 0,
                              show: true
                          },
                          shadowSize: 2
                      },
                      grid: {
                          hoverable: true,
                          clickable: true,
                          tickColor: "#d5d5d5",
                          borderWidth: 1,
                          color: '#d5d5d5'
                      },
                      colors: ["#1ab394", "#1C84C6"],
                      xaxis:{
                      },
                      yaxis: {
                          ticks: 4
                      },
                      tooltip: false
                  }
          );

          $('.chosen-select').chosen({width: "100%"});

          var doughnutData = {
              labels: ["App","Software","Laptop" ],
              datasets: [{
                  data: [300,50,100],
                  backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
              }]
          } ;


          var doughnutOptions = {
              responsive: false,
              legend: {
                  display: false
              }
          };


          var ctx4 = document.getElementById("doughnutChart").getContext("2d");
          new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

          var doughnutData = {
              labels: ["App","Software","Laptop" ],
              datasets: [{
                  data: [70,27,85],
                  backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
              }]
          } ;


          var doughnutOptions = {
              responsive: false,
              legend: {
                  display: false
              }
          };


          var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
          new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

      });
      
    </script>
  <?php endif; ?>
  
  <script>
    $(document).ready(function() 
    {
        $('.dataTables-example').DataTable({
          pageLength: 25,
          responsive: true,
          dom: '<"html5buttons"B>lTfgitp',
          buttons: [
              {extend: 'copy'},
              {extend: 'csv'},
              {extend: 'excel', title: 'ExampleFile'},
              {extend: 'pdf', title: 'ExampleFile'},

              {extend: 'print',
                customize: function (win){
                      $(win.document.body).addClass('white-bg');
                      $(win.document.body).css('font-size', '10px');
                      $(win.document.body).find('table')
                              .addClass('compact')
                              .css('font-size', 'inherit');
                }
              }
          ]

        });

        $('#modal-editkelompok').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget)
          var idkelompok = button.data('idkelompok')
          var namakelompok = button.data('namakelompok')
          var modal = $(this)
          modal.find('.modal-body #namaKelompok').val(namakelompok)
          modal.find('.modal-footer #idKelompok').val(idkelompok)
        });

        $('.chosen-select').chosen({width: "100%"});

        $('#data_1 .input-group.date').datepicker({
          todayBtn: "linked",
          keyboardNavigation: false,
          forceParse: false,
          calendarWeeks: true,
          autoclose: true
        });

    });
  </script>

</body>
</html>