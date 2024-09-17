<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="overlay"></div>
    <div class="login-div">
        <form action="{{ url('login') }}" method="post">
            @csrf 

            <div class="input-div">
                <label for="">رقم الهاتف</label>
                <input type="text" name="phone">
            </div>

            <div class="input-div">
                <label for="">كلمة المرور</label>
                <input type="password" name="password">
            </div>

            <div class="input-div">          
                <button>Login</button>
            </div>

        </form>
    </div>
</body>
</html>