<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
            <div class="container-fluid">
                  <a class="navbar-brand" href="{{ url('/home') }}">
                      {{ config('app.name', 'Laravel') }}
                  </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent"> 

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        
        <div class="container-fluid">
          <div class="row">
            
              <div id="mySidebar" class="sidebar">
                  <a id="hamburger" href="#">Testen<i class="fas fa-bars"></i></a>   
                  <a class="zu" href="/ingest">Ingest<i class="fas fa-file-upload"></i></a>
                  <a class="zu" href="/datenbank">Datenbank<i class="fas fa-database"></i></a>
                  <a class="zu" href="/speicherorte">Speicherorte<i class="fas fa-folder"></i></a>
                  <a class="zu" href="/contact">Kontakt<i class="fas fa-envelope-square"></i></a>
              </div>
              <div class="col-sm-10" id="main">
                  <main class="py-4">
                      @yield('content')
                  </main>
              </div>
          </div>
      </div>
    
</body>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable({
      language: {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/German.json"
      },
      processing: true,
      serverSide: true,
      ajax: '{!! route('get.users') !!}',
      columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'email', name: 'email' },
            { data: 'created_at', name: 'created_at' },
            { data: 'updated_at', name: 'updated_at' },
        ],
       
      columnDefs: [{
         'targets': [5,6],
         'searchable': false,
         'orderable': false,
         'className': 'toggle',
         'render': function (data, type, full, meta){
             return '<label class="switch"><input type="checkbox" name="id[]" value="' + $('<div/>').text(data).html() + '"><span class="slider"></span></label>';
         }
        }],
    });
  });
</script>
{{-- <script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
      document.querySelectorAll(".zu").forEach(a=>a.style.visibility = "visible");
    }
    
    function closeNav() {
      document.querySelectorAll(".zu").forEach(a=>a.style.visibility = "hidden");
      document.getElementById("mySidebar").style.width = "90px";
      document.getElementById("main").style.marginLeft= "110px";
    }
    </script> --}}

<script>

var toggle = false;

$('#hamburger').click(function() {
    toggle = !toggle;

    if(toggle){
        $('#mySidebar').animate({left: -200});
        $('#main').animate({left: 100});
    }
    else{
        $('#main').animate({left: 250});
        $('#mySidebar').animate({left: 0});
    }

});
</script>
</html>
