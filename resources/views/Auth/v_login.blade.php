@extends('Schema.auth_structure')
@section('content')
    
<div class="page-container">            
  <div class="page-inner login-page">
      <div id="main-wrapper" class="container-fluid">
          <div class="row">
              <div class="col-sm-6 col-md-3 login-box">
                  <h4 class="login-title">Admin Panel</h4>
                  <form action="" method="POST">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                      </div>
                      <button type="submit" class="btn btn-primary">Login</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection