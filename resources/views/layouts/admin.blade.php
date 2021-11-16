<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'E-Mebel') }}</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet">
</head>
<body class="dark-edition">
  <div class="wrapper ">

      @include('layouts.inc.sidebar')

    <div class="main-panel">

        @include('layouts.inc.navbar')

      <div class="content">
          @yield('content')
      </div>
        @include('layouts.inc.adminfooter')

    </div>
  </div>
    

    <!-- Scripts -->
    <script src="{{ asset('admin/js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/bootstrap-material-design.min.js') }}" defer></script>
    <script src="{{ asset('admin/js/perfect-scrollbar.jquery.min.js') }}" defer></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <script src="{{ asset('admin/js/material-dashboard.js') }}" defer></script>

    <script src="{{ asset('admin/js/responsive.js') }}" defer></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    @if (session('success'))
      <script>
        swal("{{ session('success') }}")
      </script>
    @endif
    <script type="text/javascript">
      $('.show_confirm').click(function(event) {
           var form =  $(this).closest("form");
           var name = $(this).data("name");
           event.preventDefault();
           swal({
               title: `Are you sure you want to delete this record?`,
               text: "If you delete this, it will be gone forever.",
               icon: "warning",
               buttons: true,
               dangerMode: true,
           })
           .then((willDelete) => {
             if (willDelete) {
               form.submit();
             }
           });
       });
    </script>

    <!--   Core JS Files   -->
    <script src="https://unpkg.com/default-passive-events"></script>
    
    
    {{-- @yield('scripts') --}}
</body>
</html>
