<html dir="rtl" >
<head>
    <link rel="stylesheet" href="{{ asset('site_files/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site_files/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site_files/css/student_form/style.css') }}">
</head>
<body>
<header class="p-3">
    <section class=" col-md-12 d-flex justify-content-center m-2 pb-5 ">
        <div class="div mx-2  " > </div>
        <h1> إستمارة إنسحاب من مقرر  </h1>
      
    </section>
    <!-- ************* -->
    <section>
        <form action="{{ route('create_withdraw') }}" method="POST" >
            @csrf
<div class="my-2 position-relative">
  
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class=" d-flex justify-content-start   ">
                <label for="name">اسم الطالب :</label> 
                <input class="form-control m-3  w-75 " type="text" id="name" name="name">
                
              </div>
        </div>
<div class="col-md-6">
        <div class=" d-flex justify-content-start  ">
            <label class="" for="الرقم الجامعي"> الرقم الجامعي : </label>  
            <input class="form-control m-3  w-75 " type="number" id="الرقم الجامعي" name="universty_id">
         
      </div>
</div>
    </div>
</div>


    <div class="row">

        <div class="col-md-4 ">
            <div class=" d-flex justify-content-start ">
                <label  class="mx-2" for="العام الدراسي">العام الدراسي :</label>
                <select  class="my-3   w-75 form-control" name="year">
                    <option value="" hidden >اختر العام الدراسي </option>
                    <option value="2022\2023">2022\2023</option>
                    <option value="2023\2024">2023\2024</option>
                    <option value="2024\2025">2024\2025</option>
                    <option value="2025\2026">2025\2026</option>
                    <option value="2026\2027">2026\2027</option>
                </select>     
              </div>
        </div>
        <div class="col-md-4 ">
            <div class=" d-flex justify-content-start ">
                <label  class="mx-2" for="الفصل الدراسي ">الفصل الدراسي: </label>
                <select  class="my-3   w-75 form-control" name="term">
                    <option value="" hidden >اختر الفصل الدراسي  </option>
                    <option value="الأول">الأول</option>
                    <option value="الثاني">الثاني</option>
                </select>     
              </div>
        </div>
        <div class="col-md-4 ">
            <div class=" d-flex justify-content-start ">
                <label  class="mx-2" for="البرنامج">البرنامج: </label>
                <select  class="my-3   w-75 form-control" name="program">
                    <option value="" hidden >اختر البرنامج </option>
                    <option value="علوم حاسب">علوم حاسب</option>
                    <option value="نظم معلومات">نظم معلومات</option>
                </select>     
              </div>
        </div>
    </div>

   
        <div class="row brdr">
            <div class="col-md-6">
                <div class=" d-flex justify-content-start ">
                    <label  class="mx-2" for="المستوى">المستوى: </label>
                    <select  class="my-3   w-75 form-control" name="level">
                        <option value="" hidden >اختر المستوى </option>
                        <option value="الأول">الأول</option>
                        <option value="الثاني">الثاني</option>
                        <option value="الثالث">الثالث</option>
                        <option value="الرابع">الرابع</option>
                    </select>     
                  </div>
            </div>
    <div class="col-md-4">
            <div class=" d-flex justify-content-start ps-5 ">
                <label class="col-md-6" for="عدد الساعات">  عدد الساعات المسجلة للطالب : </label>  
                <input class=" ms-5 form-control m-3  w-75 " type="number" id="عدد الساعات" name="hour_number">  
          </div>
    </div>
        </div>
        </div>



<div class="container pt-3">
<div class="row ">
    <div class="col-md-6">
        <div class=" d-flex justify-content-start   ">
            <label for="dr_name">الأستاذ الدكتور الفاضل /</label> 
            <input class="form-control m-3  w-50 " type="text" id="dr_name" name="dr_name">
            <p class="p1">المرشد الأكاديمي</p>
          </div>
    </div>
</div>
<div class="row">
<p class="col-md-10 mt-4">
    السالم عليكم ورحمة الله وبركاته
    <br>
    أرجو التكرم بإتخاذ اللازم نحو إنسحابي من المقرر المدون بالجدول التالي، علما بأن نسبة غيابي عن حضور 
    <br>
    المحاضرات والدروس العملية لهذا المقرر لم تتجاوز النسبة القانونية.
</p>
</div>
<div class="row mb-2">
    <div class="col-md-6">
        <div class=" d-flex justify-content-start   ">
            <label for="name">اسم الطالب :</label> 
            <input class="form-control m-3  w-75 " type="text" id="name">
            
          </div>
    </div>
