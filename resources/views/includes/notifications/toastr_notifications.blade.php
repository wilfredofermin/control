<script>

            @if(Session::has('message'))
                        var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'update':
            toastr["success"]("Su perfil ha sido actualizado exitosamente !", "{!! Auth::user()->name !!}",{positionClass: "toast-bottom-full-width"})
            break;
        case 'create_user':
            toastr["success"]("El usuario ha sido creado exitosamente !", "NUEVO USUARIO",{positionClass: "toast-bottom-full-width"})
            break;
        case 'create_puesto':
            toastr["success"]("El puesto ha sido creado exitosamente !", "NUEVO PUESTO",{positionClass: "toast-bottom-full-width"})
            break;
        case 'create_sucursal':
            toastr["success"]("La sucursal ha sido creada exitosamente !", "NUEVA SUCURSAL",{positionClass: "toast-bottom-full-width"})
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
        case 'bienvenido':
            toastr["info"]("Bienvenido !", "{!! Auth::user()->name !!}",{positionClass: "toast-bottom-right",progressBar:true})
            break;
    }
    @endif
</script>
