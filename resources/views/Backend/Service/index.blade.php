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
                      <li><span>Service</span></li>
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
                <h4 class="header-title">Service list</h4>
                <a href="{{url('/site/admin/service/create')}}" class="btn btn-primary btn-sm mb-2 float-right"><i class="fas fa-tambah "></i>Tambah</a>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class="text-uppercase bg-dark">
                                <tr class="text-white">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Service</th>
                                    <th scope="col">icon</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($service as $item)     
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$item->nama_service}}</td>
                                    <td><img src="{{\Storage::url($item->icon)}}" width="80px" height="60px" alt=""></td>
                                    <td>{{$item->deskripsi}}</td>
                                    <td>
                                    <form action="{{url('/site/admin/service/delete/'. $item->id)}}"  class="d-inline" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="ti-trash"></i></button>
                                    </form>
                                <a href="{{url('/site/admin/service/edit/'. $item->id)}}" class="btn btn-info btn-sm"><i class="ti-trash"></i></a></td>
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
     
@endsection