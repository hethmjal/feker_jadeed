
<!DOCTYPE html>
<html dir="rtl" lang="ar">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>فكر جديد</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="shortcut icon" href="{{asset('front/images/bg3.png')}}" type="image/x-icon">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
      <!-- fevicon -->

      <link rel="icon" href="{{asset('front/images/fevicon.png')}}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('front/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous">
      <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style>
     ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
  color: rgb(3, 3, 3);
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
  color: rgb(0, 0, 0);
}

::-ms-input-placeholder { /* Microsoft Edge */
  color: rgb(18, 16, 16);
}

      </style>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('front/images/loading.gif')}}" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div  class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div  class="full">
                        <div  class="center-desk">
                           <div  class="logo">
                              <a href="index.html"><img src="{{asset('front/images/bg3.png')}}" width="100" height="100" alt="#" /></a>
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
                            <ul style="margin-top: 25px;" class="navbar-nav mr-auto">
                               <li  class="nav-item">
                                  <a style="color:rgb(31,73,101) ;" class="nav-link" href="{{route('home')}}"> الرئيسية </a>
                               </li>
                               <li  class="nav-item">
                                 <a style="color:rgb(31,73,101) ;" class="nav-link" href="#location">العنوان </a>
                              </li>
                               <li  class="nav-item">
                                  <a style="color:rgb(31,73,101) ;" class="nav-link" href="#contactus">تواصل معنا</a>
                               </li>
                               <li class="nav-item">
                                  <a  style="color:rgb(31,73,101) ;" class="nav-link" href="#plans">اشتراك </a>
                               </li>
                               @auth

                               <li class="nav-item">
                                 <a  style="color:rgb(31,73,101) ;" class="nav-link" href="{{route('create-appointment')}}">حجز موعد </a>
                              </li>

                              <li class="nav-item">
                                 <a  style="color:rgb(31,73,101) ;" class="nav-link" href="{{route('all-appointments')}}">حجوزاتي  </a>
                              </li>
                              @endauth

                               @guest
                               <li class="nav-item">
                                 <a style="color:rgb(31,73,101) ;" class="nav-link" href="{{route('front.login')}}">تسجيل الدخول</a>
                              </li>
                               @endguest
                               @auth
                               <li class="nav-item">
                                 <form action="{{route('logout')}}" method="post">
                                   @csrf
                                 <button type="submit" class="btn btn-sm btn-outline-dark">  تسجيل الخروج </button>
                               </form>

                         </li>
                               @endauth

                            </ul>
                         </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>

      @yield('content')



      <!--  footer -->
      <footer>
        <div class="footer">

           <div class="copyright">
                 <div class="row ml-0">
                    <div class="col-md-12">
                       <p>جميع الحقوق محفوظة  © 2022  </p>
                    </div>
                 </div>
           </div>
        </div>
     </footer>
     <!-- end footer -->
     <!-- Javascript files-->
     <script src="{{asset('front/js/jquery.min.js')}}"></script>
     <script src="{{asset('front/js/popper.min.js')}}"></script>
     <script src="{{asset('front/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{asset('front/js/jquery-3.0.0.min.js')}}"></script>
     <script src="{{asset('front/js/plugin.js')}}"></script>
     <!-- sidebar -->
     <script src="{{asset('front/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
     <script src="{{asset('front/js/custom.js')}}"></script>
     <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
     @stack('js')

  </body>
</html>

