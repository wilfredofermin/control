{{--
<script>
    window.onload = function () {
        document.querySelector('#update').addEventListener('click', actualizar)
    }

    function actualizar () {

        swal({
            title: 'Actualizando Peril',
            text: "Quieres conservar los cambios ?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#2E2EFE',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, quiero actualizar !'
        }).then(function () {
            onclick=event.preventDefault();
            document.getElementById('profile-form').submit();
            swal(
                    'Actualizado!',
                    '{{Auth::user()->name}}, Su perfil se ha actualizado con exito !!' ,
                    'success'
            )
        })
    }
</script>
--}}


<script>
    window.onload = function () {
        document.querySelector('#update').addEventListener('click', actualizar)
    }

    function actualizar () {
        swal({
            title: 'Actualizando Peril?',
            text: "Quieres conservar los cambios ?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#2E2EFE',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, quiero actualizar !',
            cancelButtonText: 'Cancelar',
            confirmButtonClass: 'btn btn-raised btn-success',
            cancelButtonClass: 'btn btn-raised btn-danger',
            timer:4000,
            buttonsStyling: true
        }).then(function () {

            swal(
                    'Actualizado',
                    '{{Auth::user()->name}}, Su perfil se ha actualizado con exito !!',
                    'success'
            )
              onclick = event.preventDefault();
            document.getElementById('profile-form').submit();

        }, function (dismiss) {
            // dismiss can be 'cancel', 'overlay',
            // 'close', and 'timer'
            if (dismiss === 'overlay') {

                swal(

                )

            }

        })

    }

</script>