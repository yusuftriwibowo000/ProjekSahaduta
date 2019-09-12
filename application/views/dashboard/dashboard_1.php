<div class="right_col" role="main">
          
          <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_520">
                <div class="x_title">
                <h3>Pasien Klinik Sahaduta  <small>Berdasarkan Jenis Kelamin</small></h3>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
      
          
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                  
                <?php foreach ($data as $data) :
                         $jk[] = $data->jk;
                           $jumlah_jk[] = (float) $data->jumlah_jk;
                     endforeach; ?>
                  <canvas id="canvas" width="860" height="520"></canvas>
               009

                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="x_panel tile fixed_height_520">
                <div class="x_title">
                <h3>Pasien Klinik Sahaduta  <small>Berdasarkan Jenis Agama</small></h3>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
      
          
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                <?php foreach ($data2 as $data2) :
                         $agama[] = $data2->agama;
                           $jumlah_agama[] = (float) $data2->jumlah_agama;
                     endforeach; ?>
                  <canvas id="canvas2" width="860" height="520"></canvas>
               

                </div>
              </div>
            </div>
          
 
 <!--Load chart js-->
 
                  </div>
                </div>
                
               
                </div>
                <!-- end of weather widget -->
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript" src="<?php echo base_url().'assets/chart.js'?>"></script>

<script>
var ctx = document.getElementById('canvas');
var myChart = new Chart(ctx, {
 type: 'pie',
 data: {
     labels: ['Laki-laki', 'Perempuan'],
     datasets: [{
         label: '# of Votes',
         data: <?php echo json_encode($jumlah_jk);?>,
         backgroundColor: [
              'rgba(52, 172, 224,1 )',
              'rgba(255, 250, 101,1)'
         ],
         borderColor: [
              'rgba(52, 172, 224,1 )',
              'rgba(255, 177, 66, 1)'
         ],
         borderWidth: 1
     }]
 },
 options: {}
});
</script>

<script>
var ctx = document.getElementById('canvas2');
var myChart = new Chart(ctx, {
 type: 'pie',
 data: {
     labels: ['Islam','Kristen','Katolik','Hindu','Budha','Khonghucu'],
     datasets: [{
         label: '# of Votes',
         data: <?php echo json_encode($jumlah_agama);?>,
         backgroundColor: [
              'rgba(51, 217, 178, 1)',
                'rgba(255, 242, 0, 1)',
                'rgba(214, 162, 232, 1)',
                'rgba(52, 172, 224,1)',
                'rgba(252, 66, 123, 1)',
                'rgba(234, 181, 67, 1)'
         ],
         borderColor: [
              'rgba(51, 217, 178, 1)',
                'rgba(255, 242, 0, 1)',
                'rgba(214, 162, 232, 1)',
                'rgba(52, 172, 224,1)',
                'rgba(252, 66, 123, 1)',
                'rgba(234, 181, 67, 1)'
         ],
         borderWidth: 1
     }]
 },
 options: {}
});
</script>

<!-- <script>
var ctx = document.getElementById('canvas2');
var myChart = new Chart(ctx, {
 type: 'pie',
 data: {
     labels: ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Budha', 'Khonghucu'],
     datasets: [{
         label: '# of Votes',
         data: <?php echo json_encode($jumlah_agama);?>,
         backgroundColor: [
                'rgba(51, 217, 178, 1)',
                'rgba(255, 242, 0, 1)',
                'rgba(214, 162, 232, 1)',
                'rgba(52, 172, 224,1)',
                'rgba(252, 66, 123, 1)',
                'rgba(234, 181, 67, 1)'
            ],
            borderColor: [
                'rgba(51, 217, 178, 1)',
                'rgba(255, 242, 0, 1)',
                'rgba(214, 162, 232, 1)',
                'rgba(52, 172, 224,1)',
                'rgba(252, 66, 123, 1)',
                'rgba(234, 181, 67, 1)'
            ],
         borderWidth: 1
     }]
 },
 options: {}
});
</script> -->