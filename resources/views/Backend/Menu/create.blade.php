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
                      <li><span>Menu List</span></li>
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
                          <h4 class="header-title">Tambah Menu</h4>
                          <p class="text-muted font-14 mb-4">Here are examples of.</p>
                         <form action="{{url('/site/admin/menu')}}" method="post">
                            @csrf
                          <div class="form-group">
                              <label for="example-text-input" class="col-form-label">Nama</label>
                              <input class="form-control"  name="name" type="text">
                          </div>
                         
                         
                          <div class="form-group">
                              <label for="example-email-input" class="col-form-label">url</label>
                              <input class="form-control"  name="url" type="text">
                          </div>
                          <div class="form-group">
                              <label for="example-url-input" class="col-form-label">Status</label>
                              <select name="status" class="form-control" id="">
                                <option value="Aktif">Aktif</option>
                                <option value="Nonaktif">Nonaktif</option>
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





