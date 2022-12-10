@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<br>
            <div class="content">

                <div class="container">

                    <br>
                    <div class="page-title">
                        <h3>الاشتراكات
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">


                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col">اسم المشترك</th>
                                    <th scope="col">تاريخ الاشتراك</th>
                                    <th scope="col">نوع الخطة </th>
                                    <th scope="col">العدد الاجمالي للجلسات </th>
                                    <th scope="col"> عدد الجلسات المتبقية </th>

                                    <th scope="col">الحالة  </th>


                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach ($subscriptions as $sub)
                                @if ($sub->status == 'جديد')

                                <tr class="table-success">
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td >{{$sub->user->name}}</td>
                                    <td>{{$sub->date}}</td>
                                    <td>{{$sub->plan->name}}</td>
                                    <td>{{$sub->plan->numberOfSessions}}</td>
                                    <td>{{$sub->plan->numberOfSessions-$sub->sessions}}</td>
                                    <td>{{$sub->status}}</td>

                                    <td>
                                        <a class="btn btn-outline-danger btn-sm" href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                  </tr>
                                @else
                                <tr class="table-danger">
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td >{{$sub->user->name}}</td>
                                    <td>{{$sub->date}}</td>
                                    <td>{{$sub->plan->name}}</td>
                                    <td>{{$sub->plan->numberOfSessions}}</td>
                                    <td>{{$sub->plan->numberOfSessions-$sub->sessions}}</td>
                                    <td>{{$sub->status}}</td>

                                    <td>
                                        <a class="btn btn-outline-danger btn-sm" href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                  </tr>
                                @endif


                                @endforeach
                                </tbody>
                              </table>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
