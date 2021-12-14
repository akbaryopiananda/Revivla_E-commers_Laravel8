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
                    <h3 class="card-title" style="text-align: center">Category</h3>
                    <!-- /.card-header -->
                    <div class="container">
                        <div>
                            <a href="/addcategory">
                                <button type="button" class="btn btn-success btn-sm"><i class="fas fa-plus"></i>Tambah</button>
                            </a>
                        </div>
                        <br>
                        <table class="table" style="text-align: center">
                            <thead class="table-dark">
                              <tr>
                                <th scope="col">id</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($data as $row)
                              
                                <tr>
                                <th scope="row">{{ $row->id }}</th>
                                <td>{{ $row->kategori }}</td>
                                <td>
                                    <a href="/editcategory/{{ $row->id }}">
                                        <button type="button" class="btn btn-primary btn-sm"><i class="far fa-edit"></i></button>
                                    </a>
                                    <a href="/deletecategory/{{ $row->id }}">
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </a>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="container">
                        {{ $data->links("pagination::bootstrap-4") }}
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>
@endsection