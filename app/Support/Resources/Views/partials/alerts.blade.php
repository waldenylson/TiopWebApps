@if (Session::has('message'))
    <script type="text/javascript">
        swal("", "{!! Session::get('message') !!}", "success");
    </script>
@endif

@if (Session::has('error'))
    <script type="text/javascript">
        swal("", "{!! Session::get('error') !!}", "error");
    </script>
@endif