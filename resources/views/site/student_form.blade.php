<html >
    <head>
        <link rel="stylesheet" href="{{ asset('site_files/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site_files/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('site_files/css/student_form/style.css') }}">
    </head>

    <body>
        <header class="p-3">
<section class=" col-md-12 d-flex justify-content-center m-2 pb-5 ">
    
    <h1> إستمارة بيانات الطالب  </h1>
    <div class="div mx-2  " > </div>

</section>
<section class="my-2 position-relative">
    <div class=" d-flex justify-content-end mb-1 ">
    <div class="main-div  position-absolute mx-2" > </div>
    <h2 class="mx-3 pe-1"> :بيانات الطالب(ة) الشخصية </h2> </div>

    <form action="{{ route('create') }}" method="POST" >
        @csrf

        <div class=" d-flex justify-content-end col-md-12">
      <input class="form-control m-3  w-75 " type="text" id="Aname" name="name" required>
      <label for="Aname"> :الاسم (باللغة العربية)  </label>  
    </div>
        <div class="d-flex justify-content-end col-md-12">
      <input class="form-control m-3 w-75 " type="text" id="Ename" name="name_en">
      <label for="Ename"> :الاسم (باللغة الإنجليزية)  </label>  
    </div>



    <div class="row">
        <div class="col-md-6 ps-5">
            <div class=" d-flex justify-content-start ms-5  ">
                <input class="form-control my-3   w-75 " type="date" id="BirthDate" name="birth_day">
                <label class="mx-2" for="BirthDate"> :تاريخ الميلاد </label>  
              </div>
        </div>
<div class="col-md-6">
    <div class=" d-flex justify-content-end ">
        <input class="form-control my-3  w-75 " type="text" id="adressBirth" name="birth_distination">
        <label class="mx-2" for="adressBirth"> :جهة الميلاد </label>  
      </div>
</div>
    </div>

    <div class="row">
        <div class="col-md-6 ps-5">
            <div class=" d-flex justify-content-start ms-5  ">
                <input class="form-control my-3   w-75 "  type="number" id="الرقم القومي" name="national_number">
                <label class="mx-2" for="الرقم القومي"> :الرقم القومي</label>  
              </div>
        </div>
<div class="col-md-6">
    <div class=" d-flex justify-content-end ">
       
        <select  class="my-3 me-4  w-75 form-control" name="nationality">
            <option value="" hidden >اختر بلد </option>
            <option value="مصر">مصر</option>
            <option value="الأردن">الأردن</option>
            <option value="السعودية">السعودية</option>
            <option value="فلسطين">فلسطين</option>
            <option value="سوريا">سوريا</option>
            <option value="قطر">قطر</option>
            <option value="السودان">السودان</option>
            <option value="المغرب">المغرب</option>
            <option value="سلطنة عمان">سلطنة عمان</option>
        </select> 
        <label  class="mx-2" for="nationality">:الجنسية</label>
      </div>
</div>
    </div>

    <div class="row">

        <div class="col-md-4 ">
            <div class=" d-flex justify-content-start ms-5  ">
                <input class="form-control my-3   w-75 " type="date" id="تاريخ الإصدار" name="nationality_date">
                <label class="ms-2" for="تاريخ الإصدار"> :تاريخ الإصدار </label>  
              </div>
        </div>
        <div class="col-md-4">
            <div class=" d-flex justify-content-end ">
                <input class="form-control my-3  w-75 " type="text" id="جهة الإصدار" name="nationality_distination">
                <label class="mx-2" for="جهة الإصدار"> :جهة الإصدار </label>  
              </div>
        </div>
        <div class="col-md-4">
            <div class=" d-flex justify-content-end ">
                <input class="form-control my-3  w-75 " type="number" id="رقم جواز السفر" name="passport_number">
                <label class="ms-2" for="رقم جواز السفر"> :رقم جواز السفر</label>  
              </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class=" d-flex justify-content-end me-5 ">
               
                <select  class="my-3   w-75 form-control" name="Certificate">
                    <option value="" hidden >اختر الشهادة </option>
                    <option value="الثانوية العامة">الثانوية العامة</option>
                    <option value="الثانوية الأزهرية ">الثانوية الأزهرية </option>
                </select> 
                <label  class="me-5 mx-2" for="الشهادة">:الشهادة</label>
              </div>
        </div>
<div class="col-md-6">
    <div class=" d-flex justify-content-end ">
       
        <select  class="my-3 me-4  w-75 form-control" name="section">
            <option value="" hidden >اختر الشعبة </option>
            <option value="علمي رياضة">علمي رياضة</option>
            <option value="علمي علوم">علمي علوم</option>
            <option value="علمي (أزهر)">علمي (أزهر)</option>
        </select> 
        <label  class="mx-2" for="الشعبة">:الشعبة</label>
      </div>
