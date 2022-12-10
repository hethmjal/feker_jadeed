<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
@php
    $fromhours = [12,"12:30",1,"1:30",2,"2:30",3,"3:30",4,"4:30",5,'5:30',6,"6:30",7,"7:30"];
@endphp
<form action="{{route('appointment.store')}}" method="post">
    @csrf
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


                 <div class="p-6 text-gray-900">
                    <label for="">اليوم</label>
                    <input onchange="showHours(this.value)"  id="date" class="" type="date" min="<?=date('Y-m-d', time())?>" name="date" >`.
                </div>

                <div class="p-6 text-gray-900">
                    <label for="">من الساعة</label>
                   <select name="from" id="">
                    <option value=""></option>
                    @foreach ($fromhours as $item)
                    <option value="{{$item}}">{{$item}}</option>
                    @endforeach
                   </select>
                </div>




                 <div class="p-6 text-gray-900">
                    <button type="submit">حجز موعد</button>
                 </div>



            </div>
        </div>
    </div>
</form>






<div>

</div>
<script>

    function showHours (param) {
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
     console.log("response: "+this.responseText);
     js= JSON.parse(this.responseText);
     console.log(js.to);



    }
  };
  xhttp.open("GET", "appointment/get?date="+param, true);
  xhttp.send();
}





</script>
</x-app-layout>
