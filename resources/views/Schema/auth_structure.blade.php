
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="stacks">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Login</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="{{asset('Backend/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('Backend/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
        <link href="{{asset('Backend/assets/plugins/icomoon/style.css')}}" rel="stylesheet">
        <link href="{{asset('Backend/assets/plugins/uniform/css/default.css')}}" rel="stylesheet"/>
        <link href="{{asset('Backend/assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet"/>
      
        <!-- Theme Styles -->
        <link href="{{asset('Backend/assets/css/space.min.css')}}" rel="stylesheet">
        <link href="{{asset('Backend/assets/css/custom.css')}}" rel="stylesheet">

    </head>
    <body>
        
        @yield('content')

        <!-- Javascripts -->
        <script src="{{asset('Backend/assets/plugins/jquery/jquery-3.1.0.min.js')}}"></script>
        <script src="{{asset('Backend/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('Backend/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('Backend/assets/plugins/uniform/js/jquery.uniform.standalone.js')}}"></script>
        <script src="{{asset('Backend/assets/plugins/switchery/switchery.min.js')}}"></script>
        <script src="{{asset('Backend/assets/js/space.min.js')}}"></script>
    </body>
</html>