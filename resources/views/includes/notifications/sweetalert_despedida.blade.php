<script>
    window.onload = function () {
        document.querySelector('#salir').addEventListener('click', salir)
    }

    function salir () {

        swal({
            title: 'Saliendo del sistema',
            text: "Esta seguro de cerrar la aplicacion ?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#2E2EFE',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, quiero salir !',
            confirmButtonClass: 'btn btn-raised btn-success',
            cancelButtonClass: 'btn btn-raised btn-danger',
        }).then(function () {
            onclick=event.preventDefault();
            document.getElementById('logout-form').submit();
            swal(
                    'Saliendo!',
                    'HAZTA LUEGO.. {{Auth::user()->name}} !!' ,
                    'success'
            )
        })
    }
</script>