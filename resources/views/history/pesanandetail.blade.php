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
                                    <h5>Pesanan @if($pesanan->status == 1)
                                        <form action="{{ url('pembayaran') }}/{{ $pesanan->id }}" method="post">
                                        Belum dibayar
                                            @csrf
                                            <button class="btn btn-success"><i class="fa fa-info"></i>Pembayaran Diterima</a></button>
                                        </form>
                                        @elseif($pesanan->status == 2)
                                        <form action="{{ url('pengiriman') }}/{{ $pesanan->id }}" method="post">
                                            @csrf
                                        Sudah dibayar, Segera Lakukan Pengiriman <i class="fas fa-shipping-fast"></i> <button class="btn btn-success"><i class="fa fa-info"></i>Pesanan Dikirim</a></button>
                                        </form> 
                                        @else
                                        Dikirim <i class="fas fa-clipboard-check"></i>
                                        @endif</strong>
                                    </h5>
                                </div>
                            </div>
                            <div class="card mt-2">
                                <div class="card-body">
                                    <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                                    @if(!empty($pesanan))
                                    <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Nama Produk</th>
                                                <th>Jumlah</th>
                                                <th>Harga</th>
                                                <th>Total Harga</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            @foreach($pesanan_details as $pesanan_detail)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>
                                                    <img src="/img/product/{{ $pesanan_detail->produk->gambar }}" width="100" alt="...">
                                                </td>
                                                <td>{{ $pesanan_detail->produk->nama }}</td>
                                                <td>{{ $pesanan_detail->jumlah }}</td>
                                                <td align="right">Rp. {{ number_format($pesanan_detail->produk->harga) }}</td>
                                                <td align="right">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
                                                
                                            </tr>
                                            @endforeach
                
                                            <tr>
                                                <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                                                <td align="right"><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                                                
                                            </tr>
                                            <tr>
                                                <td colspan="5" align="right"><strong>Kode Unik :</strong></td>
                                                <td align="right"><strong>Rp. {{ number_format($pesanan->kode) }}</strong></td>
                                                
                                            </tr>
                                             <tr>
                                                <td colspan="5" align="right"><strong>Total yang harus ditransfer :</strong></td>
                                                <td align="right"><strong>Rp. {{ number_format($pesanan->kode+$pesanan->jumlah_harga) }}</strong></td>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                    @endif
                
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
