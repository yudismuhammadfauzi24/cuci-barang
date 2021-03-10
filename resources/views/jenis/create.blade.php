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
                                <label for="">jenis transaksi</label>
                                <input type="text" name="jenis transaksi" id="" class="form-contror">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">nominal</label>
                                <input type="text" name="nominal" id="" class="form-contror">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info">simpan transaksi</button>
                            <a href="{{route('tampilkan-data.jenis')}}" class="btn btn-warning">cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
