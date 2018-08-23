<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8"/>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">                 <!-- for internet explorer -->
            <meta name="viewport" content="width=device-width, initial-scale=1">  <!-- for mob-->
                 <title>Register</title>
                 <link rel="stylesheet" href="/css/css/bootstrap.min.css">
                 <link rel="stylesheet" href="/css/css/Register.css">
                 
                 @yield('cssblock')
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
                <li><a href="/login"> <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>  Sign in</a></li>
                           
 
              </ul>
            </div>
            
          </div>  <!-- End Of The Container-->          
        </nav>
           <!-- end our navbar-->
           <div class="container">

           @yield('content')
           </div>
            <script src="../assets/js/jquery-3.2.1.js"></script>
            <script src="../assets/js/bootstrap.min.js"></script>            
        
        </body>

   
    </html>