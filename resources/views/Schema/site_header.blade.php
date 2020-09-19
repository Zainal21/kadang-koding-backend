<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{$setting->Nama_perusahaan}}</title>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{asset('Frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href="{{asset('Frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('Frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('Frontend/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href="{{asset('Frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <!--  Main CSS  -->
    <link href="{{asset('Frontend/assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <header id="header">
        <div class="container d-flex align-items-center">
            <div class="logo mr-auto">
                <img src="{{\Storage::url($setting->logo)}}" alt="" srcset="">
            </div>
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    @foreach ($menu as $item)
                    <li class="active"><a href="{{$item->url}}">{{$item->name}}</a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </header>
