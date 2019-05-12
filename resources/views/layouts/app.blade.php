<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Shop Homepage - Start Bootstrap Template</title>
<!--bootstrap
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
<!--font-awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{URL:: asset('/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{ URL::asset('/css/shop-homepage.css')}}" rel="stylesheet">

  <link href="{{URL::asset('/css/style.css')}}" rel="stylesheet">
  <!--bootstrap core javascript-->
  <script  src="{{ URL::asset('/js/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('/js/jquery.zoom.min.js') }}"></script>
  <script  src="{{ URL::asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ url('/') }}">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/') }}/contact">Contact</a>
          </li>

         
        </ul>
        <ul class="nav navbar-nav navbar-rigth">
          @if(Auth::check())
           <li class="nav-item">
            <a class="nav-link" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <span class="glyphicon glyphicon-user"></span>Logout
          </a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#" >
            <span></span>{{ isset (Auth::user()->name)? Auth::user()->name : Auth::user()->email}}</a></li>
              <form id="logout-form" action=" {{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
              @else
              <li class="nav-item"> <a class="nav-link" href="{{ url('/login') }}"><span class="glyphicon glyphicon-user"></span>Login</a></li>

              <li class="nav-item"> <a class="nav-link" href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span>Register</a></li>
         
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

  @yield ('content')
  </div>

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ URL::asset('/js/jquery.min.js') }}"></script>
  <script src="{{ URL::asset('/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>