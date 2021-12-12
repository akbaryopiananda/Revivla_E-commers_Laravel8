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
                    <h3 class="card-title" style="text-align: center">Edit Password</h3>
    
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" action="/ubahpassword">
                        @csrf
                        <div class="card-body">
                            @foreach ($errors->all() as $error)
                                <p class="alert alert-danger">{{ $error }}</p>
                            @endforeach 

                            <div class="form-group">
                                <label for="password">Current Password</label>
                                <input placeholder="Old Password" id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                            </div>
    
                            <div class="form-group">
                                <label for="password">New Password</label>
                                <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                                
                            </div>
    
                            <div class="form-group">
                                <label for="password">New Confirm Password</label>
                                <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
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