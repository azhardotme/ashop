<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Azhar">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Admin</title>
    @include('backend.layouts.styles')
  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
     @include('backend.layouts.header')
      <!--header end-->
      <!--sidebar start-->
      @include('backend.layouts.sidebar')
      <!--sidebar end-->
      <!--main content start-->
        @yield('content')
      <!--main content end-->

      <!-- Right Slidebar start -->
      @include('backend.layouts.rightsidebar')
      <!-- Right Slidebar end -->

      <!--footer start-->
  @include('backend.layouts.footer')
      <!--footer end-->
  </section>
  @include('backend.layouts.scripts')

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  
  @if(session('status'))
  <script>
    swal("{{ session('status') }}");
   </script>
   @endif

  </body>
</html>
