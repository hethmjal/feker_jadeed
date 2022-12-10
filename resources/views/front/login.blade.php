

     @extends('front.partials')
     @section('content')
      <!-- banner -->
      <section style="width: 100%; height: 100%;" class="banner_main">
         <div class="container-fluid">
            <div class="request">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="titlepage">
                            <h2> تسجيل الدخول</h2>
                         </div>
                      </div>
                   </div>
                   <div class="m-auto" style="width: 500px;">
                      <div class="col-md-12">
                         <form id="request" action="{{route('login')}}" method="POST" class="main_form">
                            @csrf
                            <div class="row">

                               <div class="col-md-12 form-group">
                                  <input class="form-control rounded"  placeholder="البريد الاكتروني" type="type" name="email">
                                  @error('email')
                                  <p class="invalid-feedback d-block" style="color: rgb(255, 3, 3)"> {{$message}}</p>
                                  @enderror
                               </div>


                               <div class="col-md-12 form-group">
                                <input class="form-control"  placeholder="كلمة المرور" type="password" name="password">
                                @error('password')
                                <p class="invalid-feedback d-block" style="color: rgb(255, 3, 3)"> {{$message}}</p>
                                @enderror
                             </div>



                               <div class="col-sm-12">
                                  <button class="send_btn">تسجيل الدخول</button>
                               </div>

                               <div class="m-auto mt-sm-2 mt-2 mt-lg-2 mt-md-2">
                                   ليس لديك حساب ؟ <a href="index.html#plans" class="font-weight-bold">اشترك الان</a>
                                </div>
                            </div>
                         </form>
                      </div>

                </div>
             </div>
             </div>
         </div>
      </section>
      <!-- end banner -->

      @endsection
