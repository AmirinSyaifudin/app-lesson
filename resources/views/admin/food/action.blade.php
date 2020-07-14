{{--  <a href="' . route('admin.food.edit', $model). '" class="btn btn-warning">Edit</a>
<a href="' . route('admin.food.edit', $model). '" class="btn btn-danger">Hapus</a>  --}}



<a href="{{ route('admin.food.edit', $model) }}" class="btn btn-warning">Edit</a>
<button href="{{ route('admin.food.destroy', $model) }}" class="glyphicon glyphicon-trash" id="delete"></button>
{{-- install alerts cdn --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script>
    // request ajax element
    $('button#delete').on('click', function(e){
        e.preventDefault();
        //  variavel
        var href = $(this).attr('href');

                //alert
                Swal.fire({
                    title: 'Yakit Data ingin dihapus...???',
                    text: "Data yang sudah dihapus tidak bisa dikembalikan..!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor:'#d33',
                    cancelButtonColor:  '#3085d6',
                    confirmButtonText: 'Oyeeeachh, Hapus Saja !'
                    }).then((result) => {
                    if (result.value) {

                        // tombol trigger form
                        document.getElementById('deleteForm').action = href;
                        document.getElementById('deleteForm').submit()

                            Swal.fire(
                                'Terhapus!',
                                'Data Kamu berhasil diHapus Oyeeacchh.',
                                'success'
                            )
                    }
                    })
    })
</script>