<div class="col-md-6">
    <div class=" d-flex justify-content-start  ">
        <label class="" for="التاريخ "> التاريخ  : </label>  
        <input class="form-control m-3  w-75 " type="date" id="التاريخ " name="date">
     
  </div>
</div>
</div>
</div>


<div class="pt-3  container brdr">
    <div class="table-responsive"> 
        <table class="table table-bordered text-center">
          <thead>
           <tr>
        <th rowspan="3" > م </th>    
        <th rowspan="3"> كود المقرر </th>    
        <th rowspan="3"> اسم المقرر </th>    
        <th rowspan="3"> عدد الساعات </th>    
        <th colspan="6"> نوع المقرر </th>


        <tr>
            <th colspan="2" > متطلبات جامعة </th>
            <th colspan="2" > متطلبات كلية </th>
            <th colspan="2" > متطلبات التخصص </th>
        </tr>
        <tr>
            <th colspan="1">اجباري  </th>
            <th colspan="1">اختياري  </th>
            <th colspan="1">اجباري  </th>
            <th colspan="1">اختياري  </th>
            <th colspan="1">اجباري  </th>
            <th colspan="1">اختياري  </th>
        </tr> 
        </tr>
          </thead>
          <tbody>
            <tr>
                <td> 1 </td>
                <td> <input class="tableForms" type="number" name="coure_code"> </td>
                <td> <input  class="tableForms" type="text" name="coure_name"> </td>
                <td> <input  class="tableForms" type="number" name="coure_hours"> </td>
                <td> <input  class="tableForms" type="text" name="uiversity_required"> </td>
                <td> <input class="tableForms" type="text" name="uiversity_optional"></td>
                <td> <input  class="tableForms" type="text" name="college_required"></td>
                <td> <input  class="tableForms" type="text" name="college_optional"></td>
                <td><input  class="tableForms" type="text" name="specialty_required"> </td>
                <td><input  class="tableForms" type="text" name="specialty_optional"> </td>
                
            </tr>
          </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class=" d-flex justify-content-start ps-5 ">
                <label class="col-md-4" for="عدد ساعات بعد الانسحاب"> عدد الساعات المسجل لها الطالب بعد الانسحاب من المقرر </label>  
                <input class=" col-md-4 ms-2 form-control m-3  w-25 " type="number" id="عدد ساعات بعد الانسحاب" name="hours_after_withdraw">  
          </div>
    </div>
    </div>
    <div class="row">
        <p class="col-md-10 mt-4">
             <span class="mx-2" style="color: orange;"> ●</span>
        يسمح للطالب بالانسحاب من مقرر واحد فقط بما لا يخل بالعبء الدراسي المنصوص عليه في الائحة بشرط 
        <br>
            أن لا يكون الطالب قد تجاوز نسبة الغياب المقررة قبل الانسحاب.
        </p>
        </div>
    <div class="row">
        <p class="col-md-10 mt-1 ">
             <span class="mx-2" style="color: orange;"> ●</span>
             تتم عملية الانسحاب من المقررات حتى نهاية الأسبوع السادس من بدء الدراسة وذلك بموافقة المرشد 
        <br>
        االكاديمي وموافقة ادارة الكلية.
        </p>
        </div>
        <!-- ***************************** -->
        <div class="d-flex justify-content-center align-items-center my-4">
            {{-- <button class="btn" type="submit"> submit </button> --}}
            <input type="submit" value="Submit">

        </div>
        </div>
    </form>
</section>

<section class="p-5 container ">

<div class="table-responsive">
<table class="table mt-4 table-bordered">
<thead class=" text-center">
    <tr>
        <th> أستاذ المادة</th>
        <th> نسبة الغياب </th>
        <th>المرشد الأكاديمي </th>
        <th> رأي المرشد الأكاديمي <br> (موافق / غير موافق)</th>
    </tr>
</thead>
<tbody>
    <tr> 
        <td> الاسم:</td>
        <td rowspan="2"></td>
        <td> الاسم:</td>
        <td rowspan="2"></td>
    </tr>
    <tr>
        <td> التوقيع:</td>
        <td> التوقيع:</td>
    </tr>
    <tr>
        <td colspan="2"> التاريخ:</td>
        <td colspan="2"> التاريخ:</td>
    </tr>
</tbody>
</table>
</div>
</section>





</header>



<style src= "{{ asset('site_files/Js/bootstrap.bundle.min.js') }}" ></style>
</body>
</html>