@extends('users.app')
@section('containt')



<style> 
    .carousel-inner {
        width:100%;
        margin: auto;
        height: 300px;
        /* padding: 3%; */
    }
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }
    .carousel-indicators li {
        width:10px;
        height: 10px;
        border-radius: 50%;
    }
    .carousel-indicators li.active {
        background-color: #d8af5d;
    }
    @media (min-width: 768px) {
        .form_content_div,
        .header_div,
        .text-div {
            padding: 3% 20% !important;
        }
        .carousel-inner {
          height: 400px !important;
          width: 70% !important;
        }
        /* .slider , */
    }
</style>


<div class="header_div">
    <div class="logo-div">
        <img src="{{ asset('imgs/logo.png') }}" alt="">
    </div>
    <div class="linktree-div">
        <a href="https://linktree.isnad-iq.com/" title="linktree"> <i class="fa fa-link"></i></a>
    </div>
</div>



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('imgs/isnad.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imgs/isnad.jpg') }}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{ asset('imgs/isnad.jpg') }}" class="d-block w-100" alt="...">
    </div>
  </div>
 
</div>


<div class="text-div">
    <p>نحن شركة اسناد المختصة بتسويق وبيع المشاريع السكنية في العراق يسعدنا ان نكون لك سند في اختياراتك العقارية في العراق هذا الاستبيان سيجعلنا اقرب اليك ولفهم احتياجك العقاري وليتمكن فريق المبيعات من التواصل معك وتقديم افضل الخيارات السكنية و الاستثمارية    </p>
</div>

<div class="button_div">
    <a href="{{ url('showroom/create') }}">أبدأ الان <i class="fa fa-long-arrow-left"></i></a>
</div>





@endsection