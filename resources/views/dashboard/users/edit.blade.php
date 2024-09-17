@extends('dashboard.layout')
@section('content')

<main>
    <div class="table-div">

        <div class="info-model-div">
            <h3> تعديل معلومات المستخدم</h3>
            <a href="{{ url('dashboard/users') }}" class="all">all</a>
        </div>

        <div class="form-div">
            <form action="{{ url('dashboard/users') }}" method="post">
                @csrf
                @method('PUT')
                <div class="input-div">
                    <label for="">الاسم</label>
                    <input type="text" name="name" value="{{ $item->name }}">
                </div>

                <div class="input-div">
                    <label for="">رقم الهاتف</label>
                    <input type="text" name="phone" value="{{ $item->phone }}">
                </div>

                <div class="input-div">
                    <label for="">كلمة المرور</label>
                    <input type="password" name="password">
                </div>

                <div class="input-div">
                    <button>تعديل</button>
                </div>

            </form>
        </div>
    </div>
</main>

@endsection