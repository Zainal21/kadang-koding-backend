<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/default-css.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('admin/assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu a}rea start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                  <h4 class="text-white"><strong>Admin Panel</strong></h4>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Manage
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="{{url('/site/admin/menu')}}">Menu</a></li>
                                    <li><a href="{{url('/site/admin/client')}}">Client</a></li>
                                    <li><a href="{{url('/site/admin/service')}}">Service</a></li>
                                    <li><a href="{{url('/site/admin/portfolio')}}">Portfolio</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{url('/site/admin/blog')}}" aria-expanded="true"><i class="fa fa-align-left"></i> <span>Artikel</span></a>
                           
                            </li>
                          
                            <li>
                                <a href="{{url('/site/admin/settings')}}" aria-expanded="true"><i class="fa fa-align-left"></i> <span>Setting</span></a>
                           
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
          @yield('content')
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2020. Develop by <a href="#">Kadang Koding Indonesia</a>  All right reserved. Develop by <a href="#">Muhamad Zainal Arifin</a>.</p>
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
   
    <!-- jquery latest version -->
    <script src="{{asset('admin/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
    <!-- bootstrap 4 js -->
    <script src="{{asset('admin/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/jquery.slicknav.min.js')}}"></script>

    {{-- <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script> --}}

      <!-- upload -->
    <script src="{{asset('Backend/assets/plugins/plupload/js/plupload.full.min.js')}}"></script>
    <script src="{{asset('Backend/assets/plugins/plupload/js/jquery.plupload.queue/jquery.plupload.queue.min.js')}}"></script>

    <script src="{{asset('Backend/assets/js/pages/form-file-upload.js')}}"></script>
    
    
    <!-- datatable -->
    <script src="{{asset('Backend/assets/plugins/datatables/js/jquery.datatables.min.js')}}"></script>

    <script src="{{asset('Backend/assets/js/pages/table-data.js')}}"></script>



      <!-- toastr -->
      <script src="{{asset('Backend/assets/plugins/toastr/toastr.min.js')}}"></script>
      <script src="{{asset('Backend/assets/js/pages/ui-notifications.js')}}"></script>
    <!-- all line chart activation -->
    <script src="{{asset('admin/assets/js/line-chart.js')}}"></script>
    <!-- all pie chart -->
    <script src="{{asset('admin/assets/js/pie-chart.js')}}"></script>
    <!-- others plugins -->
    <script src="{{asset('admin/assets/js/plugins.js')}}"></script>
    <script src="{{asset('admin/assets/js/scripts.js')}}"></script>
</body>

</html>
