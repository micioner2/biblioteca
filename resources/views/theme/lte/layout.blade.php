<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('titulo','Biblioteca')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset("assets/$theme/bower_components/bootstrap/dist/css/bootstrap.min.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet"  href="{{asset("assets/$theme/bower_components/font-awesome/css/font-awesome.min.css")}}">
    <!-- Ionicons -->
    <link rel="stylesheet"  href="{{asset("assets/$theme/bower_components/Ionicons/css/ionicons.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet"  href="{{asset("assets/$theme/dist/css/AdminLTE.min.css")}}">

    <link rel="stylesheet"  href="{{asset("assets/$theme/dist/css/skins/_all-skins.min.css")}}">

    <link rel="stylesheet"  href="{{asset("assets/css/custom.css")}}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    @yield('styles')
  </head>

  <body class="hold-transition skin-blue layout-boxed sidebar-mini">
      <div class="wrapper">

        {{-- Inicio Hedaer --}}
        @include("theme/$theme/header")
        {{-- Fin Header --}}

        {{-- Inicio Aside --}}
        @include("theme/$theme/aside")
        {{-- Fin Aside --}}


          <div class="content-wrapper">
            <section class="content">

              {{-- <div class="callout callout-info">
                  <h4>Tip!</h4>
                  <p>Add</p>
              </div> --}}

              @yield('contenido')
            
            </section>
          </div>
          
          {{--Inicio Footer --}}
          @include("theme/$theme/footer")
          {{-- Fin Footer --}}
          
        </div>

     

      <!-- jQuery 3 -->
      <script src="{{asset("assets/$theme/bower_components/jquery/dist/jquery.min.js")}}"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="{{asset("assets/$theme/bower_components/bootstrap/dist/js/bootstrap.min.js")}}"></script>
      <!-- SlimScroll -->
      <script src="{{asset("assets/$theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}"></script>
      <!-- FastClick -->
      <script src="{{asset("assets/$theme/bower_components/fastclick/lib/fastclick.js")}}"></script>
      <!-- AdminLTE App -->
      <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>

      @yield('scripts')
      
  </body>
</html>
