@extends('admin.templates.default')
@section('content')

<div class="box">
    <div class="box-header">
        <h2 class="box-title">TAMBAH PELATIH</h2>
    </div>

        <div class="box-body">
            <form action="{{ route('admin.pelatih.update', $pelatih) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="form-group">
                    <label for="">NAMA PELATIH</label>
                    <!-- //value="{{ old('name')}}"  , Validasi untuk tetap menampilkan nilai di form-->
                    <input type="text" name="nama_pelatih" class="form-control" placeholder="Masukkan Nama Kuda"
                    value="{{ $pelatih->nama_pelatih ?? old('nama-pelatih') }}">
                </div>


                <div class="form-group">
                    <label for="exampleFormControlSelect1">JENIS KELAMIN</label>
                    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                        <option value="L"{{ (old('jenis_kelamin') == 'L') ? ' selected' : ''}}>Laki-Laki</option>
                        <option value="P"{{ (old('jenis_kelamin') == 'P') ? ' selected' : ''}}>Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">NO TELPON</label>
                    <input name="no_telpon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                     placeholder="No Telpon" value="{{ $pelatih->no_telpon ?? old('no_telpon')}}">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">ALAMAT</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">
                        {{ $pelatih->alamat }}
                    </textarea>
                </div>

                {{--  <div class="form-group @error('cover') has-error @enderror">
                    <label for="">GAMBAR</label>
                    <input type="file" name="cover" class="form-control">
                    @error('cover')
                        <span class="help-block">{{ $message}}</span>
                    @enderror
                </div>  --}}

                <div class="form-group">
                    <input type="submit" value="Update" class ="btn btn-primary">
                    <button type="reset" class="btn btn-warning">Ulang</button>
                    <a href="{{ route('admin.pelatih.index') }}" class="btn btn-danger">Kembali</a>
                </div>
            </form>
        </div>
</div>

@endsection
