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
                      <li><span>Service List</span></li>
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
                          <h4 class="header-title">Tambah List Service</h4>
                         <form action="{{url('/site/admin/service')}}" method="post" enctype="multipart/form-data">
                            @csrf
                          <div class="form-group">
                              <label for="example-text-input" class="col-form-label">Nama Service</label>
                          <input class="form-control"  name="nama_service" type="text" value="">
                          </div>
                          <div class="form-group">
                              <label for="example-email-input" class="col-form-label">Ikon</label>
                              <input class="form-control"  name="icon" type="file">
                          </div>
                          <div class="form-group">
                              <label for="example-url-input" class="col-form-label">Deskripsi</label>
                              <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10"></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                  </div>
              </div>
            </form>
        </div>
      </div>
@endsection





