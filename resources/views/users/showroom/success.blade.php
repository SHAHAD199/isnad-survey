@extends('users.app')
@section('containt')

<style>
    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>
<div class="logo-done-div">
    <img src="{{ asset('imgs/logo.png') }}" alt="">
</div>

<div class="text-done-div">
    <h4>نحن لك سند</h4>
</div>

<div class="info-done">
 <p>لمزيد من التفاصيل يمكنك الاتصال على <br><span> 6303 <i class="fa fa-phone"></i></span></p>
</div>


<div class="back-div">
    <a href="{{ url('showroom') }}"> عودة<i class="fa fa-long-arrow-left"></i></a>
</div>
@endsection