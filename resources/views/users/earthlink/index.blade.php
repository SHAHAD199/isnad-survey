@extends('users.app')
@section('containt')


<style>
    main {
        padding: 0px;
    }
    .slider {
        margin: 5%;
        width:1300px;
        max-width:100vw;
        height:400px;
        margin: auto;
        position: relative;
        overflow: hidden;
    }
    .list {
        position: absolute;
        top:0;
        left:0;
        height: 100%;
        display: flex;
        width: max-content;
        transition: 1s;
    }

    .list img {
        width:1300px;
        max-width: 100vw;
        height: 100%;
        object-fit: cover;
    }
    .buttons {
        position: absolute;
        top:45%;
        left:5%;
        width:90%;
        display: flex !important;
        align-items: center;
        justify-content: space-between;
    }
    .buttons button {
        width:50px;
        height: 50px;
        border-radius: 50%;
        background-color: #012301;
        color:#c9c8c7;
        border:none;
        font-weight: bold;
    }

    .dots {
        position: absolute;
        bottom: 10px;
        color:#fff;
        left:0;
        width:100%;
        margin:0;
        padding:0;
        display:flex;
        justify-content: center;
    }
    .dots li {
        list-style:none;
        width:10px;
        height:10px;
        background-color: #fff;
        margin: 20px;
        border-radius: 20px;
        transition: 1s;
    }
    .dots li.active{
        background-color: #e0bf7d;
    }

    @media (max-width: 768px)
    {
        .slider {
            height: 350px !important;
        }
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


<div class="slider">
    <div class="list">
        <div class="item">
            <img src="{{ asset('imgs/isnad.jpg') }}" alt="">
        </div>

        <div class="item">
            <img src="{{ asset('imgs/isnad.jpg') }}" alt="">
        </div>

        <div class="item">
            <img src="{{ asset('imgs/IMG_0264.jpg') }}" alt="">
        </div>

        <div class="item">
            <img src="{{ asset('imgs/IMG_0381.jpg') }}" alt="">
        </div>
    </div>

    <div class="buttons">
        <button id="prev"><</button>
        <button id="next">></button>
    </div>

    <ul class="dots">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>

<div class="text-div">
    <p>نحن شركة اسناد المختصة بتسويق وبيع المشاريع السكنية في العراق يسعدنا ان نكون لك سند في اختياراتك العقارية في العراق هذا الاستبيان سيجعلنا اقرب اليك ولفهم احتياجك العقاري وليتمكن فريق المبيعات من التواصل معك وتقديم افضل الخيارات السكنية و الاستثمارية    </p>
</div>

<div class="button_div">
    <a href="{{ url('earthlink/create') }}">أبدأ الان <i class="fa fa-long-arrow-left"></i></a>
</div>


<script>
    let list = document.querySelector('.slider .list');
    let items = document.querySelectorAll('.slider .list .item');
    let dots = document.querySelectorAll('.slider .dots li');
    let prev = document.getElementById('prev');
    let next = document.getElementById('next');


    let active = 0;
    let lengthItems = items.length - 1;

    next.onclick = function ()
    {
        if(active + 1 > lengthItems)
        {
          active = 0;
        }else {
            active = active + 1;
        }
        reloadSider();
    }


    prev.onclick = function ()
    {
        if(active - 1 < 0)
        {
          active = lengthItems;
        }else {
            active = active - 1;
        }
        reloadSider();
    }

    let refreshSlider = setInterval(()=> {
       next.click()
    }, 5000);
    function reloadSider()
    {
        let checkLeft = items[active].offsetLeft;
        list.style.left = -checkLeft + 'px';

        let lastActiveDot = document.querySelector('.slider .dots li.active');
        lastActiveDot.classList.remove('active');
        dots[active].classList.add('active');
        clearInterval(refreshSlider);
        let refreshSlider = setInterval(()=> {
       next.click()
    }, 5000);
    }

    dots.forEach((li, key) => {
        li.addEventListener('click' , function(){
            active = key;
            reloadSider();
        })
    })
</script>

@endsection