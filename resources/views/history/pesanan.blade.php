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
                                                <th>No Pesanan</th>
                                                <th>Id Customer</th>
                                                <th>Tanggal</th>
                                                <th>Status</th>
                                                <th>Jumlah Harga</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=0; ?>
                                            @foreach($pesanans as $pesanan)
                                            @if ($pesanan->status ==1)

                                            <tr>
                                                <td>{{ $pesanan->id }}</td>
                                                <td>{{ $pesanan->user_id }} <a href="/detailuser/{{ $pesanan->user_id }}">detail!</a></td>
                                                <td>{{ $pesanan->tanggal }}</td>
                                                <td>
                                                    @if($pesanan->status == 1)
                                                    Belum dibayar
                                                    @else
                                                    Sudah dibayar, Segera Lakukan Pengiriman <i class="fas fa-shipping-fast"></i>
                                                    @endif
                                                </td>
                                                <td>Rp. {{ number_format($pesanan->jumlah_harga+$pesanan->kode) }}</td>
                                                <td>
                                                    <a href="{{ url('pesanans') }}/{{ $pesanan->id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
                                                </td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="container">
                                    {{ $pesanans->links("pagination::bootstrap-4") }}
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
