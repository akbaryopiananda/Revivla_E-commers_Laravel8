@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"></h1>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                <!-- Content here -->
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                    </div>
                    <br>
                    <h3 class="card-title" style="text-align: center">Show Product</h3>
                    <!-- /.card-header -->
                    <!-- form start -->
                    
                    @csrf
                        <div class="card-body">
                            <img id="blah" src="/img/product/{{ $data->gambar }}" alt="your image" style="width: 30%; border-radius:10px; max-width:50%; margin-left:35%;" />
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text"  name="nama" value="{{ $data->nama }}" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="longtext"  name="deskripsi" value="{{ $data->deskripsi }}" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text"  name="harga" value="{{ $data->harga }}" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="text"  name="stok" value="{{ $data->stok }}" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="kategori_id">Kategori</label>
                                <input type="text"  name="kategori_id" value="{{ $data->kategori_id }}" class="form-control" disabled>
                            </div>
                            <a href="/product">
                            <div class="d-grid gap-2 col-6 mx-auto">
                                    <button type="submit" class="btn btn-primary">Back</button>
                                </div>
                            </a>
                        </div>
                </div>
                <!-- /.card -->
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>
@endsection