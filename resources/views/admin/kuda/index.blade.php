@extends('admin.templates.default')
@section('content')

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
                <h3 class="box-title">DATA KUDA</h3><br><br>
                <a href="{{ route('admin.kuda.create') }}" class="btn btn-primary">TAMBAH DATA KUDA</a>
            </div>
            <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>NO</th>
                            {{--  <th>GAMBAR</th>  --}}
                            <th>NAMA KUDA</th>
                            <th>JENIS KUDA</th>
                            <th> </th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_kuda as $kuda)
                        <tr>
                            <td>{{ $loop -> index +1 }}</td>
                            <td>{{ $kuda -> nama_kuda }}</td>
                            <td>{{ $kuda -> jenis_kuda }}</td>
                            {{--  <td width='10'><a href="" class="glyphicon glyphicon-list-alt"> </a>  </td>  --}}
                            {{-- <td><a href="{{ route('admin.kuda.edit', $kuda->id) }}" class="btn btn-warning">Edit</a></td> --}}

                            <td width="10"><a href="{{ route('admin.kuda.edit', $kuda->id) }}" class='glyphicon glyphicon-edit btn btn-primary' aria-hidden='true'>Edit</a></td>
                            {{--  <td width='10'><a href="{{ route('admin.kuda.destroy', $kuda->id) }}" class='glyphicon glyphicon-trash delete' aria-hidden='true' onclick='return confirm("Yakin ingin menghapus data?")'>
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                 </a>
                            </td>  --}}
                            <td width="10">
                                <form action="{{ route('admin.kuda.destroy', $kuda->id) }}" method="post" style="display:inline;">
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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


@push('scripts')
    <script>
        $(function () {
            $('#dataTable').DataTable({

                // delete






            });
        });
    </script>
@endpush

