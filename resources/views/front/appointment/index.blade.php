

@extends('front.partials')
@section('content')

      <section style="width: 100%; height: 100%;  " class="banner_main">
         <div class="container-fluid">
            <div class="request">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="titlepage">
                            <h2>  حجوزاتي </h2>
                            <h4>
                                نوع الاشتراك : {{$subscribe->plan->name}}

|
                                 عدد الجلسات : {{$subscribe->plan->numberOfSessions}}
|

                                 الجلسات المتبقية :  {{$subscribe->plan->numberOfSessions-$subscribe->sessions}}

                            </h4>
                            <h5>ملاحظة هامة // لا يمكن حذف أو تعديل الموعد قبل  24 ساعة من بدأه</h5>
                         </div>
                      </div>
                   </div>

                   @if (session('success'))
                   <div class="alert alert-success">{{session('success')}}</div>
                   @endif

                   @if (session('error'))
                   <div class="alert alert-danger">{{session('error')}}</div>
                   @endif
                   <a class="btn btn-primary mb-3" target="_blank" href="{{route('create-appointment')}}">حجز موعد جديد</a>

                   <table class="table table-bordered">
                    <thead>
                      <tr class="bg-primary" style="color: white;">
                        <th scope="col">#</th>
                        <th scope="col">تاريخ الحجز</th>
                        <th scope="col"> يوم الحجز</th>
                        <th scope="col">موعد بداية الحجز</th>
                        <th scope="col">موعد نهاية الحجز</th>
                        <th scope="col">  الحالة</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @php
                            $i=0;
                        @endphp
                    @foreach ($appointments as $app)
                        <tr class="bg-success font-weight-bold"  style="color: white;">
                            <th scope="row">{{++$i}}</th>
                            <td>{{$app->date}}</td>
                            <td>{{$app->ar_day}}</td>
                            <td>{{  $app->from_hour }}م</td>
                            <td>{{$app->to_hour}}م</td>
                            <td>{{$app->status}}</td>

                            <td>
                                <a href="{{route('appointment.edit',$app->id)}}" class="btn btn-success " href="">تعديل</a>

                                <a href="{{route('appointment.delete',$app->id)}}" class="btn btn-danger" href="">حذف</a>
                            </td>
                          </tr>
                          @endforeach

                          @foreach ($endAppointments as $app)

                        <tr class="bg-danger font-weight-bold"  style="color: white;">
                            <th scope="row">{{++$i}}</th>
                            <td>{{$app->date}}</td>
                            <td>{{$app->ar_day}}</td>
                            <td>{{  $app->from_hour }}م</td>
                            <td>{{$app->to_hour}}م</td>
                            <td>{{$app->status}}</td>


                          </tr>


                        @endforeach

                    </tbody>
                  </table>










             </div>
             </div>
         </div>
      </section>
      <!-- end banner -->


  @endsection
