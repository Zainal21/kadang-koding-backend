<?php include "templates/header_auth.php";?>


<div class="page-container">            
  <div class="page-inner login-page">
      <div id="main-wrapper" class="container-fluid">
          <div class="row">
              <div class="col-sm-6 col-md-3 login-box">
                  <h4 class="login-title">Sign in to your account</h4>
                  <form>
                      <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                      </div>
                      <a href="index.html" class="btn btn-primary">Login</a>
                      <a href="register.html" class="btn btn-default">Register</a><br>
                      <a href="index.html" class="forgot-link">Forgot password?</a>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>


<?php include "templates/footer_auth.php";?>