<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isnad Survey</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   
   <div class="field_container">
         
         <div class="navbar">

             <div class="img-div">
                <!-- <h3 style="color:#fff">Isnad </h3> -->
               <a href="/"><img src="{{ asset('imgs/logo.png') }}" alt="Isnad Survey"></a> 
             </div>
  
             <div class="icons_div">

             <a href="{{ url('dashboard/users') }}" title="المستخدين">
               <div class="icon" >
                   <i class="fa fa-user" ></i>
               </div>
               </a>

               <a href="{{ url('dashboard/complexes') }}" title="المجمعات">
               <div class="icon">
                   <i class="fa fa-tasks"></i>
               </div>
               </a>


               <a href="{{ url('dashboard/earthlinks') }}"  title="ايرثلنك ">
               <div class="icon">
                   <i class="fa fa-globe"></i>
               </div>
               </a>

               
               <a href="{{ url('dashboard/showrooms') }}"  title="غرفة العرض">
               <div class="icon">
                   <i class="fa fa-university"></i>
               </div>
               </a>

               <div class="icon" title="Sign Out">
               <a href="" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        <span class="icon">
                            <i class="fa fa-sign-out" name="log-out-outline"></i>
                        </span>
                    </a>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

               </div>
             </div>

         </div>


        
         <div class="container">
            
           
           @yield('content')
         </div>
   </div>

<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>