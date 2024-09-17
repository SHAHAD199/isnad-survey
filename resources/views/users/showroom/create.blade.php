@extends('users.app')
@section('containt')

<style>
    @media (min-width: 768px) {
        .form_content_div,
        .header_div,
        .text-div {
            padding: 1% 20% !important;
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

<div class="text-div">
    <p>جميع معلوماتك ستستخدم حصرا للتواصل معك وتقديم اعلى جودة خدمة</p>
</div>

<div class="form_content_div">
     <form action="{{url('showroom') }}" method="post">
        @csrf 

        <div class="input_div">

           
            <label for="fname" class="main-label">الاسم الثلاثي 
               @if ($errors->has('fname'))
                  <span class="error">{{ $errors->first('fname') }}</span>
               @endif
           </label>
            <input type="text" name="fname" placeholder="" value="{{ old('fname') }}" class="{{ ($errors->has('fname')) ? 'error-input' : '' }}">
        
        </div>

        <div class="input_div">
            <label for="phone" class="main-label">رقم الهاتف
               @if ($errors->has('phone'))
                  <span class="error">{{ $errors->first('phone') }}</span>
               @endif
            </label>
            <input type="text" name="phone" placeholder="" value="{{ old('phone') }}" class="{{ ($errors->has('phone')) ? 'error-input' : '' }}">
        </div>


        <div class="input_div">
            <label for="visit_date" class="main-label">  تاريخ الزيادة
               @if ($errors->has('visit_date'))
                  <span class="error">{{ $errors->first('visit_date') }}</span>
               @endif
            </label>
            <input type="date" name="visit_date" placeholder="" value="{{ old('visit_date') }}" class="{{ ($errors->has('visit_date')) ? 'error-input' : '' }}">
        </div>

        <div class="input_div">
            <label for="visit_number" class="main-label"> عدد الزيارات
              @if ($errors->has('visit_number'))
                  <span class="error">{{ $errors->first('visit_number') }}</span>
              @endif
            </label>
            <div class="radio-input-div">
                 <div class="radio">
                    <input type="radio" name="visit_number" id="" value="1"
                    @if( old('visit_number') == 1) checked @endif> 
                    <label for=""> اولى</label>
                </div> 

                 <div class="radio"> 
                 <input type="radio" name="visit_number" id="" value="2"
                 @if( old('visit_number') == 2) checked @endif>
                 <label for="">ثانية</label>
                 </div>
                <hr>
            </div>
        </div>


        <div class="input_div">
            <label for="region_id" class="main-label">المحافظة
            @if ($errors->has('region_id'))
                  <span class="error">{{ $errors->first('region_id') }}</span>
               @endif
            </label>
            <select name="region_id" id="" class="{{ ($errors->has('region_id')) ? 'error-input' : '' }}">
                <option value=""></option>
                @foreach($regions as $region)
                 <option value="{{ $region->id }}" @if(old('region_id') != null && old('region_id') == $region->id) selected @endif>{{ $region->name}}</option>
                @endforeach
            </select>
        </div>


        <div class="input_div">
            <label for="city" class="main-label">عنوان السكن الحالي
              @if ($errors->has('city'))
                  <span class="error">{{ $errors->first('city') }}</span>
              @endif
            </label>
            <input type="text" name="city" placeholder="" value="{{ old('city') }}"  class="{{ ($errors->has('city')) ? 'error-input' : '' }}">
        </div>

        <div class="input_div">
            <label for="profession" class="main-label">المهنة
              @if ($errors->has('profession'))
                  <span class="error">{{ $errors->first('profession') }}</span>
              @endif
            </label>
            <input type="text" name="profession" placeholder="" value="{{ old('profession') }}" class="{{ ($errors->has('profession')) ? 'error-input' : '' }}">
        </div>

     

        <div class="input_div">
            <label for="family_number" class="main-label">عدد افراد الاسرة
              @if ($errors->has('family_number'))
                  <span class="error">{{ $errors->first('family_number') }}</span>
              @endif
            </label>
            <select name="family_number" id="family_number" class="{{ ($errors->has('family_number')) ? 'error-input' : '' }}">
                <option value=""></option>
                <option value="0" @if(old('family_number') != null && old('family_number') == 0) selected @endif>(2-4)</option>
                <option value="1" @if(old('family_number') != null && old('family_number') == 1) selected @endif>(4-8)</option>
                <option value="2" @if(old('family_number') != null && old('family_number') == 2) selected @endif>(8-12)</option>
                <option value="3" @if(old('family_number') != null && old('family_number') == 3) selected @endif>(12-16)</option>
            </select>
        </div>

        <div class="input_div">
            <label for="complex_id" class="main-label">المجمع المهتم به
              @if ($errors->has('complex_id'))
                  <span class="error">{{ $errors->first('complex_id') }}</span>
              @endif
            </label>
            <select name="complex_id" id="complex_id" class="{{ ($errors->has('complex_id')) ? 'error-input' : '' }}">
                 <option value=""></option>
                 @foreach($complexes as $complex)
                  <option value="{{ $complex->id }}" @if(old('complex_id') != null && old('complex_id') == $complex->id) selected @endif >{{  $complex->name}}</option>
                 @endforeach
            </select>
            <hr>
        </div>

  


        
        <div class="input_div">
            <label for="payment_method" class="main-label"> طريقة الدفع
              @if ($errors->has('payment_method'))
                  <span class="error">{{ $errors->first('payment_method') }}</span>
              @endif
            </label>
            <div class="radio-input-div">
                 <div class="radio">
                    <input type="radio" name="payment_method" id="" value="0"
                    @if( old('payment_method') != null && old('payment_method') == 0) checked @endif> 
                    <label for="">نقد</label>
                </div> 

                 <div class="radio"> 
                 <input type="radio" name="payment_method" id="" value="1"
                 @if(old('payment_method') != null && old('payment_method') == 1) checked @endif>
                 <label for="">اقساط</label>
                 </div>
                <hr>
            </div>
        </div>

        <div class="input_div">
            <label for="recognition_method" class="main-label"> كيف تعرفت على المجمع / اسناد 
              @if ($errors->has('recognition_method'))
                  <span class="error">{{ $errors->first('recognition_method') }}</span>
              @endif
            </label>
            <div class="radio-input-div">
                 <div class="radio">
                    <input type="radio" name="recognition_method" id="" value="0"
                    @if(old('recognition_method') != null && old('recognition_method') == 0) checked @endif> 
                    <label for="">منصات التواصل الاجتماعي</label>
                </div> 

                 <div class="radio"> 
                 <input type="radio" name="recognition_method" id="" value="1"
                 @if(old('recognition_method') != null && old('recognition_method') == 1) checked @endif>
                 <label for=""> اعلانات حارجية</label>
                 </div>

                 <div class="radio">
                    <input type="radio" name="recognition_method" id="" value="2"
                    @if(old('recognition_method') != null && old('recognition_method') == 2) checked @endif> 
                    <label for="">صديق</label>
                </div> 

                 <div class="radio"> 
                 <input type="radio" name="recognition_method" id="" value="3"
                 @if(old('recognition_method') != null && old('recognition_method') == 3) checked @endif>
                 <label for="">مباشر</label>
                 </div>
                <hr>
            </div>
        </div>

        <div class="input_div">
            <label for="">ملاحظات اخرى</label>
            <textarea name="note" id="" rows="20" cols="10"></textarea>
        </div>



        <div class="input_div">
            <button>ارسال</button>
        </div>
        </div>
     </form>
</div>
@endsection