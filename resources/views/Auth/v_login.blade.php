<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Kadang Koding - Login</title>
    <!-- Favicon -->
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('admin/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('admin/fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('admin/argon.css')}}" type="text/css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link href="{{asset('Backend/assets/plugins/toastr/toastr.min.css')}}" rel="stylesheet">
      
</head>

<body class="bg-default">
    <!-- Navbar -->
    <!-- Main content -->
    <div class="main-content">
        <!-- Page content -->
        <div class="container mt--8 pb-5 py-7 py-lg-8 pt-lg-9">
            <div class="row justify-content-center mt-3">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0 animate__bounceIn" style="animation-delay: 0.2s">
                        <div class="card-body px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                               <h1><strong>Kadang Koding <br> Indonesia</strong></h1>
                               <hr>
                            </div>
                            <form action="{{url('/procees_login')}}" method="POST" class="form-group">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Username</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                        autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        name="password">
                                </div>
                                <button type="submit" id="btn-login" class="btn btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="py-5" id="footer-main">
        <div class="container">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-6">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2020 <a href="https://www.github.com/Zainal21" class="font-weight-bold ml-1"
                            target="_blank">Muhamad Zainal Arifin</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="{{asset('Backend/assets/plugins/jquery/jquery-3.1.0.min.js')}}"></script>
    <script src="{{asset('Backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Backend/assets/js/space.min.js')}}"></script>
    <script src="{{asset('Backend/assets/plugins/toastr/toastr.min.js')}}"></script>
    <script src="{{asset('admin/argon.js')}}"></script>
    <script src="{{asset('Backend/assets/js/sweetalert2.all.min.js')}}"></script>
        <script src="{{asset('Backend/assets/js/login.js')}}"></script>
     
</body>
</html>