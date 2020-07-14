@extends('admin.templates.default')
@section('content')

<div class="box">
    <div class="box-header">
        <h2 class="box-title">TAMBAH DATA KUDA</h2>
    </div>

        <div class="box-body">
            <form action="{{ route('admin.kuda.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label for="">NAMA KUDA</label>
                    <!-- //value="{{ old('name')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                    <input type="text" name="nama_kuda" class="form-control" placeholder="Masukkan Nama Kuda"
                    value="{{ $kuda->nama_kuda ?? old('nama-kuda') }}">
                </div>

                <div class="form-group">
                    <label for="">JENIS KUDA</label>
                    <!-- //value="{{ old('name')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                    <input type="text" name="jenis_kuda" class="form-control" placeholder="Masukkan Jenis Kuda"
                    value="{{ $kuda->jenis_kuda ?? old('jenis-kuda') }}">
                </div>

                {{--  <div class="form-group @error('cover') has-error @enderror">
                    <label for="">GAMBAR</label>
                    <input type="file" name="cover" class="form-control">
                    @error('cover')
                        <span class="help-block">{{ $message}}</span>
                    @enderror
                </div>  --}}

                <div class="form-group">
                    <input type="submit" value="Simpan" class ="btn btn-primary">
                    <button type="reset" class="btn btn-warning">Ulang</button>
                    <a href="{{ route('admin.kuda.index') }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
</div>
@endsection