</div>
    </div>

    <div class="row">
        <div class="col-md-6 ">
            <div class=" d-flex justify-content-end ms-5 ">
                <input class="form-control my-3 ms-1  w-75 " type="number" id="مجموع الدرجات" name="total_degree">
                <label class="ms-2" for="مجموع الدرجات"> :المجموع الكلي للدرجات </label>  
              </div>
        </div>
<div class="col-md-6">
    <div class=" d-flex justify-content-end ">
        <input class="form-control my-3  w-75 " type="text" id="school" name="school">
        <label class="mx-2" for="school"> :المدرسة</label>  
      </div>
</div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class=" d-flex justify-content-end me-5 ">
                <input class="form-control my-3  w-75 " type="text" id="الإدارة" name="administration">
                <label class="mx-2 me-5" for="الإدارة"> :الإدارة</label>  
              </div>
        </div>

        <div class="col-md-6">
            <div class=" d-flex justify-content-end ">
               
                <select  class="my-3 me-2  w-75 form-control" name="governorate">
                    <option value="" hidden >اختر المحافظة </option>
                    <option value="القاهرة">القاهرة</option>
                    <option value="الجيزة ">الجيزة </option>
                    <option value="الدقهلية">الدقهلية</option>
                    <option value="بني سويف">بني سويف</option>
                    <option value="القليوبية">القليوبية</option>
                </select> 
                <label  class="me-2" for="المحافظة">:المحافظة</label>
              </div>
        </div>

    </div>
    <div class=" d-flex justify-content-end col-md-12">
       
        <textarea class="form-control m-3  w-75 " type="text" id="Adress" name="adress">
        </textarea>
        <label for="Adress"> :العنوان الدائم </label>  
      </div>
      <div class="row">
        <div class="col-md-6">
            <div class=" d-flex justify-content-end me-5 ">
                <input class="form-control my-3  w-75 " type="number" id="mobilePhone" name="phone">
                <label class="mx-2 me-5" for="mobilePhone"> :التليفون المحمول</label>  
              </div>
        </div>

        <div class="col-md-6">
            <div class=" d-flex justify-content-end ">
               
                <input  class="my-3 me-2  w-75 form-control" type="number" id="homePhone" name="home_phone">
              
                <label  class="me-2" for="homePhone">:التليفون الأرضي</label>
              </div>
        </div>
    </div>
    <div class=" d-flex justify-content-end col-md-12">
        <input class="form-control m-3  w-75 " type="email" id="email" name="email">
        <label for="email"> :البريد الإلكتروني </label>  
      </div>

<!-- ************** -->
<section class="my-5 position-relative">
    <div class=" d-flex justify-content-end mb-1 ">
        <div class="main-div  position-absolute mx-2" > </div>
        <h2 class="mx-3 pe-1"> :بيانات الطالب(ة) الأكاديمية</h2> </div>

</section>
<div class="row">
    <div class="col-md-6 ">
        <div class=" d-flex justify-content-end ms-5 ">
            <input class="form-control my-3 ms-1  w-75 " type="number" id="الرقم الجامعي" name="universty_id">
            <label class="ms-2" for="الرقم الجامعي"> :الرقم الجامعي للطالب </label>  
          </div>
    </div>
    <div class="col-md-6">
        <div class=" d-flex justify-content-end ">
           
            <select  class="my-3 me-4  w-75 form-control" name="college">
                <option value="المعهد العالي لعلوم الحاسب ونظم المعلومات" hidden >المعهد العالي لعلوم الحاسب ونظم المعلومات</option>
                <option value="المعهد العالي لعلوم الحاسب ونظم المعلومات"  >المعهد العالي لعلوم الحاسب ونظم المعلومات</option>
            </select> 
            <label  class="mx-2" for="الكلية">:الكلية</label>
          </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class=" d-flex justify-content-end ">
           
            <select  class="my-3 me-4  w-75 form-control" name="department">
                <option value="" hidden >اختر القسم </option>
                <option value="علوم حاسب "  >علوم حاسب </option>
                <option value="نظم معلومات"  >نظم معلومات</option>
            </select> 
            <label  class="mx-2" for="القسم">:القسم</label>
          </div>
    </div>
    <div class="col-md-6">
        <div class=" d-flex justify-content-end ">
           
            <select  class="my-3 me-4  w-75 form-control" name="group">
                <option value="اختر الفرقة " hidden >اختر الفرقة </option>
                <option value="الفرقة الأولى">الفرقة الأولى</option>
                <option value="الفرقة الثانية"  >الفرقة الثانية</option>
                <option value="الفرقة الثالثة"  >الفرقة الثالثة</option>
                <option value="الفرقة الرابعة"  >الفرقة الرابعة</option>
            </select> 
            <label  class="mx-2" for="الفرقة">:الفرقة</label>
          </div>
    </div>
