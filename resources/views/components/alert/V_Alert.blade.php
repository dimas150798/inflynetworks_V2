{{-- Sukses Alert --}}
@if (Session::has('alert-success'))
    <script>
        toastr.options = {
            "progressBar": true,
        }
        toastr.success("{{ Session::get('alert-success') }}");
    </script>
@endif
