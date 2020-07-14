@extends('admin.templates.default')
@section('content')

<!-- /.box-header -->
    <div class="box">
        <div class="box-header">
                <h3 class="box-title">DATA MINUMAN</h3><br><br>
                <a href="{{ route('admin.drink.create') }}" class="btn btn-primary">ADD MINUMAN</a>
            </div>
            <div class="box-body">

            <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>GAMBAR</th>
                            <th>NAMA MINUMAN</th>
                            <th>HARGA MINUMAN</th>
                            <th>QTY</h1>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    {{--<tbody>
                        <tr>
                            <td>1</td>
                            <td>2</td>
                            <td>1</td>
                            <td>2</td>
                            <td>1</td>
                        </tr>
                    </tbody>  --}}
            </table>
        </div>
    </div>

<form action="" method="post" id="deleteForm">
    @csrf
    @method("DELETE")
    <input type="submit" value="Hapus" style="display:none">
</form>

@endsection

@push('scripts')
    <script>
        $(function () {
            $('#dataTable').DataTable({
                processing  : true,
                serverSide  : true,
                ajax        : '{{ route('admin.drink.data') }}',
                columns     : [
                   // { data  : 'id'},
                    { data: 'DT_RowIndex', orderable: false, searchable : false},
                    { data  : 'cover'},
                    { data  : 'nama'},
                    { data  : 'harga'},
                    { data  : 'qty'},
                    { data  : 'action'}
                ]
            });
        });
    </script>
@endpush
