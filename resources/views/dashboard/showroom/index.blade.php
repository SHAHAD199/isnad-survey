@extends('dashboard.layout')
@section('content')


@php
function family_number($variable)
{
$result = ($variable == 0) ? "2 - 4" :
(($variable == 1) ? "4 - 8" :
(($variable == 2) ? "8 - 12" :
(($variable == 3) ? "12 - 16"
: "16 فما فوق"
)));

return $result;
} 


function payment_method($variable)
{
$result = ($variable == 0) ? "نقد" : "اقساط" ;
return $result;
} 

function recognition_method($variable)
{
$result = ($variable == 0) ? "منصات التواصل الاجتماعي" :
(($variable == 1) ? "اعلانات خارجية" :
(($variable == 2) ? "صديق" :
(($variable == 3) ? "مباشر"
: ""
)));

return $result;
} 

@endphp

<main>
    <div class="filter_div">
        <form action="{{ url('dashboard/showrooms') }}">
            @csrf 
            <input type="text" name="fname" placeholder="name">
            <input type="text" name="phone" placeholder="phone">

            <select name="complex_id" id="">
              <option value=""></option>
              @foreach($complexes as $complex)
              <option value="{{ $complex->id }}">{{ $complex->name }}</option>
              @endforeach
            </select>



           

            <input type="date" name="visit_date">

            <!-- <select name="visit_number" id="">
              <option value=""></option>
              <option value="1">زيارة اولى</option>
              <option value="2">زيارة ثانية</option>
            </select> -->

            <select name="payment_method" id="">
              <option value=""></option>
              <option value="0">نقد</option>
              <option value="1">اقساط</option>
            </select>

            <select name="recognition_method" id="">
              <option value=""></option>
              <option value="0">منصات التواصل</option>
              <option value="1">اعلانات خارجية</option>
              <option value="3">مباشر</option>
              <option value="4">صديق</option>
            </select>

            <!-- <select name="family_number" id="">
              <option value=""></option>
              <option value="0">2 - 4</option>
              <option value="1">4 - 8</option>
              <option value="3">8 - 12</option>
              <option value="4">12 - 16</option>
            </select> -->

            <!-- <input type="text" name="profession" placeholder="profession"> -->

            <button><i class="fa fa-search"></i></button>
        </form>
    </div>

    <div class="table-div">
         <div class="info-model-div">
               <h3>غرفة العرض <span>{{ $items->count() }}</span></h3>
               <!-- <a href="{{ url('dashboard/showrooms/create') }}"><i class="fa fa-plus"></i></a> -->
         </div>

         <div class="table">
              <table>
                <thead>
                    <th>الاسم</th>
                    <th>رقم الهاتف</th>
                    <th>المحافظة</th>
                    <th>تاريخ الزيارة</th>
                    <th>عدد الزيارات</th>
                    <th>طريقة الدفع</th>
                    <th>كيف عرفت المجمع / اسناد</th>
                    <th>عدد افراد الاسرة</th>
                    <th>المهنة</th>
                    <th>المجمع</th>
                    <th>ملاحظات</th>
                </thead>
                @foreach($items as $item)
                <tbody>
                    <td>{{ $item->fname}}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->region->name}}</td>
                    <td>{{ $item->visit_date }}</td>
                    <td>{{ $item->visit_number}}</td>
                    <td>{{ payment_method($item->payment_method) }}</td>
                    <td>{{ recognition_method($item->recognition_method)}}</td>
                    <td>{{ family_number($item->family_number) }}</td>
                    <td>{{ $item->profession }}</td>
                    <td>{{ $item->complex->name }}</td>
                    <td>{{ $item->showroomNote->note }}</td>
                </tbody>
                @endforeach
              </table>
         </div>
    </div>
</main>
@endsection