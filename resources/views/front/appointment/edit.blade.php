
@extends('front.partials')
@section('content')

      <section style="width: 100%; height: 100%;" class="banner_main">
         <div class="container-fluid">
            <div class="request">
                <div class="container">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="titlepage">
                            <h2>  حجز موعد</h2>
                            <h4>
                                نوع الاشتراك : {{$app->subscribe->plan->name}}

|
                                 عدد الجلسات : {{$app->subscribe->plan->numberOfSessions}}
|

                                 الجلسات المتبقية :  {{$app->subscribe->plan->numberOfSessions-$app->subscribe->sessions}}

                            </h4>
                            <h5>ملاحظة هامة // لا يمكن حذف أو تعديل الموعد قبل  24 ساعة من بدأه</h5>
                         </div>
                      </div>
                   </div>
                   <div class="m-auto" style="width: 500px;">
                         <form id="request" action="{{route('appointment.update',$app->id)}}" method="POST" class="main_form">
                            @csrf
                            <div class="row">

                 <div class="col-md-12">
                    <label for="">اليوم</label>
                    <input onchange="showHours(this.value)" min="<?=date('Y-m-d', time())?>" id="date" class="contactus" value="{{$app->date}}" type="date" name="date" >
                </div>



                <div class="col-md-12">
                    <label for="">بداية الحجز</label>

                    <select onchange="endAppointment(this.value)" style="width: 100%; padding: 10px; border-radius: 20px; background: rgb(235,105,158) ; border-color: white;" class="" name="from" id="">
                        <option value="">{{$app->from_hours}}</option>

                    </select>
                </div>






                <div class="col-md-12 mt-4">
                    <label for=""> نهاية الحجز:  <span id="end">{{$app->to_hours}}</span> </label>
                </div>



                               <div class="col-sm-12">
                                  <button class="send_btn">حجز الموعد </button>
                               </div>


                            </div>
                         </form>

                </div>
             </div>
             </div>
         </div>
      </section>
      <!-- end banner -->

      @push('js')
      <script>
        var hours ;
        var from ;

      </script>
      <script>

        function showHours (param) {
            hours = "";
            console.log("param: "+param);
            var xhttp;
      if (param == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
      }
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
         // document.getElementById("txtHint").innerHTML = this.responseText;
       //  console.log("response: "+this.responseText);
         js= JSON.parse(this.responseText);
            //hours= js.hours;
            from= js;

          //  console.log("hours: "+hours);

            console.log(from);
          //  const keys = Object.keys(hours);
            const select = document.querySelector('select');






            var i, L = select.options.length - 1;
            for(i = L; i >= 0; i--) {
                select.remove(i);
              }
              let newOption = new Option("قم باختيار ساعة بدء الحجز","");
                select.add(newOption,undefined);
              for (let index = 0; index < from.length; index++) {
                let newOption = new Option(`${from[index]}م`,from[index]);
                select.add(newOption,undefined);
              }



        }
      };
      xhttp.open("GET", "appointment/get?date="+param, true);
      xhttp.send();
    }



    function endAppointment (param) {
            console.log("param: "+param);
            var xhttp;
      if (param == "") {
        return;
      }
      hours={"12:00":"12:30","12:30":"13:00","13:00":"13:30","13:30":"14:00","14:00":"14:30","14:30":"15:00","15:00":"15:30",
      "15:30":"16:00",
      "16:00":"16:30","16:30":"17:00","17:00":"17:30",'17:30':"18:00","18:00":"18:30","18:30":"19:00","19:00":"19:30","19:30":"20:00"};
      endhour = hours[param];
      span = document.getElementById('end');

    span.innerHTML = `${endhour}م`;

    }



    setTimeout(() => {
        date = document.getElementById('date');
        console.log(date);
        console.log(date.value);
        showHours(date.value)
    }, 3000);
    </script>
      @endpush

      @endsection
