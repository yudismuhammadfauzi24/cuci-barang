@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-border-0">
                <div class="card-body">
                    <h5 class="font-weight-bold">
                        Data Transaksi
                    </h5>
                    <div class="mt-3 mb-3">
                        <a href="{{route('ambil-form.transaksi')}}" class="btn btn-info">Tambah Jenis</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No. Nota</th>
                                <th>Nama Pelanggan</th>
                                <th>Jenis</th>
                                <th>Total Biaya</th>
                                <th>Tanggal</th>
                                <th>option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>09735</td>
                                <td>yudis</td>
                                <td>mobil</td>
                                <td>0987</td>
                                <td>09862</td>
                                <td>
                                    <form action="" method="post">
                                    <a href="http://" class="btn btn-info btn-sm">Cetak Nota</a>
                                    <a href="http://" class="btn btn-warning btn-sm">Edit</a>
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection