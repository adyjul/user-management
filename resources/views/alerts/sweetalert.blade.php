<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session()->get('alert') == 'swal')
    <script>
        Swal.fire({
            'icon': "{{ session()->get('alert-icon') }}",
            'title': "{{ session()->get('alert-title') }}",
            'text': "{{ session()->get('alert-text') }}",
        })
    </script>
@endif

@if ($errors->any())
    <script>
        console.log(window.errorHasBeenShow);
        if (window.errorHasBeenShow == undefined) {
            Swal.fire({
                'icon': "error",
                'title': "{{ $errors->first() }}",
                'text': "",
            })
        }
    </script>
@endif
