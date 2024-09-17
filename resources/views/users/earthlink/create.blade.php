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
     <form action="{{url('earthlink') }}" method="post">
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
            <label for="email" class="main-label"> البريد الالكتروني - اختياري
               @if ($errors->has('email'))
                  <span class="error">{{ $errors->first('email') }}</span>
               @endif
            </label>
            <input type="text" name="email" placeholder="" value="{{ old('email') }}" class="{{ ($errors->has('email')) ? 'error-input' : '' }}">
        </div>


        <div class="input_div">
            <label for="region_id" class="main-label">المحافظة
            @if ($errors->has('region_id'))
                  <span class="error">{{ $errors->first('region_id') }}</span>
               @endif
            </label>
            <select name="region_id" id="" class="{{ ($errors->has('region_id')) ? 'error-input' : '' }}">
                <option value="{{ old('region_id') }}"></option>
                @foreach($regions as $region)
                 <option value="{{ $region->id }}" @if(old('region_id') != null && old('region_id') == $region->id) selected @endif >{{ $region->name}}</option>
                @endforeach
            </select>
        </div>


        <div class="input_div">
            <label for="city" class="main-label">عنوان السكن الحالي
              @if ($errors->has('city'))
                  <span class="error">{{ $errors->first('city') }}</span>
              @endif
            </label>
            <input type="text" name="city" placeholder="" value="{{ old('city') }}" class="{{ ($errors->has('city')) ? 'error-input' : '' }}">
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
            <label for="academic_achievement" class="main-label">التحصيل الدراسي
              @if ($errors->has('academic_achievement'))
                  <span class="error">{{ $errors->first('academic_achievement') }}</span>
              @endif
            </label>
            <select name="academic_achievement" id="" class="{{ ($errors->has('academic_achievement')) ? 'error-input' : '' }}">
                <option value=""></option>
                <option value="0" @if(old('academic_achievement') != null && old('academic_achievement') == 0) selected @endif>ثانوي</option>
                <option value="1" @if(old('academic_achievement') != null && old('academic_achievement') == 1) selected @endif>دبلوم</option>
                <option value="2" @if(old('academic_achievement') != null && old('academic_achievement') == 2) selected @endif>بكالوريوس</option>
                <option value="3" @if(old('academic_achievement') != null && old('academic_achievement') == 3) selected @endif>ماجستير</option>
                <option value="4" @if(old('academic_achievement') != null && old('academic_achievement') == 4) selected @endif>دكتوراه</option>
            </select>
        </div>

        <div class="input_div">
            <label for="family_number" class="main-label">عدد افراد الاسرة
              @if ($errors->has('family_number'))
                  <span class="error">{{ $errors->first('family_number') }}</span>
              @endif
            </label>
            <select name="family_number" id="family_number" class="{{ ($errors->has('family_number')) ? 'error-input' : '' }}">
                <option value="{{ old('family_number') }}"> </option>
                <option value="0" @if(old('family_number') != null && old('family_number') == 0) selected @endif>(2-4)</option>
                <option value="1" @if(old('family_number') != null && old('family_number') == 1) selected @endif>(4-8)</option>
                <option value="2" @if(old('family_number') != null && old('family_number') == 2) selected @endif>(8-12)</option>
                <option value="3" @if(old('family_number') != null && old('family_number') == 3) selected @endif>(12-16)</option>
            </select>
        </div>
        
        <!-- <div class="input_div">
            <label for="family_number">عدد افراد الاسرة</label>
            <div class="radio-input-div">
                 <div class="radio">
                    <input type="radio" name="family_number" id="" value="2-4"> 
                    <label for="">(2-4) فرد</label>
                </div> 

                 <div class="radio">   
                    <input type="radio" name="family_number" id="" value="4-8">
                    <label for="">(4-8) فرد</label> 
                 </div>
                 <div class="radio"> 
                 <input type="radio" name="family_number" id="" value="8-12">
                  <label for="">(8-12) فرد</label>
                 </div>

                 <div class="radio"> 
                 <input type="radio" name="family_number" id="" value="12-16">
                 <label for="">(12-16) فرد</label>
                 </div>
            </div>
        </div> -->



        <div class="input_div">
            <label for="marital_status" class="main-label">الحالة الاجتماعية
              @if ($errors->has('marital_status'))
                  <span class="error">{{ $errors->first('marital_status') }}</span>
              @endif
            </label>
            <div class="radio-input-div">
                 <div class="radio">
                    <input type="radio" name="marital_status" id="" value="0"
                    @if(old('marital_status') != null && old('marital_status') == 0) checked @endif> 
                    <label for="">متزوج  - متزوجة</label>
                </div> 

                 <div class="radio"> 
                 <input type="radio" name="marital_status" id="" value="1"
                 @if(old('marital_status') != null && old('marital_status') == 1) checked @endif>
                 <label for="">اعزب  - عزباء</label>
                 </div>

                <hr>
            </div>
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
            <label for="best_payment" class="main-label">ما هو الأفضل لك؟
              @if ($errors->has('best_payment'))
                  <span class="error">{{ $errors->first('best_payment') }}</span>
              @endif
            </label>

            <div class="radio-input-div">
                 <div class="radio">
                    <input type="radio" name="best_payment" id="" value="0"
                    @if(old('best_payment') != null && old('best_payment') == 0) checked @endif> 
                    <label for="">دفعة المقدمة ميسرة وباقساط عالية </label>
                </div> 

                 <div class="radio"> 
                 <input type="radio" name="best_payment" id="" value="1"
                 @if(old('best_payment') != null && old('best_payment') == 1) checked @endif>
                 <label for="">دفعة المقدمة عالية واقساط ميسرة </label>
                 </div>

                <hr>
            </div>
        </div>


        
        <div class="input_div">
            <label for="estate_type" class="main-label"> نوع العقار
              @if ($errors->has('estate_type'))
                  <span class="error">{{ $errors->first('estate_type') }}</span>
              @endif
            </label>
            <div class="radio-input-div">
                 <div class="radio">
                    <input type="radio" name="estate_type" id="" value="0"
                    @if(old('estate_type') != null && old('estate_type') == 0) checked @endif> 
                    <label for="">افقي</label>
                </div> 

                 <div class="radio"> 
                 <input type="radio" name="estate_type" id="" value="1"
                 @if(old('estate_type') != null && old('estate_type') == 1) checked @endif>
                 <label for="">عمودي</label>
                 </div>
                <hr>
            </div>
        </div>

        <div class="input_div">
            <label for="area" class="main-label">مساحة العقار 
              @if ($errors->has('area'))
                  <span class="error">{{ $errors->first('area') }}</span>
              @endif
            </label>
            <div class="radio-input-div">
                 <div class="radio">
                    <input type="radio" name="area" id="" value="0"
                    @if(old('area') != null &&  old('area') == 0) checked @endif> 
                    <label for="">(100 - 200) متر</label>
                </div> 

                 <div class="radio"> 
                 <input type="radio" name="area" id="" value="1"
                 @if(old('area') != null && old('area') == 1) checked @endif>
                 <label for="">(200 - 300) متر</label>
                 </div>

                 <div class="radio">
                    <input type="radio" name="area" id="" value="2"
                    @if(old('area') != null && old('area') == 2) checked @endif> 
                    <label for="">(300 - 400) متر</label>
                </div> 

                 <div class="radio"> 
                 <input type="radio" name="area" id="" value="3"
                 @if(old('area') != null && old('area') == 3) checked @endif>
                 <label for="">(400 - 500) متر</label>
                 </div>
                <hr>
            </div>
        </div>


        <div class="input_div">
            <label for="location" class="main-label">الموقع الجغرافي
              @if ($errors->has('location'))
                  <span class="error">{{ $errors->first('location') }}</span>
              @endif
            </label>
            <div class="radio-input-div">
                 <div class="radio">
                    <input type="checkbox" name="location[]" id="" value="0"
                    @if(old('location') != null && in_array(0, old('location'))) checked @endif> 
                    <label for="">وسط بغداد</label>
                </div> 

                 <div class="radio"> 
                 <input type="checkbox" name="location[]" id="" value="1"
                 @if(old('location') != null && in_array(1, old('location'))) checked @endif>
                 <label for="">مناطق التوسعة الجديدة (اطراف بغداد)</label>
                 </div>

                 <div class="radio">
                    <input type="checkbox" name="location[]" id="" value="2"
                    @if(old('location') != null && in_array(2, old('location'))) checked @endif> 
                    <label for="">محافظات الفرات الاوسط (النجف، كربلاء، الديوانية)</label>
                </div> 

                 <div class="radio"> 
                    <input type="checkbox" name="location[]" id="" value="3"
                    @if(old('location') != null && in_array(3, old('location'))) checked @endif>
                    <label for="">محافظات غرب العراق (الانبار) </label>
                 </div>

                 
                 <div class="radio">
                    <input type="checkbox" name="location[]" id="" value="4"
                    @if(old('location') != null && in_array(4, old('location'))) checked @endif> 
                    <label for="">محافظات وسط العراق (صلاح الدين، ديالى)</label>
                </div> 

                 <div class="radio"> 
                    <input type="checkbox" name="location[]" id="" value="5"
                    @if(old('location') != null && in_array(5, old('location'))) checked @endif>
                    <label for="">محافظات شمال العراق (كوردستان، الموصل)</label>
                 </div>

                <hr>
            </div>
        </div>

           
        <div class="input_div">
            <label for="purchase_purpose" class="main-label">الغرض من شراء العقار 
              @if ($errors->has('purchase_purpose'))
                  <span class="error">{{ $errors->first('purchase_purpose') }}</span>
              @endif
            </label>
            <div class="radio-input-div">
                 <div class="radio">
                    <input type="radio" name="purchase_purpose" id="" value="0"
                    @if(old('purchase_purpose') != null && old('purchase_purpose') == 0) checked @endif> 
                    <label for="">سكن</label>
                </div> 

                 <div class="radio"> 
                 <input type="radio" name="purchase_purpose" id="" value="1"
                 @if(old('purchase_purpose') != null &&  old('purchase_purpose') == 1) checked @endif>
                 <label for="">استثمار</label>
                 </div>
                <hr>
            </div>
        </div>


        <div class="input_div">
            <label for="budget" class="main-label">الميزانية الحالية لدفعة المقدمة تبدأ من : 
                @if ($errors->has('budget'))
                  <span class="error">{{ $errors->first('budget') }}</span>
                @endif
            </label>
            <div class="radio-input-div">
                 <div class="radio">
                    <input type="radio" name="budget" id="" value="0"
                    @if(old('budget') != null &&  old('budget') == 0) checked @endif> 
                    <label for=""> (50 - 100) مليون د.ع</label>
                </div> 

                 <div class="radio"> 
                    <input type="radio" name="budget" id="" value="1"
                    @if(old('budget') != null &&  old('budget') == 1) checked @endif>
                    <label for=""> (100 - 200) مليون د.ع</label>
                 </div>

                 
                 <div class="radio"> 
                    <input type="radio" name="budget" id="" value="2"
                    @if(old('budget') != null &&  old('budget') == 2) checked @endif>
                    <label for=""> (200 - 300) مليون د.ع</label>
                 </div>

                <hr>
            </div>
        </div>

        <div class="input_div">
            <label for="payment_budget" class="main-label">ميزانية الدفعات الشهرية تبدأ من  :
                @if ($errors->has('payment_budget'))
                  <span class="error">{{ $errors->first('payment_budget') }}</span>
                @endif
            </label>
            <div class="radio-input-div">
                 <div class="radio">
                    <input type="radio" name="payment_budget" id="" value="0"
                    @if(old('payment_budget') != null &&  old('payment_budget') == 0) checked @endif> 
                    <label for=""> (2 - 5) مليون د.ع</label>
                </div> 

                 <div class="radio"> 
                    <input type="radio" name="payment_budget" id="" value="1"
                    @if(old('payment_budget') != null &&  old('payment_budget') == 1) checked @endif>
                    <label for=""> (5 - 10) مليون د.ع</label>
                 </div>

                 
                 <div class="radio"> 
                    <input type="radio" name="payment_budget" id="" value="2"
                    @if(old('payment_budget') != null &&  old('payment_budget') == 2) checked @endif>
                    <label for="">(10 - 20) مليون د.ع</label>
                 </div>

                <hr>
            </div>
        </div>

        <div class="input_div">
            <button>ارسال</button>
        </div>
        </div>
     </form>
</div>
@endsection