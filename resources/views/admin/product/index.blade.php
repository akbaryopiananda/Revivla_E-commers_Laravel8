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
            <div class="col">
                <!-- Content here -->
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                    </div>
                    <br>
                    <h3 class="card-title" style="text-align: center">Product</h3>
                    <!-- /.card-header -->
                    <div class="container">
                        <div>
                            <a href="/addproduct">
                                <button type="button" class="btn btn-success btn-sm"><i class="fas fa-plus"></i>Tambah</button>
                            </a>
                        </div>
                        <br>
                        <table class="table" style="text-align: center">
                            <thead class="table-dark">
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Deskripsi</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            @foreach ($data as $pro)
                                
                            
                            <tbody>
                              <tr>
                                <th scope="row">{{ $pro->id }}</th>
                                <td>{{ $pro->nama }}</td>
                                <td>{{ $pro->deskripsi }}</td>
                                <td>{{ $pro->harga }}</td>
                                <td>{{ $pro->stok }}</td>
                                <td>{{ $pro->gambar }}</td>
                                <td>{{ $pro->kategori->kategori }}</td>
                                <td>
                                    <a href="/showproduct/{{ $pro->id }}">
                                        <button type="button" class="btn btn-info btn-sm"><i class="far fa-eye"></i></button>
                                    </a>
                                    <a href="/editproduct/{{ $pro->id }}">
                                        <button type="button" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button>
                                    </a>
                                    <a href="/deleteproduct/{{ $pro->id }}">
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </a>
                                </td>
                              </tr>
                            </tbody>

                            @endforeach
                        </table>
                      </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>
@endsection