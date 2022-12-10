

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
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.15/dist/sweetalert2.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style>


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
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-6">
                  <div class="text-bg">
                     <div class="padding_lert">
                        <h1 style="color:rgb(31,73,101) ;">فكر جديد.FJ</h1>

                        <p style="color:rgb(10 4 92) ;">







                           هدفنا الأساسي هو حصولك على جسم مثالي في عشرين دقيقة فقط !
                           <br>
                           لماذا تقنية التحفيز الكهربائي تعطي مفعول افضل ؟
                           <br>
                            التخلص من آلام الظهر
                           الساعات الطويلة في الجلوس وقلة الحركة سببان رئيسان في آلام الظهر

                           اثبت مؤخرا ان تقية التحفيز الكهربائي تخفف من هذه الآلام وتقوي عضلات الظهر مما يخفف الاحساس بالألم













                        </p>




                        <a style="font-weight: 800; font-size:30px ; color:rgb(252, 65, 140)" class="read_more" href="#plans">اشترك الان </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div  style="margin-right: 100px; margin-bottom: 50px;" class="text-img">
                     <img src="{{asset('front/images/toy_img.png')}}" alt="website template image">
                                   </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- features -->
      <div class="Features">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2 style="color:rgb(235,105,158) ;">  معرض الصور والخدمات  </h2>
                     <br>
                     <h4>خسارة الوزن الزائد
                        | نحت الجسم
                        | زيادة القوة العضلية
                       | زيادة هرمون النمو
                       |  شد الترهلات
                        تحسين البشرة</h4>

                        <h5>
                            أوقات العمل
                            <br>
                            8-12 مساء
                        </h5>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="Our_box">
                     <i><img width="1200" height="1200" src="{{asset('front/images/a.jpg')}}" alt="#"/></i>
                  </div>
               </div>
             <!--   <div class="col-md-4">
                  <div class="Our_box">
                     <i><img width="1200" height="1200" src="{{asset('front/images/b.jpg')}}" alt="#"/></i>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="Our_box">
                     <i><img width="1200" height="1200" src="{{asset('front/images/c.jpg')}}" alt="#"/></i>
                  </div>
               </div> -->

               <div class="col-md-4">
                  <div class="Our_box">
                     <i><img width="1200" height="400px" src="{{asset('front/images/dd.jpg')}}" alt="#"/></i>
                  </div>
               </div>
              <!--  <div class="col-md-4">
                  <div class="Our_box">
                     <i><img width="1200" height="1200" src="{{asset('front/images/e.jpg')}}" alt="#"/></i>
                  </div>
               </div> -->
               <div class="col-md-4">
                  <div class="Our_box">
                     <i><img width="1200" height="1200" src="{{asset('front/images/f.jpg')}}" alt="#"/></i>
                  </div>
               </div>

               <div class="col-md-4">
                  <div class="Our_box">
                     <i><img  width="1200" height="1200" src="{{asset('front/images/g.jpg')}}" alt="#"/></i>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="Our_box">
                     <i><img width="1200" height="1200" src="{{asset('front/images/h.jpg')}}" alt="#"/></i>
                  </div>
               </div>


                  <div class="col-md-4">
                     <div class="Our_box">
                        <i><img width="1200" height="1200" src="{{asset('front/images/j.jpg')}}" alt="#"/></i>
                     </div>
                  </div>


               </div>
            </div>
         </div>
      </div>
      <!-- end Features -->
      <!-- discount -->
      <div class="discount">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>دروس اللياقة البدنية مع مدرب معتمد. اشترك  الآن وابدأ التدريب</h2>
                     <br>
                     <a class="read_more" href="#plans">اشترك الان </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end discount -->



















      <section id="plans" class="lis-bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 text-center">
                    <div class="heading pb-4">
                        <h2>العضويات والأسعار  </h2>
                        <h5 class="font-weight-normal lis-light">اختر الخطة المناسبة واشترك الان </h5>
                    </div>
                </div>
            </div>
            <div class="row">





                @foreach ($plans as $plan)



                <div class="col-12 col-md-6 col-lg-3 wow fadeInUp mb-5 mb-lg-0 text-center" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="price-table ">
                        <div class="price-header lis-bg-primary py-4 text-white lis-rounded-top">
                            <h5 class="text-uppercase lis-latter-spacing-2 text-white">{{$plan->name}}</h5>
                            <h1 style="font-size: 30px;" class="display-4 lis-font-weight-300 text-white">AED {{$plan->price}} <small>/{{$plan->months}} mo</small></h1>
                        </div>
                        <div class="border border-top-0 lis-brd-light bg-white py-5 lis-rounded-bottom">
                            <ul class="list-unstyled lis-line-height-3">
                             <li>
                                {!!$plan->description!!}
                            </li>
                                   <li style="font-size: 30px; color:rgb(235,105,158) ;">توفير {{$plan->rate}}%</li>
                            </ul>
                            <a href="{{route('front.subscribe',$plan->id)}}" class="btn btn-primary btn-md lis-rounded-circle-50" style="background: #FF214F" data-abc="true"><i class="fa fa-shopping-cart pl-2"></i> اشترك الان</a>
                        </div>
                    </div>
                </div>

                @endforeach



            </div>

        </div>
    </section>



























      <!-- request -->
      <div id="contactus" class="request ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>تواصل معنا</h2>
                     <span>اذا كانت لديك استفسارات او اسئلة لا تتردد بالتواصل معنا وسنعمل على الرد بأقرب وقت ممكن</span>
                    <br>
                    <a target="_blank" href="https://wa.me/971501224020">

                  <h5>
                     او يمكنك التواصل معنا من خلال واتساب 971501224020+ <i style="color: #128C7E;" class="ri-whatsapp-line"></i>
                  </h5>
               </a>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
  <form method="POST" id="message"  class="main_form" >
                @csrf
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="الاسم" type="type" name="name">
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="رقم الهاتف" type="type" name="phone">
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="البريد الاكتروني" type="type" name="email">
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" type="type"  name="message"> الرسالة  </textarea>
                        </div>
                        <div class="col-sm-12">
                           <button type="button" class="send_btn message">ارسال</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div id="location" class="col-md-4 mr-md-5" >
                  <div class="">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3633.33107985786!2d54.5968594!3d24.404563000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5e479dbdef0c8d%3A0x51943de4a1881435!2sZinc%20Fitness%20-%20EMS!5e0!3m2!1sen!2sae!4v1669723384934!5m2!1sen!2sae" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>               </div>
            </div>
         </div>
      </div>
      <!-- end request -->

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
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.15/dist/sweetalert2.all.min.js"></script>
      <script>
          $(".message").click(function(e) {
            console.log("sdsad");
      e.preventDefault();
      var data =  $("#message").serialize();
      $.ajax({
          type: "POST",
          url: "/message",
          data: data,
          success: function(result) {
          Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: 'تم الارسال بنجاح',
    showConfirmButton: false,
    timer: 3000
  })
          },
          error: function(result) {
              Swal.fire({
    position: 'top-end',
    icon: 'error',
    title: '  يرجى التأكد من ملْء الحقول ',
    showConfirmButton: false,
    timer: 3000
  })
    }
      });
  });
      </script>
   </body>
</html>

