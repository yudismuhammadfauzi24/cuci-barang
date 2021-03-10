@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="alert alert-danger">
                </div>
                    <h5 class="font-weught-bold">
                    Perhatian
                    </h5>
                    <h5>harap masukan data dengan benar</h5>
                    <form action="" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">No. Nota</label>
                                <input type="text" name="no nota" id="" class="form-contror">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">jenis transaksi</label>
                                <select name="no nota" id="" class="form-contror">
                                    <option value="">--pilih jenis transaksi--</options>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">biaya</label>
                                <input type="text" name="biaya" id="" class="form-contror">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">bayar</label>
                                <input type="text" name="bayar" id="" class="form-contror">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">nama pelanggan</label>
                                <input type="text" name="nama pelanggan" id="" class="form-contror">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info">simpan transaksi</button>
                            <a href="{{route('tampilkan-data.transaksi')}}" class="btn btn-warning">cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
