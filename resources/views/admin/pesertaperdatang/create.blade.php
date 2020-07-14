@extends('admin.templates.default')
@section('content')

<div class="box">
    <div class="box-header">
        <h2 class="box-title">TAMBAH PESERTA-PERDATANG</h2>
    </div>

        <div class="box-body">
            <form action="{{ route('admin.pesertaperdatang.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="">NAMA PESERTA-PERDATANG</label>
                        <!-- //value="{{ old('name')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                        <input type="text" name="nama_peserta" class="form-control" placeholder="Masukkan Nama Peserta"
                        value="{{ $peserta->nama_peserta ?? old('nama-peserta') }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">JENIS KELAMIN</label>
                        <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                            <option value="L"{{(old('jenis_kelamin') == 'L') ? ' selected' : ''}}>Laki-Laki</option>
                            <option value="P"{{(old('jenis_kelamin') == 'P') ? ' selected' : ''}}>Perempuan</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">TINGGI BADAN</label>
                        <input name="tinggi_badan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Tinggi Badan" value="{{ $peserta->tinggi_badan ?? old('tinggi_badan') }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">BERAT BADAN</label>
                        <input name="berat_badan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="berat_badan" value="{{ $peserta->berat_badan ?? old('berat_badan') }}">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">NO TELPON</label>
                        <input name="no_telpon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="No Telpon"
                         value="{{ $peserta->no_telpon ?? old('no_telpon')}}">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">ALAMAT</label>
                        <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('alamat')}}</textarea>
                    </div>

                    {{--  <div class="form-group @error('cover') has-error @enderror">
                        <label for="">GAMBAR</label>
                        <input type="file" name="cover" class="form-control">
                        @error('cover')
                            <span class="help-block">{{ $message}}</span>
                        @enderror
                    </div>  --}}

                    <div class="form-group">
                        <input type="submit" value="Tambah" class ="btn btn-primary">
                        <button type="reset" class="btn btn-warning">Ulang</button>
                        <a href="{{ route('admin.pesertaperdatang.index') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
        </div>
</div>

@endsection
