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
                              <li><span>Dashboard</span></li>
                          </ul>
                      </div>
                  </div>
                @include('Schema.user_profile')
              </div>
          </div>
          <!-- page title area end -->
          <div class="main-content-inner">
              <!-- sales report area start -->
              <div class="sales-report-area mt-5 mb-5">
                  <div class="row">
                      <div class="col-md-6">
                          <div class="single-report mb-xs-30">
                              <div class="s-report-inner pr--20 pt--30 mb-3">
                                  <div class="icon"><i class="ti-menu-alt"></i></div>
                                  <div class="s-report-title d-flex justify-content-between">
                                      <h4 class="header-title mb-0">Menu</h4>
                                       <p>Jumlah</p>
                                  </div>
                                  <div class="d-flex justify-content-between pb-2">
                                  <h1>{{$menu}}</h1>   
                                  </div>
                              </div>
                              <canvas id="coin_sales2" height="100"></canvas>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="single-report">
                              <div class="s-report-inner pr--20 pt--30 mb-3">
                                  <div class="icon"><i class="ti-desktop"></i></div>
                                  <div class="s-report-title d-flex justify-content-between">
                                      <h4 class="header-title mb-0">Porfolio</h4>
                                       <p>Jumlah</p>
                                  </div>
                                  <div class="d-flex justify-content-between pb-2">
                                  <h1>{{$portfolio}}</h1>  
                                  </div>
                              </div>
                              <canvas id="coin_sales3" height="100"></canvas>
                          </div>
                      </div>
                  </div>
              </div>
          </div> 
@endsection