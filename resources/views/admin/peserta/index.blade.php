@extends('admin.templates.default')
@section('content')

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
                <h3 class="box-title">DATA PESERTA</h3><br><br>
                <a href="{{ route('admin.peserta.create') }}" class="glyphicon glyphicon-plus-sign btn btn-primary">TAMBAH DATA </a>
            </div>
            <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>NO</th>
                            {{--  <th>GAMBAR</th>  --}}
                            <th>NAMA</th>
                            <th>JENIS KELAMIN</th>
                            <th>TINGGI BADAN</th>
                            <th>BERAT BADAN</th>
                            <th>NO TELPON</th>
                            <th>ALAMAT</th>
                            <th> </th>
                            <th> </th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_peserta as $peserta)
                        <tr>
                            <td width="10">{{ $loop -> index +1 }}</td>
                            <td>{{ $peserta -> nama_peserta }}</td>
                            <td width="10">{{ $peserta -> jenis_kelamin }}</td>
                            <td width="10">{{ $peserta -> tinggi_badan }}</td>
                            <td width="10">{{ $peserta -> berat_badan }}</td>
                            <td width="10">{{ $peserta -> no_telpon }}</td>
                            <td>{{ $peserta -> alamat }}</td>
                            {{--  <td width='10'><a href="" class="glyphicon glyphicon-list-alt"> </a>  </td>
                            <td width='10'><a href="{{ route('admin.peserta.edit', $peserta->id) }}" class='glyphicon glyphicon-edit' aria-hidden='true'> </a> </td>  --}}
                            <td width="10"><a href="{{ route('admin.peserta.detail', $peserta->id) }}" class='glyphicon glyphicon-th-list | btn btn-info' aria-hidden='true'>Detail</a></td>
                            <td width="10"><a href="{{ route('admin.peserta.edit', $peserta->id) }}" class='glyphicon glyphicon-edit | btn btn-primary' aria-hidden='true'>Edit</a></td>
                            <td width="10">
                                <form action="{{ route('admin.peserta.destroy', $peserta->id) }}" method="post" style="display:inline;">
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
