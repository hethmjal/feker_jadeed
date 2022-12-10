
     @extends('front.partials')
     @section('content')
      <section style="" class="banner_main">
         <div class="container-fluid">
            <div class="request">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="titlepage">
                            <h2 >  الاشتراك </h2>
                         </div>
                      </div>

                    </div>
                   <div class="m-auto" style="width: 500px;">
                      <div class="col-md-12">
                        <form id="request" action="{{route('front.subscription.store')}}" method="POST" class="main_form">
                            @csrf

                            <input  type="hidden" name="plan_id" value="{{$plan->id}}">

                                <div class="row">
                              <div class="col-md-12 form-group">
                                 <input class=" form-control" placeholder="الاسم" type="text" name="name">
                                 <x-input-error :messages="$errors->get('name')" class="mt-2" />

                              </div>

                              <div class="col-md-12 form-group">
                                <input class="form-control" placeholder="البريد الاكتروني" type="email" name="email">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                             </div>

                              <div class="col-md-12 form-group">
                                 <input class="form-control" placeholder=" رقم الهاتف" type="tel" name="phone">
                                 <x-input-error :messages="$errors->get('phone')" class="mt-2" />

                              </div>



                               <div class="col-md-12 form-group">
                                   <input class="form-control" placeholder="كلمة المرور" type="password" name="password">
                                   <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                </div>


                                <div class="col-md-12 form-group">
                                    <input class="form-control" placeholder="تأكيد كلمة المرور" type="password" name="password_confirmation">
                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                 </div>

                                 <div class="col-sm-12 ">
                                    <span style="font-weight: 900">نوع الاشتراك: </span><span> {{$plan->name}} </span>

                                </div>
                                <div class="col-sm-12 ">
                                    <span class="text-black" style="font-weight: 900">مدة الاشتراك: </span><span> {{$plan->months}} Months </span>

                                </div>

                                <div class="col-sm-12 mb-2">
                                    <span style="font-weight: 900">سعر الاشتراك: </span><span> {{$plan->price}} AED </span>

                                </div>

                               <div class="col-sm-12 ">
                                  <button class="send_btn"> التوجه لصفحة الدفع</button>
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
