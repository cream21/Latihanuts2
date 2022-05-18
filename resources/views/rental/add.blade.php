@extends('template.master-rental')

@section('judul','tambah-rental')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header bg-primary" style="float: right;">
                            <h3 class="card-title">Tambah Data rental</h3>
                        </div>
                        <div class="card-body">
                            @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form action="{{ route('rental.save-rental') }}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="iidd">Id Barang</label>
                                    <input type="number" id="iidd" name="id_barang" class="form-control" value="{{old('id_barang')}}" autocomplete="off" autofocus>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="nb">Nama Barang</label>
                                    <input type="text" id="nb" name="nama_barang" class="form-control" value="{{old('nama_barang')}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="np">Nama Penyewa</label>
                                    <input type="text" id="np" name="nama_penyewa" class="form-control" value="{{old('nama_penyewa')}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="hs">Harga Sewa</label>
                                    <input type="text" id="hs" name="harga_sewa" class="form-control" value="{{old('harga_sewa')}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="js">Jumlah Sewa</label>
                                    <input type="number" id="js" name="jumlah_sewa" class="form-control" value="{{old('jumlah_sewa')}}" autocomplete="off">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="kt">Keterangan</label>
                                    <textarea name="keterangan" id="kt" cols="30" rows="2" autocomplete="off">{{old('keterangan')}}</textarea >
                                </div>

                                <input type="submit" class="btn btn-success" name="submit" value="Simpan Data">
                                <a class="btn btn-primary" href="{{ url('data-rental') }}" role="button">Kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection