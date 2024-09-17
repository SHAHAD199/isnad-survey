@extends('dashboard.layout')
@section('content')

<main>
    <div class="table-div">

        <div class="info-model-div">
            <h3> تعديل مجمع</h3>
            <a href="{{ url('dashboard/complexes') }}" class="all">all</a>
        </div>

        <div class="form-div">
            <form action='{{ url("dashboard/complexes/$item->id") }}' method="post">
                @csrf
                @method('PUT')
                <div class="input-div">
                    <label for="">الاسم</label>
                    <input type="text" name="name" value="{{ $item->name }}">
                </div>

           
                <div class="input-div">
                    <button>تعديل</button>
                </div>

            </form>
        </div>
    </div>
</main>

@endsection