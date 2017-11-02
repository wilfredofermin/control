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
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
        case 'bienvenido':
            toastr["info"]("Bienvenido !", "{!! Auth::user()->name !!}",{positionClass: "toast-bottom-right",progressBar:true})
            break;
    }
    @endif
</script>
