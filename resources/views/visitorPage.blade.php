<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- first mobile -->
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Dawwar</title>
        <link rel="stylesheet" href="/css/css/bootstrap.css">
        <link rel="stylesheet" href="/css/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/css/visitor.css">
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
          <li class="active"><a href="/login"><strong>  <span class="glyphicon glyphicon-home"></span> Home</strong></a></li>
          <li><a href="/login" class="nav-font">  <span class="glyphicon glyphicon-plus"></span> Add Item</a></li>
          <li><a href="/login" class="nav-font">  <span class="glyphicon glyphicon-user"></span> Profile</a></li>
          <li><a href="#" class="nav-font">  <span class="glyphicon glyphicon-info-sign"></span> About</a></li>
          <li><a href="/login" class="nav-font">Login</a></li>
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
 
 <script src="/js/jquery-3.2.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>

    </body>
</html>