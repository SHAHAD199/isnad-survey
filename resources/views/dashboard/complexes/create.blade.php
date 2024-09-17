@extends('dashboard.layout')
@section('content')

<main>
    <div class="table-div">

        <div class="info-model-div">
            <h3> اضافة مجمع</h3>
            <a href="{{ url('dashboard/complexes') }}" class="all">الكل</a>
        </div>

        <div class="form-div">
            <form action="{{ url('dashboard/complexes') }}" method="post">
                @csrf
                <div class="input-div">
                    <label for="">الاسم</label>
                    <input type="text" name="name" value="{{ old('name') }}">
                </div>

                <div class="input-div">
                    <button>اضافة</button>
                </div>

            </form>
        </div>
    </div>
</main>

@endsection