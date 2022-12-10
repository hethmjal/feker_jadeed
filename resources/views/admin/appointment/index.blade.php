@extends('admin.layout.partials')
@section('content')
@if (session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<br>
            <div class="content">
                <div>
                    <a class="btn btn-primary" href=""> اضافة حجز جديد</a>
                </div>


                <div class="container">

                    <br>
                    <div class="page-title">
                        <h3>الحجوزات
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">


                            <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"></th>
                                    <th scope="col">الاسم</th>
                                    <th scope="col">يوم الحجز</th>
                                    <th scope="col">التاريخ</th>
                                    <th scope="col">بداية الحجز</th>
                                    <th scope="col">نهاية الحجز</th>
                                    <th scope="col">الحالة  </th>
                                    <th scope="col">  </th>


                                    <th scope="col"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach ($appointments as $app)
                                @if ($app->status == 'جديد')

                                <tr class="table-success">
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td >{{$app->user->name}}</td>
                                    <td>{{$app->arday}}</td>
                                    <td>{{$app->date}}</td>
                                    <td>{{  $app->from_hour }}م</td>
                                      <td>{{$app->to_hour}}م</td>
                                    <td>{{$app->status}}</td>

                                    <td>
                                        <a class="btn btn-outline-success btn-sm" href=" "><i class="fa fa-edit" aria-hidden="true"></i></a>

                                        <a class="btn btn-outline-danger btn-sm" href=""><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                  </tr>
                                @else
                                <tr class="table-danger">
                                    <th scope="row">{{$loop->index+1}}</th>
                                    <td>{{$app->user->name}}</td>
                                    <td>{{$app->arday}}</td>
                                    <td>{{$app->date}}</td>
                                    <td>{{  $app->from_hour }}م</td>
                                    <td>{{$app->to_hour}}م</td>
                                    <td>{{$app->status}}</td>
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
