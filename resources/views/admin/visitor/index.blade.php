@extends('admin.templates.default')

@section('content')

<!-- /.box-header -->
<div class="box">
       <div class="box-header">
             <h3 class="box-title">DATA PENULIS</h3><br><br>
             <a href="" class="btn btn-primary">ADD AUTHOR</a>
        </div>
        <div class="box-body">

           <table id="dataTable" class="table table-bordered table-hover">
                   <thead>
                       <tr>
                           <th>ID</th>
                           <th>NAMA</th>
                           <th>MEJA</th>
                           <th>LANTAI</th>
                           <th>ACTION</th>
                       </tr>
                   </thead>
                   {{--  <tbody>
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
@endsection

@push('scripts')
    <script>
        $(function () {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.visitor.data') }}',
                columns : [
                    { data: 'id'},
                    { data: 'nama'},
                    { data: 'meja'},
                    { data: 'lantai'}
                ]
            });
        });
    </script>
@endpush
