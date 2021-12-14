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

    <div class="container active">
        <div class="row">
            <div class="col"></div>
            <div class="col-8">
                <!-- Content here -->
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                    </div>
                    <br>
                    <h3 class="card-title" style="text-align: center">Detail User</h3>
                    @foreach ($data as $user)
                        
                    
                    <img src="{{ asset('img/profile/') }}/{{ $user->profil }}" alt="your image" style="width: 30%; border-radius:10px; max-width:50%; margin:auto;" />
                    <!-- /.card-header -->
                    <!-- form start -->
                    
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="name" value="{{ $user->name }}" class="form-control" id="" disabled>
                            </div>
                            <div class="form-group">
                                <label for="nomor">Nomor</label>
                                <input type="text" name="nomor" value="{{ $user->nomor}}" class="form-control" id="" disabled>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" value="{{{ $user->alamat }}}" class="form-control" id="" disabled>
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="" disabled>
                            </div>
                            <a href="/pesanan"><button type="submit" class="btn btn-primary">Kembali Pesanan</button></a>
                            <a href="/customer"><button type="submit" class="btn btn-primary">Daftar Custumer</button></a>
                        </div>
                        @endforeach
                        <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>
@endsection