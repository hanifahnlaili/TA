<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="{{asset('logosdm18.ico')}}" type="image/ico" />

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="{{asset('tmp1/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <!-- <link href="{{asset('tmp1/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"> -->
    <link href="{{asset('tmp1/vendors/fontawesome1/css/all.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('tmp1/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('tmp1/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{asset('tmp1/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('tmp1/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('tmp1/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('tmp1/build/css/custom.min.css')}}" rel="stylesheet">

    <!--Regular Datatables CSS-->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

  </head>

  <body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index" class="site_title"><img src="{{asset('logosdm18.png')}}" style="width:41px; height:50px"> <span style="font-size:large"> Rapor SDM 18 Sby</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{asset('151811513039.jpg')}}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Hanifah Nurul Laili</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Rapor Online Dinas</h3>
                <ul class="nav side-menu">
                  <li><a target="_blank" href="https://rapor.dispendik.surabaya.go.id/"><i class="fas fa-school"></i>&emsp; Rapor Online Dinas Pendidikan Kota Surabaya</a>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Rapor Internal SDM 18 sby</h3>
                <ul class="nav side-menu">
                  <!-- <li><a><i class="fa fa-sitemap"></i> Kelas 3 <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="menu_kbmkls3">Ketuntasan Belajar Mengajar (KBM)</a>
                        </li>
                        
                        <li><a>Nilai Mata Pelajaran<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.html">Al-Qur'an Hadist</a>
                            </li>
                            <li><a href="#level2_1">Aqidah Akhlaq</a>
                            </li>
                            <li><a href="#level2_2">Tarikh Islam</a>
                            </li>
                            <li><a href="#level2_2">Fiqih Ibadah</a>
                            </li>
                            <li><a href="#level2_2">Kemuhammadiyahan</a>
                            </li>
                            <li><a href="#level2_2">Pendidikan Pancasila dan Kewarganegaraan</a>
                            </li>
                            <li><a href="#level2_2">Bahasa Indonesia</a>
                            </li>
                            <li><a href="#level2_2">Matematika</a>
                            </li>
                            <li><a href="#level2_2">Ilmu Pengetahuan Alam</a>
                            </li>
                            <li><a href="#level2_2">Ilmu Pengetahuan Sosial</a>
                            </li>
                            <li><a href="#level2_2">Seni Budaya dan Prakarya</a>
                            </li>
                            <li><a href="#level2_2">Pendidikan Jasmani, Olahraga, dan Kesehatan</a>
                            </li>
                            <li><a href="#level2_2">Bahasa Jawa</a>
                            </li>
                            <li><a href="#level2_2">Bahasa Arab</a>
                            </li>
                            <li><a href="#level2_2">Bahasa Inggris</a>
                            </li>
                            <li><a href="#level2_2">Teknologi Informasi dan Komunikasi</a>
                            </li>
                          </ul>
                        </li>
                    </ul>
                  </li> -->
                  <!-- <li><a href="#level1_2">Kompetensi Dasar (KD)</a>
                  </li>
                  <li><a href="#level1_1">Daftar Siswa</a>
                  </li>
                  <li><a href="#level1_2">Rekap Buku Penghubung</a>
                  </li> -->
                  @if(Auth::user()->tipe_user == 1)
                  <li><a><i class="fas fa-bars"></i>&emsp; Penilaian Individu Siswa &emsp;<span class="fas fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="sub_menu"><a href="level2.html">Pengembangan Diri</a>
                      </li>
                      <li><a href="#level2_1">Catatan Prestasi</a>
                      </li>
                      <li><a href="#level2_2">Kondisi Kesehatan</a>
                      </li>
                      <li><a href="#level2_1">Kepribadian</a>
                      </li>
                      <li><a href="#level2_2">Perkembangan Fisik</a>
                      </li>
                      <li><a href="#level2_1">Ketidakhadiran</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class="fas fa-user"></i>&emsp; Daftar User</a>
                  </li>     
                  <li><a href="{!! url('/menu_bukuphb3sunflo'); !!}"><i class="fas fa-book"></i>&emsp; Buku Penghubung</a>
                  </li>    
                  <li><a href="{!! url('/menu_siswa3sunflo'); !!}"><i class="fas fa-users"></i>&emsp; Daftar Siswa</a>
                  </li>
                  <li><a><i class="fas fa-database"></i>&emsp; Nilai Mata Pelajaran</a>
                    <!-- <ul class="nav child_menu">
                      <li class="sub_menu"><a href="level2.html">Al-Qur'an Hadist</a>
                      </li>
                      <li><a href="#level2_1">Aqidah Akhlaq</a>
                      </li>
                      <li><a href="#level2_2">Tarikh Islam</a>
                      </li>
                      <li><a href="#level2_2">Fiqih Ibadah</a>
                      </li>
                      <li><a href="#level2_2">Kemuhammadiyahan</a>
                      </li>
                      <li><a href="#level2_2">Pendidikan Pancasila dan Kewarganegaraan</a>
                      </li>
                      <li><a href="#level2_2">Bahasa Indonesia</a>
                      </li>
                      <li><a href="#level2_2">Matematika</a>
                      </li>
                      <li><a href="#level2_2">Ilmu Pengetahuan Alam</a>
                      </li>
                      <li><a href="#level2_2">Ilmu Pengetahuan Sosial</a>
                      </li>
                      <li><a href="#level2_2">Seni Budaya dan Prakarya</a>
                      </li>
                      <li><a href="#level2_2">Pendidikan Jasmani, Olahraga, dan Kesehatan</a>
                      </li>
                      <li><a href="#level2_2">Bahasa Jawa</a>
                      </li>
                      <li><a href="#level2_2">Bahasa Arab</a>
                      </li>
                      <li><a href="#level2_2">Bahasa Inggris</a>
                      </li>
                      <li><a href="#level2_2">Teknologi Informasi dan Komunikasi</a>
                      </li>
                    </ul> -->
                  </li>    
                  @endif        
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <!-- <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div> -->
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('151811513039.jpg')}}" alt="">Hanifah Nurul Laili
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <!-- <a class="dropdown-item"  href="javascript:;"> Profile</a>
                      <a class="dropdown-item"  href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a> -->
                  <!-- <a class="dropdown-item" >Help</a> -->
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-default"> Log Out &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<i class="fa fa-sign-out"></i></button>
                    <!-- <a class="dropdown-item" href="javascript:;"></a> -->
                  </form>
                  </div>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <!-- <div class="" style="display: inline-block;" > -->
            <div class="tile_count">
              @yield('konten')
            </div>
          <!-- </div> -->
          <!-- /top tiles -->

          <!-- <div class="row">
            <div class=" ">
            </div>

          </div> -->
          <!-- <br /> -->

          <!-- <div class="row">


            <div class="col-md-4 col-sm-4 ">
            </div>

            <div class="col-md-4 col-sm-4 ">
            </div>


            <div class="col-md-4 col-sm-4 ">
            </div>

          </div> -->


          
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right ">
            Copyright © 2021. Rapor <a href="https://www.sdm18sby.com">Sekolah Dasar Muhammadiyah 18 Surabaya</a> by Hanifah Nurul Laili
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('tmp1/vendors/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('tmp1/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('tmp1/vendors/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('tmp1/vendors/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('tmp1/vendors/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('tmp1/vendors/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('tmp1/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('tmp1/vendors/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('tmp1/vendors/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('tmp1/vendors/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('tmp1/vendors/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('tmp1/vendors/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('tmp1/vendors/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('tmp1/vendors/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('tmp1/vendors/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('tmp1/vendors/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('tmp1/vendors/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('tmp1/vendors/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('tmp1/vendors/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('tmp1/vendors/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('tmp1/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('tmp1/vendors/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('tmp1/vendors/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('tmp1/build/js/custom.min.js')}}"></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    
    <script>
    $(document).ready(function() {

        var table = $('#view').DataTable( {
            responsive: true,
            "order": [ 0, 'desc' ],
        } )
        .columns.adjust()
        .responsive.recalc();
    });

    </script>
	
  </body>
</html>
