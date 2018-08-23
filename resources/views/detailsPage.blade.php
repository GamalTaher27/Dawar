<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- first mobile -->
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Home</title>
        <link rel="stylesheet" href="/css/css/bootstrap.css">
        <link rel="stylesheet" href="/css/css/datails.css">
        <link rel="stylesheet" href="/css/css/font-awesome.min.css">


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
          <li><a href="/index"><strong>  <span class="glyphicon glyphicon-home"></span> Home</strong></a></li>
          @if(auth::check())
          <li><a href="/UserProfile/{{ Auth::user()->id }}" class="nav-font">  <span class="glyphicon glyphicon-user"></span> Profile</a></li>
          @endif
          <li><a href="/posts/store" class="nav-font"  data-toggle="modal" data-target="#addModal">  <span class="glyphicon glyphicon-plus"></span> Add Item</a></li>
          <li><a href="/messages/view" class="nav-font">  <span class="glyphicon glyphicon-comment"></span> Messages</a></li>
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Services <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" class="nav-font"><span class="glyphicon glyphicon-info-sign"></span> About</a></li>
             <li><a href="/posts/rate" class="nav-font" data-toggle="modal" data-target="#rateModal">  <span class="glyphicon glyphicon-info-sign"></span> rate</a></li>

            <li><a class="nav-font" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
          </ul>
        </li>
         </ul>
      </div><!-- /.navbar-collapse -->
  </div>
</nav>
 <!-- ***********end navbar ***********-->






  @yield('content')

           <!-- Start section footer -->
            <section class="footer">
                <div class="container">
                    <div class="row">
                      <ul class="list-unstyled three-columns social">
                       <div class="col-md-6 ">
                           
                               <a href="www.facebook.com"> <li><img src="/images/facebook.png"></li></a>
                                <a href="www.twitter.com"> <li><img src="/images/twitter.png"></li>
                                <a href="www.plus.google.com"> <li><img src="/images/gplus.png"></li>
                                <a href="www.youtube.com"> <li><img src="/images/youtube.png"></li>
                            
                       </div>
                       
                          <div class="col-md-6 col-md-push-2">
                           
                                <a href="#" class="footer_links"><li><span class="glyphicon glyphicon-info-sign"></span>  About</li></a>
                        
                           </div>
                            
                      </ul>
                    </div>
                    <p class="text-center"> copyright   &#169 2018-Dawwar website . all rights reserved.</p>
                </div>
            </section>
            <!-- End section footer -->



<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Item</h4>
      </div>
      <div class="modal-body">

        <!-- Start Form -->
   
   <form method="POST" action="/posts/store" enctype="multipart/form-data">
   {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" required>
  </div>

 <div class="form-group">
    <label for="area">Area</label>
    <select class="form-control" name="area">
      <option>Cairo</option>
      <option>Alexandria</option>
      <option>Aswan</option>
      <option>Asyut</option>
      <option>Beheira</option>
      <option>Beni Suef</option>
      <option>Cairo</option>
      <option>Dakahlia</option>
      <option>Damietta</option>
      <option>Faiyum</option>
      <option>Gharbia</option>
      <option>Giza</option>
      <option>Ismailia</option>
      <option>Kafr El Sheikh</option>
      <option>Luxor</option>
      <option>Matruh</option>
      <option>Minya</option>
      <option>Monufia</option>
      <option>New Valley</option>
      <option>North sinai</option>
      <option>Port Said</option>
      <option>Qalyubia</option>
      <option>Qena</option>
      <option>Red Sea</option>
      <option>Sharqia</option>
      <option>Sohag</option>
      <option>El Tor</option>
      <option>Suez</option>
    </select>
  </div>

  <div class="form-group">
    <label for="area">Category</label>
    <select class="form-control" name="cat">
      <option>Laptop</option>
      <option>Mobile</option>
    </select>
  </div>

<div class="form-group">
    <label for="address">Address</label>
    <input type="text" name="address" id="address" class="form-control" required>
  </div>

<div class="form-group">
  <div class="row">
    <div class="col-sm-6">
    <span>I lost an item  </span><input type="radio" name="post_type" value="0" id="post_type">
  </div>
   <div class="col-sm-6">
    <span>I found an item  </span><input type="radio" name="post_type" value="1" id="post_type">
  </div>
    </div>
  </div>

  <div class="form-group">
    <label for="content">content</label>
   <textarea name="content" id="content" class="form-control content" required></textarea>
  </div>

@if(auth::check())
  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
  <input type="hidden" name="user_name" value="{{ Auth::user()->name }}">
  <input type="hidden" name="user_phone" value="{{ Auth::user()->phone_number }}">
  <input type="hidden" name="user_email" value="{{ Auth::user()->email }}">
@endif

<div class="form-group">
    <label for="url">Image</label>
    <input type="file" name="url" id="url">
  </div>

<hr>
  <div class="form-group">
  <button type="submit" class="btn btn-primary btn-lg">Add</button>
  </div>
  
  <div>
   @foreach($errors->all as $error)
  {{$error}}<br>
   @endforeach 

  </div>  
</form>
        </div>
    </div>
              
           <!-- End Form -->
    </div>
  </div>
</div>




 <script src="/js/jquery-3.2.1.min.js"></script>

 <script src="/js/bootstrap.min.js"></script>

 <script src="/js/home.js"></script>


    </body>
</html>
