@extends('dashboard.layout')
@section('content')

<main>
    <div class="table-div">

        <div class="info-model-div">
            <h3> اضافة مستخدنم</h3>
            <a href="{{ url('dashboard/users') }}" class="all">all</a>
        </div>

        <div class="form-div">
            <form action="{{ url('dashboard/users') }}" method="post">
                @csrf
                <div class="input-div">
                    <label for="name">الاسم</label>
                    <input type="text" name="name" value="{{ old('name') }}" id="name">
                </div>

                <div class="input-div">
                    <label for="phone">رقم الهاتف</label>
                    <input type="text" name="phone" value="{{ old('phone') }}" id="phone">
                </div>

                <div class="input-div">
                    <label for="">كلمة المرور</label>
                    <input type="password" name="password">
                </div>

                <div class="input-div">
                    <button>Add</button>
                </div>

            </form>
        </div>
    </div>
</main>

@endsection