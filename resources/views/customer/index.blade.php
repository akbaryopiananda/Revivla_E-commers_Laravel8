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
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3><i class="fa fa-history"></i> Riwayat Pemesanan</h3>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id User</th>
                                                <th>Nama</th>
                                                <th>No Telepon</th>
                                                <th>Alamat</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->nomor }}</td>
                                                <td>{{ $user->alamat }}</td>
                                                <td><a href="/detailuser/{{ $user->id }}"><button class="btn btn-primary">Detail</button></a></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</div>
@endsection
