@extends('Schema.layout')
@section('content')
@include('Schema.header_area')
  <!-- header area end -->
  <!-- page title area start -->
  <div class="page-title-area">
      <div class="row align-items-center">
          <div class="col-sm-6">
              <div class="breadcrumbs-area clearfix">
                  <h4 class="page-title pull-left">Dashboard</h4>
                  <ul class="breadcrumbs pull-left">
                      <li><a href="#">Home</a></li>
                      <li><span>Blog</span></li>
                  </ul>
              </div>
          </div>
          @include('Schema.user_profile')
      </div>
  </div>
  <!-- page title area end -->
  <div class="main-content-inner">
      <div class="row">
          <!-- table dark start -->
          <div class="col-lg-12 mt-5">
              <div class="card">
                  <div class="card-body">
                      <h4 class="header-title">Client</h4>
                      <div class="single-table">
                          <div class="table-responsive">
                              <table class="table text-center">
                                  <thead class="text-uppercase bg-dark">
                                      <tr class="text-white">
                                          <th scope="col">ID</th>
                                          <th scope="col">Name</th>
                                          <th scope="col">date</th>
                                          <th scope="col">price</th>
                                          <th scope="col">action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>09 / 07 / 2018</td>
                                          <td>$120</td>
                                          <td><i class="ti-trash"></i></td>
                                      </tr>
                                      <tr>
                                          <th scope="row">1</th>
                                          <td>jone</td>
                                          <td>09 / 07 / 2018</td>
                                          <td>$150</td>
                                          <td><i class="ti-trash"></i></td>
                                      </tr>
                                      <tr>
                                          <th scope="row">1</th>
                                          <td>Mark</td>
                                          <td>09 / 07 / 2018</td>
                                          <td>$120</td>
                                          <td><i class="ti-trash"></i></td>
                                      </tr>
                                      <tr>
                                          <th scope="row">1</th>
                                          <td>jone</td>
                                          <td>09 / 07 / 2018</td>
                                          <td>$150</td>
                                          <td><i class="ti-trash"></i></td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
     
@endsection