<!DOCTYPE html>
<html lang="en">
    <head>
  <title>Blogs</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset("assets/frontend/css/bootstrap.min.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/frontend/css/font-awesome-all.min.css") }}" rel="stylesheet">
  <link href="{{ asset("assets/frontend/css/slick.css") }}" rel="stylesheet" type="text/css">
  <link href="{{ asset("assets/frontend/css/slick-theme.css") }}" rel="stylesheet" type="text/css">
  <link href="{{ asset("assets/frontend/css/animate.min.css") }}" rel="stylesheet" type="text/css">
  <link href="{{ asset("assets/frontend/css/custom.css") }}" rel="stylesheet" type="text/css">

  <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/
    html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/
    respond.min.js"></script>
<![endif]-->
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="{{ asset("assets/frontend/frontend//js/bootstrap.bundle.min.js") }}"></script>
  <script src="{{ asset("assets/frontend/js/font-awesome-all.min.js") }}"></script>
  <script src="{{ asset("assets/frontend/js/slick.js") }}"></script>
  <script src="{{ asset("assets/frontend/js/wow.min.js") }}"></script>
  <script src="{{ asset("assets/frontend/js/custom.js") }}"></script>
  <script src="{{ asset("assets/admin/js/custom.js") }}"></script>
</head>

<body>
<x-frontend.header>
</x-frontend.header>
{{ $slot }}
<x-admin.scripts />

    {{ $scripts ?? '' }}
</body>
<x-frontend.footer>
</x-frontend.footer>
</html>
