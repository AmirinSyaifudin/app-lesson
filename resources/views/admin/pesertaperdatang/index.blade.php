@extends('admin.templates.default')
@section('content')

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
                <h3 class="box-title">DATA PESERTA-PERDATANG</h3><br><br>
                <a href="{{ route('admin.pesertaperdatang.create') }}" class="glyphicon glyphicon-plus-sign btn btn-primary">TAMBAH DATA </a>
            </div>
            <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>NO</th>

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
                        @foreach ($data_pesertaperdatang as $pesertaperdatang)
                        <tr>
                            <td width="10">{{ $loop -> index +1 }}</td>
                            <td>{{ $pesertaperdatang -> nama_peserta }}</td>
                            <td width="10">{{ $pesertaperdatang -> jenis_kelamin }}</td>
                            <td width="10">{{ $pesertaperdatang -> tinggi_badan }}</td>
                            <td width="10">{{ $pesertaperdatang -> berat_badan }}</td>
                            <td width="10">{{ $pesertaperdatang -> no_telpon }}</td>
                            <td>{{ $pesertaperdatang -> alamat }}</td>

                            <td width="10"><a href="{{ route('admin.pesertaperdatang.detail', $pesertaperdatang->id) }}" class='glyphicon glyphicon-th-list | btn btn-info' aria-hidden='true'>Detail</a></td>
                            <td width="10"><a href="{{ route('admin.pesertaperdatang.edit', $pesertaperdatang->id) }}" class='glyphicon glyphicon-edit | btn btn-primary' aria-hidden='true'>Edit</a></td>
                            <td width="10">
                                <form action="{{ route('admin.pesertaperdatang.destroy', $pesertaperdatang->id) }}" method="post" style="display:inline;">
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
