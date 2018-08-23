<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- first mobile -->
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>admin</title>
                <link rel="stylesheet" href="/css/css/bootstrap.css">
                <link rel="stylesheet" href="/css/css/dataTables.bootstrap.min.css">

        <link rel="stylesheet" href="/css/css/AdminStyle.css">


    </head>
    <body>
        
        
 
 <!-- ***********start navbar ***********-->
  <nav class="navbar  navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class= "container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <img class="logo" src="/images/dawar12.jpg">
        
      </div>
    
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">

     

          <li class="active"><a href="/adminconfirm"><strong>  <span class="glyphicon glyphicon-home"></span> Posts</strong></a></li>
          <li><a href="/users" class="nav-font">  <span class="glyphicon glyphicon-user"></span> Users</a></li>
          <li><a href="/news" class="nav-font">  <span class="glyphicon glyphicon-comment"></span> News</a></li>
          <li><a class="nav-font" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>

         </ul>
    
      </div><!-- /.navbar-collapse -->
  </div>
</nav>
  
 <!-- ***********end navbar ***********-->

  @yield('content')

 <script src="{{ asset('js/bootstrap.min.js') }}"></script>
 <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('js/dataTables.bootstrap.min.js') }}"></script>
 <script src="{{ asset('js/jquery-3.2.0.min.js') }}"></script>


    </body>
</html>