</div>
<!-- **************** -->
<section class="my-5 position-relative">
    <div class=" d-flex justify-content-end mb-1 ">
        <div class="main-div  position-absolute mx-2" > </div>
        <h2 class="mx-3 pe-1"> :بيانات ولي أمر الطالب(ة) </h2> </div>

</section>
<div class=" d-flex justify-content-end col-md-12">
    <input class="form-control m-3  w-75 " type="text" id="name" name="f_name">
    <label for="name"> :الاسم  </label> 
</div>
<div class="row">
    <div class="col-md-6 ps-5">
        <div class=" d-flex justify-content-start ms-5  ">
            <input class="form-control my-3   w-75 " type="number" id="الرقم القومي" name="f_national_number">
            <label class="mx-2" for="الرقم القومي"> :الرقم القومي</label>  
          </div>
    </div>
<div class="col-md-6">
<div class=" d-flex justify-content-end ">
   
    <select  class="my-3 me-4  w-75 form-control" name="f_nationality">
        <option value="" hidden >اختر بلد </option>
        <option value="مصر">مصر</option>
        <option value="الأردن">الأردن</option>
        <option value="السعودية">السعودية</option>
        <option value="فلسطين">فلسطين</option>
        <option value="سوريا">سوريا</option>
        <option value="قطر">قطر</option>
        <option value="السودان">السودان</option>
        <option value="المغرب">المغرب</option>
        <option value="سلطنة عمان">سلطنة عمان</option>
    </select> 
    <label  class="mx-2" for="nationality">:الجنسية</label>
  </div>
</div>
</div>
<div class="row">


    <div class="col-md-4 ">
        <div class=" d-flex justify-content-start ms-5  ">
            <input class="form-control my-3   w-75 " type="date" id="تاريخ الإصدار" name="f_nationality_date">
            <label class="ms-2" for="تاريخ الإصدار"> :تاريخ الإصدار </label>  
          </div>
    </div>
    <div class="col-md-4">
        <div class=" d-flex justify-content-end ">
            <input class="form-control my-3  w-75 " type="text" id="جهة الإصدار" name="f_nationality_distination">
            <label class="mx-2" for="جهة الإصدار"> :جهة الإصدار </label>  
          </div>
    </div>
    <div class="col-md-4">
        <div class=" d-flex justify-content-end ">
            <input class="form-control my-3  w-75 " type="number" id="رقم جواز السفر" name="f_passport_number">
            <label class="ms-2" for="رقم جواز السفر"> :رقم جواز السفر</label>  
          </div>
    </div>
        </div>
        <div class=" d-flex justify-content-end col-md-12">
            <input class="form-control m-3  w-75 " type="text" id="job" name="f_job">
            <label for="job"> :الوظيفة  </label> 
        </div>

        <div class=" d-flex justify-content-end col-md-12">
   
            <textarea class="form-control m-3  w-75 " type="text" id="Adress" name="f_adress">
            </textarea>
            <label for="Adress"> :العنوان الدائم </label>  
          </div> 
          <div class="row">
            <div class="col-md-6">
                <div class=" d-flex justify-content-end me-5 ">
                    <input class="form-control my-3  w-75 " type="number" id="mobilePhoneFather" name="f_phone">
                    <label class="mx-2 me-5" for="mobilePhoneFather"> :التليفون المحمول</label>  
                  </div>
            </div>
    
            <div class="col-md-6">
                <div class=" d-flex justify-content-end ">
                   
                    <input  class="my-3 me-2  w-75 form-control" type="number" id="homePhoneFather" name="f_home_phone">
                  
                    <label  class="me-2" for="homePhoneFather">:التليفون الأرضي</label>
                  </div>
            </div>
        </div>
        <div class=" d-flex justify-content-end col-md-12">
            <input class="form-control m-3  w-75 " type="email" id="email" name="f_email">
            <label for="email"> :البريد الإلكتروني </label>  
          </div>

                
        <div class="d-flex justify-content-center align-items-center my-4">
            {{-- <button class="btn" type="submit"> submit </button> --}}
            <input type="submit" value="Submit">
        </div>
    </form>
</section>





        </header>


                <style src= "{{ asset('site_files/Js/bootstrap.bundle.min.js') }}" ></style>

    </body>
</html>