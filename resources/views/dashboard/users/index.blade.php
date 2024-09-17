@extends('dashboard.layout')
@section('content')

<main>
    <div class="filter_div">
        <form action="{{ url('dashboard/users') }}">
            @csrf 
            <input type="text" name="name">
            <button><i class="fa fa-search"></i></button>
        </form>
    </div>

    <div class="table-div">
         <div class="info-model-div">
               <h3>المستخدمين <span>{{ $items->count() }}</span></h3>
               <a href="{{ url('dashboard/users/create') }}"><i class="fa fa-plus"></i></a>
         </div>

         <div class="table">
              <table>
                <thead>
                    <th>الاسم</th>
                    <th>رقم الهاتف</th>
                    <th>الحالة</th>
                    <th>العمليات</th>
                </thead>
                @foreach($items as $item)
                <tbody>
                    <td>{{ $item->name}}</td>
                    <td>{{ $item->phone }}</td>
                    <td> 
                        <span class="Active"></span> فعال</td>
                    <td>
                        <a href='{{ url("dashboard/users/$item->id/edit") }}'><i class="fa fa-edit"></i></a>
                        <form action='{{ url("dashboard/users/$item->id") }}' method="post">
                            @csrf 
                            @method("DELETE")
                            <button><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tbody>
                @endforeach
              </table>
         </div>
    </div>
</main>
@endsection