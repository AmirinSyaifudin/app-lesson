@extends('admin.templates.default')

@section('content')
<h1>HOUSE DIRING LESSON</h1>


    <div class="box">
        <div class="box-header">
            <h3 class="box-title">SELAMAT DATANG DI TAMPILAN WEBSITE PENGOLAHAN DATA PESERTA PELATIHAN</h3>
            {{-- <a href="{{ route('admin.pasien.create') }}" class="btn btn-primary">Tambah Penulis</a> --}}
        </div>
            <div class="box-body">
                    <table id="dataTable" class="table table-bordered table-hover">

                </table>
            </div>
    </div>

@endsection
