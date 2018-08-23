<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">                 <!-- for internet explorer -->
            <meta name="viewport" content="width=device-width, initial-scale=1">  <!-- for mob-->
                 <title>Login</title>
                 <link rel="stylesheet" href="/css/css/bootstrap.css">
        <link rel="stylesheet" href="/css/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/css/logincss.css">

        </head>
        
        <body>
             <!--start our navbar-->
             <nav class="navbar  navbar-fixed-top " role="navigation "> <!-- inverse 3kst l colors    fixed-top 34an l navbar ytl3 eynzl m3aya-->  
           <div class="container">  <!--  (container-fluid)  = fullwidth ya3ny ya5od elscreen kolha -->
                <div class="navbar-header "> 
             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournavbar" > <!--byft7 l 2ksam fel mob-->
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
             
            </div>
                
            <div class="collapse navbar-collapse " id="ournavbar">
              <ul class="nav navbar-nav navbar-right">  <!--navbar-left ya3ny l buttons bta3ty tb2a fel right -->
                <li><a href="#"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span> About</a></li>
               <li><a href="#"><span class="glyphicon glyphicon-sort" aria-hidden="true"></span> Contact</a></li>             
 
              </ul>
            </div>
            
          </div>  <!-- End Of The Container-->          
        </nav>
           <!-- end our navbar-->

             @yield('content')

               
            <script src="/js/jquery-3.2.1.min.js"></script>
            <script src="/js/bootstrap.min.js"></script>
            
        
        </body>

   
    </html>