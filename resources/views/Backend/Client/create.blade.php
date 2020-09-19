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
                    <li><span>Client List</span></li>
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
                    <h4 class="header-title">Tambah Partner</h4>
                    <p class="text-muted font-14 mb-4">Here are examples of.</p>
                    <form action="{{url('/site/admin/client')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Nama Partner</label>
                            <input class="form-control" name="nama_partner" type="text">
                        </div>
                        <div class="form-group">
                            <label for="example-email-input" class="col-form-label">Logo</label>
                            <input class="form-control" name="logo" type="file">
                        </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
@endsection
