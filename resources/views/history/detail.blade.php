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
                                @if($pesanan->status == 1)
                                <div class="card-body">
                                    <h3>Sukses Check Out</h3>
                                    <h5>Pesanan anda sudah sukses dicheck out selanjutnya untuk pembayaran silahkan transfer di rekening <strong>Bank BRI Nomer Rekening : 1234-4321123-123</strong> dengan nominal : <strong>Rp. {{ number_format($pesanan->kode+$pesanan->jumlah_harga) }}</strong></h5>
                                    <h6>Konfirmasi Bukti Pembayaran melalui Whatsapp <a href=""><button class="btn btn__secondary"><i class="fab fa-whatsapp"></i></button></a></h6>
                                </div>
                                @elseif ($pesanan->status == 2)
                                <div class="card-body">
                                    <h5>
                                        Sudah dibayar, Dalam Proses Pengiriman <i class="fas fa-shipping-fast"></i>
                                    </h5>
                                </div>
                                @else
                                <div class="card-body">
                                    <h5>
                                        Telah Dikirim <i class="fas fa-clipboard-check"></i>
                                    </h5>
                                </div>
                                
                                @endif
                            </div>
                            <div class="card mt-2">
                                <div class="card-body">
                                    <h3><i class="fa fa-shopping-cart"></i> Detail Pemesanan</h3>
                                    <a href="/history" class="btn btn-primary"><i class="fas fa-arrow-left"></i></i> Kembali</a>
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
