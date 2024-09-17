@extends('dashboard.layout')
@section('content')

<style>
    .statistics {
        padding: 5%;
        display: flex;
        gap: 20px;
    }
    .statistics .item{
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 150px;
        border: .4px solid #ccc;
        color:#01233d;
        padding: 2%;
        border-radius: 20px;

    }
</style>
         @php 
         $earthlinks = App\Models\EarthLink::count();
         $showrooms = App\Models\ShowRoom::count();
         @endphp 

         <div class="statistics">
                 <div class="item">
                    <h5>ايرثلنك</h5>
                    <h5>{{ $earthlinks }}</h5>
                 </div>
                 <div class="item">
                    <h5>غرفة العرض </h5>
                    <h5>{{ $showrooms }}</h5>
                 </div>
            </div>

@endsection