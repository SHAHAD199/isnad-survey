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


function academic_achievement($variable)
{
$result = ($variable == 0) ? "ثانوي" :
(($variable == 1) ? "دبلوم" :
(($variable == 2) ? "بكالوريوس" :
(($variable == 3) ? "ماجستير" :
(($variable == 4) ? "دكتوراه" : ""

))));

return $result;
}

function marital_status($variable)
{
$result = ($variable == 0) ? "متزوج - متزوجة" : "اعزب - عزباء" ;
return $result;
}


function best_payment($variable)
{
$result = ($variable == 0) ? "دفعة المقدمة ميسرة وباقساط عالية" : "دفعة المقدمة عالية واقساط ميسرة" ;
return $result;
}

function estate_type($variable)
{
$result = ($variable == 0) ? "افقي" : "عمودي" ;
return $result;
}


function area($variable)
{
$result = ($variable == 0) ? "(100-200)" :
(($variable == 1) ? "(200-300)" :
(($variable == 2) ? "(300-400)" :
(($variable == 3) ? "(400-500)" : ""
)));
return $result;
}


function location($variable)
{

  $variable = explode(',', $variable);
  $location_array = [];
     foreach($variable as $var){
     $result = ($var == 0) ? "وسط بغداد" :
     (($var == 1) ? "مناطق التوسعة الجديدة(اطراف بغداد)" :
     (($var == 2) ? "محافظات الفرات الاوسط(النجف-كربلاء-الديوانية)" :
     (($var == 3) ? "محافظات غرب العراق (الانبار)" :
     (($var == 4) ? "محافظات وسط العراق (صلاح الدين، ديالى)" :
     (($var == 5) ? "محافظات شمال العراق (كوردستان، الموصل)" : ""
     )))));
   array_push($location_array, $result);
}

return $location_array;

}

function purchase_purpose($variable)
{
$result = ($variable == 0) ? "سكن" :
(($variable == 1) ? "استثمار" : "");
return $result;
}



function payment_budget($variable)
{
$result = ($variable == 0) ? " (50 - 100)" :
          (($variable == 1) ? "(100 - 200)" :
          (($variable == 2) ? "(200 - 300)" : ""
          ));
return $result;
}



function budget($variable)
{
$result = ($variable == 0) ? "(2 - 5)" :
          (($variable == 1) ? "(5 - 10)" :
          (($variable == 2) ? "(10 - 20)" : ""
          ));
return $result;
}


@endphp

<main>
  <div class="filter_div">
    <form action="{{ url('dashboard/earthlinks') }}">
      @csrf
      <input type="text" name="fname" placeholder="fname">
      <input type="text" name="phone" placeholder="phone">

      <select name="complex_id" id="">
        <option value=""></option>
        @foreach($complexes as $complex)
        <option value="{{ $complex->id }}">{{ $complex->name }}</option>
        @endforeach
      </select>

      <select name="region" id="">
        <option value=""></option>
        @foreach($regoins as $regoin)
        <option value="{{ $regoin }}">{{ $regoin }}</option>
        @endforeach
      </select>

      <select name="family_number" id="">
        <option value=""></option>
        <option value="0">2 - 4</option>
        <option value="1">4 - 8</option>
        <option value="3">8 - 12</option>
        <option value="4">12 - 16</option>
      </select>

      <input type="text" name="profession" placeholder="profession">

      <button><i class="fa fa-search"></i></button>
    </form>
  </div>

  <div class="table-div">
    <div class="info-model-div">
      <h3>ايرثلنك <span>{{ $items->count() }}</span></h3>
      <!-- <a href="{{ url('dashboard/showrooms/create') }}"><i class="fa fa-plus"></i></a> -->
    </div>

    <div class="table">
      <table>
        <thead>
          <th>الاسم </th>
          <th>رقم الهاتف</th>
          <th>المحافظة</th>
          <th>المدينة</th>
          <th>عدد افراد الاسرة</th>
          <th>المهنة</th>
          <th>المجمع</th>
          <th>التحصيل  الدراسي</th>
          <th>الحالة الاجتماعية</th>
          <th>افضل طريقة</th>
          <th>نوع العقار</th>
          <th>الموقع الجغرافي</th>
          <th>مساحة العقار</th>
          <th>غرض الشراء</th>
          <th>ميزانية المقدمة</th>
          <th>ميزانية الدفعات</th>
          <!-- <th>Actions</th> -->
        </thead>
        @foreach($items as $item)
        <tbody>
          <td>{{ $item->fname}}</td>
          <td>{{ $item->phone }}</td>
          <td>{{ $item->region->name}}</td>
          <td>{{ $item->city }}</td>
          <td>{{ family_number($item->family_number) }}</td>
          <td>{{ $item->profession }}</td>
          <td>{{ $item->complex->name }}</td>
          <td>{{academic_achievement($item->academic_achievement) }}</td>
          <td>{{ marital_status($item->marital_status) }}</td>
          <td>{{ best_payment($item->best_payment)}}</td>
          <td>{{ estate_type($item->estate_type)}}</td>
          <td>
             @php 
                $location =  location($item->location );
            @endphp
            <ul>
              @foreach($location as $lo)
                <li>{{ $lo }}</li>
              @endforeach
            </ul>
          
          </td>
          <td>{{ area($item->area)  }} متر</td>

          <td>{{ purchase_purpose($item->purchase_purpose )}}</td>
          <td>{{ payment_budget($item->payment_budget) }} مليون د.ع</td>
          <td>{{ budget($item->budget )}} مليون د.ع</td>
          <!-- <td>
            <a href='{{ url("dashboard/earthlinks/$item->id/edit") }}'><i class="fa fa-edit"></i></a>
            <form action='{{ url("dashboard/earthlinks/$item->id") }}'>
              @csrf
              @method("DELETE")
              <button><i class="fa fa-trash"></i></button>
            </form>
          </td> -->
        </tbody>
        @endforeach
      </table>
    </div>
  </div>
</main>
@endsection