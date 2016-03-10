@if (session()->has('messaggio_flash'))
    <script>
        swal({
            title: "{!! session('messaggio_flash.title') !!}",
            text:  "{!! session('messaggio_flash.message') !!}",
            type: "{{ session('messaggio_flash.type') }}",
            timer: 2500,
            showConfirmButton: false
        });
    </script>
@endif

@if (session()->has('messaggio_flash_overlay'))
    <script>
        swal({
            title: "{{ session('messaggio_flash_overlay.title') }}",
            text:  "{{ session('messaggio_flash_overlay.message') }}",
            type: "{{ session('messaggio_flash_overlay.type') }}",
            confirmButtonText: 'Ok'
        });
    </script>
@endif