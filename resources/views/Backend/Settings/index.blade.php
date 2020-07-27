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
                      <li><span>Setting</span></li>
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
              <div class="col-6 mt-5">
                  <div class="card">
                      <div class="card-body">
                          <h4 class="header-title">Setting Website</h4>
                          <p class="text-muted font-14 mb-4">Here are examples of <code>.form-control</code> applied to each textual HTML5 <code>&lt;input&gt;</code> <code>type</code>.</p>
                      <form action="{{url('/site/admin/settings/'. $stg->id)}}" method="post" enctype="multipart/form-data">
                              @csrf
                              @method('put')
                         
                          <div class="form-group">
                              <label for="example-text-input" class="col-form-label">Nama Perusahaan</label>
                              <input class="form-control" type="text" name="Nama_perusahaan" value="{{$stg->Nama_perusahaan}}">
                          </div>
                          <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Tagline</label>
                          <input class="form-control" type="text" name="tagline" value="{{$stg->tagline}}">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10">{{$stg->deskripsi}}</textarea>
                        </div>
                         
                          <div class="form-group">
                              <label for="example-email-input" class="col-form-label">Email</label>
                              <input class="form-control" type="email" value="{{$stg->email}}" name="email">
                          </div>
                          <div class="form-group">
                              <label for="example-url-input" class="col-form-label">URL Website</label>
                          <input class="form-control" type="text" name="url_website" value="{{$stg->url_website}}">
                          </div>
                          <div class="form-group">
                              <label for="example-tel-input" class="col-form-label">Phone</label>
                              <input class="form-control" name="phone" type="number" value="{{$stg->phone}}">
                          </div>  
                      </div>
                  </div>
              </div>
              <div class="col-6 mt-5">
                <div class="card">
                 <div class="card-body">
                    <div class="form-group">
                        <label for="">Logo Sebelumnya</label>
                    <img 
                    src="@if ($stg->logo)
                    {{ \Storage::url($stg->logo) }}  
                         @else
                    {{asset('admin/assets/images/blog/post-thumb1.jpg')}}
                     @endif"
                     width="400px" height="200px" alt="">
                      </div>
                      <div class="form-group">
                        <label for="">Cover Sebelumnya</label>
                         <img 
                         src="@if ($stg->Hero_cover)
                        {{ \Storage::url($stg->Hero_cover) }}  
                             @else
                        {{asset('admin/assets/images/blog/post-thumb1.jpg')}}
                         @endif"
                         width="400px" 
                         height="200px" alt="">
                      </div>
                     <div class="form-group">
                         <label for="example-search-input" class="col-form-label">Logo</label>
                         <input class="form-control" type="file" name="logo" required`>
                     </div>
                     <div class="form-group">
                         <label for="inputPassword" class="">Cover atau Hero Image</label>
                         <input type="file" class="form-control" name="Hero_Cover" required>
                     </div>
                     <button type="submit" class="btn btn-success">Simpan</button>
                 </div>
 
                </div>
                  
              </div>
            </form>
    </div>
  </div>
     
@endsection





