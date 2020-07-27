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
                      <li><span>Portfolio</span></li>
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
                <div class="card">
                  <div class="card-body">
                      <h4 class="header-title">Portfolio list</h4>
                  <a href="{{url('/site/admin/portfolio/create')}}" class="btn btn-primary btn-sm mb-2 float-right"><i class="fas fa-tambah "></i>Tambah</a>
                      <div class="single-table">
                          <div class="table-responsive">
                              <table class="table text-center">
                                  <thead class="text-uppercase bg-dark">
                                      <tr class="text-white">
                                          <th scope="col">No</th>
                                          <th scope="col">Nama Projek</th>
                                          <th scope="col">Gambar</th>
                                          <th scope="col">Slug</th>
                                          <th scope="col">Kategori</th>
                                          <th scope="col">action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      @foreach ($prt as $item)       
                                      <tr>
                                          <th scope="row">{{$loop->iteration}}</th>
                                          <td>{{$item->nama_project}}</td>
                                          <td><img src="{{\Storage::url($item->gambar)}}" width="90px" height="70px" alt=""></td>
                                          <td>{{$item->slug}}</td>
                                          <td>{{$item->kategori}}</td>
                                          <td>
                                          <form action="{{url('/site/admin/portfolio/delete/'. $item->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                                  <button type="submit" class="btn btn-danger btn-sm"><i class="ti-trash"></i></button>
                                              </form>
                                            
                                            </td>
                                        </tr>
                                        @endforeach 
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
                </div>  
              </div>
          </div>
      </div>
  </div>
     
@endsection