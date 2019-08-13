<?php include"menu.php";
include "config.php";


?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Início
        
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-9">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Cadastro de premiação</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Data do sorteio</label>
                  <input type="text" class="form-control" name="data" id='data' id="exampleInputEmail1" placeholder="">
                </div>
                
                <div class="form-group">
                <label>Função</label>
                <select class="form-control select2" name="premio" style="width: 100%;">
                  <option selected="selected" value="globo">Globo</option>
                  <option value="giro">Giro</option>
                </select>
              </div>
              <div class="form-group">
                  <label for="exampleInputFile">Prêmio</label>
                  <input type="file" name="photo" class="font"   required> 

                  <p class="help-block">Coloque a imagem do prêmio aqui.</p>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="enviar" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
          <?php
include "config.php";
if (isset($_POST["enviar"])){
  
  $data= $_POST["data"];
 
  $premio= $_POST["premio"];
  $image_name = $_FILES['photo']['name'];
			$image_temp = $_FILES['photo']['tmp_name'];
      $extension = explode('.', $image_name);
      
      $image = time().".".end($extension);
      $location="uploadspremiacao/" . $image;
			move_uploaded_file($image_temp, "uploadspremiacao/".$image);
  

      $sql = "INSERT INTO premiacao (data,premio,location)
      VALUES ('$data','$premio','$location')";
      
      if ($conn->query($sql) === TRUE) {
        echo "<script>window.location = 'cadastropremiacao.php'</script>";
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
      }
   
  
    
  

}
?>
       
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Versão</b> 1.0
    </div>
    <strong>
    CICS
  </footer>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<script>
    $(document).ready(function () { 
        var $seuCampoCpf = $("#data");
        $seuCampoCpf.mask('00/00/0000', {reverse: true});
    });
    $(document).ready(function () { 
        var $seuCampoCpf = $("#data1");
        $seuCampoCpf.mask('00/00/0000', {reverse: true});
    });
    $(document).ready(function () { 
        var $seuCampoCpf = $("#data2");
        $seuCampoCpf.mask('00/00/0000', {reverse: true});
    });
</script>



