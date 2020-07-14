@extends('admin.templates.default')
@section('content')

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
                <h3 class="box-title">DATA PELATIH</h3><br><br>
                <a href="{{ route('admin.pelatih.create') }}" class="btn btn-primary">TAMBAH DATA PELATIH</a>
            </div>
            <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>NO</th>
                            {{--  <th>GAMBAR</th>  --}}
                            <th>NAMA PELATIH</th>
                            <th>JENIS KELAMIN</th>
                            <th>NO TELPON</th>
                            <th>ALAMAT</th>
                            <th> </th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_pelatih as $pelatih)
                        <tr>
                            <td width="10">{{ $loop -> index +1 }}</td>
                            <td>{{ $pelatih-> nama_pelatih }}</td>
                            <td width="120">{{ $pelatih-> jenis_kelamin }}</td>
                            <td width="120">{{ $pelatih-> no_telpon }}</td>
                            <td>{{ $pelatih-> alamat }}</td>
                            {{--  <td width='10'><a href="{{ route('admin.pelatih.edit', $pelatih->id) }}" class='glyphicon glyphicon-edit' aria-hidden='true'> </a> </td>  --}}
                            <td width='10'><a href="{{ route('admin.pelatih.edit', $pelatih->id) }}" class='glyphicon glyphicon-edit btn btn-primary' aria-hidden='true'>Edit</a></td>
                            <td width="10">
                                <form action="{{ route('admin.pelatih.destroy', $pelatih->id) }}" method="post" style="display:inline;">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <button type="submit"  class="glyphicon glyphicon-trash delete | btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>

@endsection


@push('scripts')
    <script>
        $(function () {
            $('#dataTable').DataTable({


            });
        });
    </script>
@endpush

