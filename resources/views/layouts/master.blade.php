<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>coronaviruswonosobo | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{ asset('frontend') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('layouts.header')
  <!-- Left side column. contains the logo and sidebar -->
  @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Data
       
      </h1>
      <ol class="breadcrumb">
        
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
           
            <div class="icon">
             
            </div>
         
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
         
            <div class="icon">
              
            </div>
            
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
         
            
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
           
             
              <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>
            </ul>
            <div class="tab-content no-padding">
             
          <!-- /.nav-tabs-custom -->

          <!-- Chat box -->
          

                 

          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
             <section class="content-header">
              

          <h1 class="box-title">
          
          Nama Fasilitas Kesehatan *
          
          </h1>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list">
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
            </div>
            <br>
            <div class="container-contact100-form-btn">
            
                <div class="box box-primary">
            <div class="box-header">
             <section class="content-header">
             <h1 class="box-title">
          
             Deskripsi *
          
          </h1>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  
                </ul>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
              <ul class="todo-list">
              <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
             </div>
            </div>
            <br>
            <div class="container-contact100-form-btn">
            
                <div class="box box-primary">
            <div class="box-header">
             <section class="content-header">
              

         
              

          <h class="box-title">
          
          Jenis Fasilitas Kesehatan *
          
          </h>

              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  
                </ul>
              </div>
            </div>
           
            <li>
                      
                  <input type="checkbox" value="">
                  <span class="text">IGD</span>
                
                  
                </li>
                <li>
                      
                      <input type="checkbox" value="">
                      <span class="text">RADIOLOGI</span>
                    
                      
                    </li>
                    <li>
                      
                      <input type="checkbox" value="">
                      <span class="text">APOTEK</span>
                    
                      
                    </li>
                    <li>
                      
                      <input type="checkbox" value="">
                      <span class="text">Medical Check Up (MCU)</span>
                    
                      
                    </li>
                    <li>
                      
                      <input type="checkbox" value="">
                      <span class="text">POLIKLINIK</span>
                    
                      
                    </li>
                    <li>
                      
                      <input type="checkbox" value="">
                      <span class="text">Lainnya</span>
                    
                      
                    </li>
                    <div class="box box-primary">
            <div class="box-header">
             <section class="content-header">
              

          <h1 class="box-title">
          
          Nama Fasilitas Kesehatan *
          
          </h1>
              <div class="box-tools pull-right">
                <ul class="pagination pagination-sm inline">
                  
                </ul>
              </div>
            </div>       
           
            <li>
                      
                  <input type="checkbox" value="">
                  <span class="text">Rapid</span>
                
                  
                </li>
                <li>
                      
                      <input type="checkbox" value="">
                      <span class="text">PCR/Swab</span>
                      
                      
                    </li>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.9121912358037!2d109.89706146414959!3d-7.363739374503447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa0ffa9d5511f%3A0x78d8c651a48816ac!2sRSUD%20KRT.%20Setjonegoro%20Wonosobo!5e0!3m2!1sid!2sid!4v1601429216471!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    

          
               
                
            <!-- /.box-body -->
            <div class="box-footer clearfix no-border">
            <a class="nav-link" href="{{ ('Login_v16') }}/index.html">
              <button type="button" class="btn btn-default pull-right"></i>submit</button>
            </div>
          </div>
          <!-- /.box -->

          <!-- quick email widget -->
        

        </section>
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->
        <section class="col-lg-5 connectedSortable">

          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient">
            <div class="box-header">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip"
                        title="Date range">
                  <i class="fa fa-calendar"></i></button>
                <button type="button" class="btn btn-primary btn-sm pull-right" data-widget="collapse"
                        data-toggle="tooltip" title="Collapse" style="margin-right: 5px;">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->

              <i class="fa fa-map-marker"></i>

              <h3 class="box-title">
                Visitors
              </h3>
            </div>
            <div class="box-body">
              <div id="world-map" style="height: 250px; width: 100%;"></div>
            </div>
            <!-- /.box-body-->
            <div class="box-footer no-border">
              <div class="row">
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-1"></div>
                  <div class="knob-label">Visitors</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">
                  <div id="sparkline-2"></div>
                  <div class="knob-label">Online</div>
                </div>
                <!-- ./col -->
                <div class="col-xs-4 text-center">
                  <div id="sparkline-3"></div>
                  <div class="knob-label">Exists</div>
                </div>
                <!-- ./col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->

          <!-- solid sales graph -->
       
          <!-- /.box -->

          <!-- Calendar -->
       
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 @include('layouts.footer') 
  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('frontend') }}/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('frontend') }}/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('frontend') }}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="{{ asset('frontend') }}/bower_components/raphael/raphael.min.js"></script>
<script src="{{ asset('frontend') }}/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('frontend') }}/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{ asset('frontend') }}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ asset('frontend') }}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('frontend') }}/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('frontend') }}/bower_components/moment/min/moment.min.js"></script>
<script src="{{ asset('frontend') }}/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{ asset('frontend') }}/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('frontend') }}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{ asset('frontend') }}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{ asset('frontend') }}/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('frontend') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('frontend') }}/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('frontend') }}/dist/js/demo.js"></script>
</body>
</html>
