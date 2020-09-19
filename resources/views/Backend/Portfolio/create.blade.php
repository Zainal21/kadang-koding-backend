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
                      <li><a href="{{url('/site/admin')}}">Home</a></li>
                      <li><span>Portfolio List</span></li>
                  </ul>
              </div>
          </div>
          @include('Schema.user_profile')
      </div>
  </div>
  <!-- page title area end -->
  <div class="main-content-inner">
          <div class="row">
              <!-- Textual inputs start -->
              <div class="col-lg mt-5">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="header-title">Portfolio List</h4>
                         <form action="{{url('/site/admin/portfolio')}}" method="post" enctype="multipart/form-data">
                            @csrf
                          <div class="form-group">
                              <label for="example-text-input" class="col-form-label">Nama Projek</label>
                              <input class="form-control"  name="nama_project" type="text">
                          </div>
                         
                         
                          <div class="form-group">
                              <label for="example-email-input" class="col-form-label">Gambar</label>
                              <input class="form-control"  name="gambar" type="file">
                          </div>
                          <div class="form-group">
                              <label for="example-url-input" class="col-form-label">kategori</label>
                              <select name="kategori" class="form-control" id="">
                                <option value="filter-app">Compay Profile</option>
                                <option value="filter-card">E-Commerce</option>
                                <option value="filter-web">Mobile App</option>
                              </select>
                          </div>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                  </div>
              </div>
            </form>
        </div>
      </div>  
@endsection





