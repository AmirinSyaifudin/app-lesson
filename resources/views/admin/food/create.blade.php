@extends('admin.templates.default')

@section('content')

    <div class="box">
        <div class="box-header">
            <h2 class="box-title">ADD MAKANAN</h2>
        </div>

            <div class="box-body">
                <form action="{{ route('admin.food.store') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                    <div class="form-group @error('nama') has-error @enderror">
                        <label for="">NAMA MAKANAN</label>
                        <!-- //value="{{ old('name')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Makanan" value="{{ old('nama') }}">
                        @error('nama')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('harga') has-error @enderror">
                        <label for="">HARGA MINUMAN</label>
                        <!-- //value="{{ old('name')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                        <input type="text" name="harga" class="form-control" placeholder="Masukkan Jumlah Harga" value="{{ old('harga') }}">
                        @error('harga')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group @error('qty') has-error @enderror">
                        <label for="">QTY</label>
                        <!-- //value="{{ old('name')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                        <input type="text" name="qty" class="form-control" placeholder="Masukkan Nama Makanan" value="{{ old('qty') }}">
                        @error('qty')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>
                    <div class="form-group @error('cover') has-error @enderror">
                        <label for="">GAMBAR</label>
                        <input type="file" name="cover" class="form-control">
                        @error('cover')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Tambah" class ="btn btn-primary">
                        <button type="reset" class="btn btn-warning">Ulang</button>
                        <a href="{{ route('admin.food.index') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            </div>
    </div>
@endsection


