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
                    <h3 class="card-title" style="text-align: center">Edit Product</h3>
                    <!-- /.card-header -->
                    <!-- form start -->
                    

                <form action="/tambahproduct" method="POST" id="tambahproduct" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text"  name="nama" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text"  name="deskripsi" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text"  name="harga"  class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input type="text"  name="stok" class="form-control" id="">
                            </div>
                            <img id="blah" src="" alt="your image" style="width: 30%; border-radius:10px; max-width:50%; margin-left:35%;" />
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <input accept="image/*" type='file' name="gambar" id="imgInp" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="kategori_id">Kategori</label>
                                <select name="kategori_id" class="form-control">
                                    <option disabled>Pilih Category</option>
                                    <option></option>
                                    @foreach ($data as $cek)
                                    <option value="{{ $cek->id }}">{{ $cek->kategori }}</option>
                                    @endforeach
                                </select>
                                {{-- <input type="text"  name="kategori_id" value="" placeholder="" class="form-control" id=""> --}}
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>
@endsection