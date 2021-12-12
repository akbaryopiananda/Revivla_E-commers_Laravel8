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
                    <h3 class="card-title" style="text-align: center">Edit Profile</h3>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $message }}
                        </div>
                    @endif
                    <img id="blah" src="{{ asset('img/profile/') }}/{{ Auth::user()->profil }}" alt="your image" style="width: 30%; border-radius:10px; max-width:50%; margin:auto;" />
                    <!-- /.card-header -->
                    <!-- form start -->
                    

                <form action="{{ route('edituser') }}" id="edituser" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Foto Profil</label>
                                <input accept="image/*" type='file' name="profil" id="imgInp" class="form-control"/>
                            </div>
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" name="name" value="{{ old('name', Auth::user()->name) }}" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="nomor">Nomor</label>
                                <input type="text" name="nomor" value="{{ old('nomor', Auth::user()->nomor) }}" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" value="{{ old('alamat', Auth::user()->alamat) }}" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" name="email" value="{{ old('email', Auth::user()->email) }}" class="form-control" id="" placeholder="Enter email">
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                        <!-- /.card-body -->

                    </form>
                </div>
                <!-- /.card -->
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>
@endsection