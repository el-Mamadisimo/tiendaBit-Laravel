<!DOCTYPE html>
<html lang="en">
    <!DOCTYPE html>
    <html lang="en">
       <head>
          <!-- basic -->
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <!-- mobile metas -->
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="viewport" content="initial-scale=1, maximum-scale=1">
          <!-- site metas -->

          <title>@yield('tittle')</title>

          <meta name="keywords" content="">
          <meta name="description" content="">
          <meta name="author" content="">
          
          <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
          <link rel="stylesheet" href="{{asset('css/style.css')}}">
          <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
          <link rel="icon" href="../resources/views/project/images/fevicon.png" type="image/gif" />
          <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
          <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
          <link rel="stylesheet" href="{{asset('vendor/jquery-ui-1.13.2/jquery-ui-min-css')}}">


       </head>
     

       <body class="inner_posituong" id="administrar" >
          
          <div class="loader_bg">
             <div class="loader"><img src="{{asset('images/loading.gif')}}" alt="loader" /></div>
          </div>
          
          <header>
             

             <div class="header">
                <div class="container-fluid">
                   <div class="row">
                      <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                         <div class="full">
                            <div class="center-desk">
                               <div class="logo">
                                  <a href="../resources/views/project/index.html"><img src="{{asset('images/logo.png')}}" alt="#" /></a>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                         <nav class="navigation navbar navbar-expand-md navbar-dark ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarsExample04">
                               <ul class="navbar-nav mr-auto">
                                  <li class="nav-item ">
                                     <a class="nav-link" href="/tienda/public/">Home</a>
                                  </li>
                                  <li class="nav-item">
                                     <a class="nav-link" href="/tienda/public/about">About</a>
                                  </li>
                                  
                                  <li class="nav-item">
                                     <a class="nav-link" href="product">Products</a>
                                  </li>
                                  <li class="nav-item active">
                                     <a class="nav-link" href="contact">Contact Us</a>
                                  </li>
                                  <li class="nav-item d_none">
                                     <a class="nav-link" href="buscar"><i class="fa fa-search" aria-hidden="true"></i></a>
                                  </li>
                                  <li class="nav-item d_none">
                                     <a class="nav-link" href="login">Login</a>
                                  </li>
                               </ul>
                            </div>
                         </nav>
                      </div>
                   </div>
                </div>
             </div>
          </header>

          @yield('contenido')
           
          <footer>
            <div class="footer">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <img class="logo1" src="{{asset('images/logo1.png')}}" alt="#"/>
                        <ul class="social_icon">
                           <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <h3>About Us</h3>
                        <ul class="about_us">
                           <li>dolor sit amet, consectetur<br> magna aliqua. Ut enim ad <br>minim veniam, <br> quisdotempor incididunt r</li>
                        </ul>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <h3>Contact Us</h3>
                        <ul class="conta">
                           <li>dolor sit amet,<br> consectetur <br>magna aliqua.<br> quisdotempor <br>incididunt ut e </li>
                        </ul>
                     </div>
                     <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <form class="bottom_form">
                           <h3>Newsletter</h3>
                           <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                           <button class="sub_btn">subscribe</button>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="copyright">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-12">
                           <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </footer>
         <!-- fin footer -->
         <!-- Javascript -->
         <script src="{{asset('js/jquery.min.js')}}"></script>
         <script src="{{asset('js/popper.min.js')}}"></script>
         <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
         <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
          <script src="{{asset('vendor/jquery-ui-1.13.2/jquery-ui-min-js')}}"></script>
         <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
         <script src="{{asset('js/custom.js')}}"></script>
      </body>
   </html>
</html>