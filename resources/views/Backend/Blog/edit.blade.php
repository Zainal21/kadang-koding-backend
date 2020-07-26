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
                      <li><a href="index.html">Home</a></li>
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
                          <h4 class="header-title mb-2">Edit Artikel</h4>
                      <form action="{{url('/site/admin/blog/update/'. $blog->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                          <div class="form-group mt-4">
                              <label for="example-text-input" class="col-form-label">Judul Artikel</label>
                          <input class="form-control" type="text" name="judul" value="{{$blog->judul}}">
                          </div>
                         
                         
                          <div class="form-group">
                              <label for="example-email-input" class="col-form-label">Isi</label>
                           <textarea name="isi" class="form-control" id="" cols="30" rows="10">{{$blog->isi}}</textarea>
                          </div>
                          <div class="form-group">
                              <label for="example-url-input" class="col-form-label">Status</label>
                              <select name="status" class="form-control" id="">
                                <option value="Publish">Publish</option>
                                <option value="Draft">Draft</option>
                                <option value="unPublish">unPublish</option>
                              </select>
                          </div>
                       
                      </div>
                  </div>
              </div>
              <div class="col-6 mt-5">
                <div class="card">
                 <div class="card-body">
                   <div class="form-group">
                     <label for="">gambar Sebelumnya</label>
                   <img src="{{\Storage::url($blog->photo)}}" width="600px" height="404px" alt="">
                   </div>
                     <div class="form-group">
                         <label for="inputPassword" class="">Gambar</label>
                         <input type="file" class="form-control" name="photo">
                     </div>
                     <button type="submit" class="btn btn-success">Simpan</button>
                 </div>
                </div> 
              </div>
            </form>
        </div>
    </div>
     
@endsection





