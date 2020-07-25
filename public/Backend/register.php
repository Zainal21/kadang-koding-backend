<?php 
  include "templates/header_auth.php";
?>

  <div class="page-container">
      <div class="page-inner login-page">
          <div id="main-wrapper" class="container-fluid">
              <div class="row">
                  <div class="col-sm-6 col-md-3 login-box">
                      <h4 class="login-title">Create an account</h4>
                      <form>
                          <div class="form-group">
                              <label for="exampleInputFirstName">First name</label>
                              <input type="email" class="form-control" id="exampleInputFirstName">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputLastName">Last name</label>
                              <input type="email" class="form-control" id="exampleInputLastName">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputEmail">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail">
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword">
                          </div>
                          <a href="index.html" class="btn btn-primary">Register</a>
                          <a href="login.html" class="btn btn-default">Login</a><br>
                          <a href="index.html" class="forgot-link">Forgot password?</a>
                      </form>
                  </div>
              </div>
          </div>
      </div>
    </div>

<?php 
  include "templates/footer_auth.php";
?>