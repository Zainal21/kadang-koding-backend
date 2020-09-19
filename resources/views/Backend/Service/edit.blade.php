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
        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Service List</h4>
                    <form action="{{url('/site/admin/service/update/'.$data->id)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Nama Service</label>
                            <input class="form-control" name="nama_service" type="text" value="{{$data->nama_service}}">
                        </div>

                        <div class="form-group">
                            <label for="">Icon Sebelumnya</label>
                            <img src="{{\Storage::url($data->icon)}}" width="400px" class="img-fluid d-block"
                                height="200px" alt="">
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="example-email-input" class="col-form-label">Ikon</label>
                        <input class="form-control" name="icon" type="file" required>
                    </div>
                    <div class="form-group">
                        <label for="example-url-input" class="col-form-label">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control" id="" cols="30"
                            rows="10">{{$data->deskripsi}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
