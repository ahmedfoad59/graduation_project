<html dir="rtl" >
<head>
    <link rel="stylesheet" href="{{ asset('site_files/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site_files/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site_files/css/student_form/style.css') }}">
    <style>
        @media print {
            #print_Button {
                display: none;
            }
        }

    </style> 
</head>
<body id="print">
<header class="p-3">
    <section class=" col-md-12 d-flex justify-content-center m-2 pb-5 ">
        <div class="div mx-2  " > </div>
        <h1> إستمارة إنسحاب من مقرر  </h1>
      
    </section>
    <!-- ************* -->
    <section>
        {{-- <form action="" method="POST" >
            @csrf --}}
<div class="my-2 position-relative">
  
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class=" d-flex justify-content-start   ">
                <label for="name">اسم الطالب :</label> 
                <input disabled  value="{{$row->name}}" class="form-control m-3  w-75 " type="text" id="name" name="name">
                
              </div>
        </div>
<div class="col-md-6">
        <div class=" d-flex justify-content-start  ">
            <label class="" for="الرقم الجامعي"> الرقم الجامعي : </label>  
            <input disabled value="{{$row->universty_id}}" class="form-control m-3  w-75 " type="number" id="الرقم الجامعي" name="universty_id">
         
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
                    <option {{ (isset($row) && $row->year == "2022\2023") ? 'selected style=color:red ': '' }} value="2022\2023">2022\2023</option>
                    <option {{ (isset($row) && $row->year == "2023\2024") ? 'selected style=color:red ': '' }} value="2023\2024">2023\2024</option>
                    <option {{ (isset($row) && $row->year == "2024\2025") ? 'selected style=color:red ': '' }} value="2024\2025">2024\2025</option>
                    <option {{ (isset($row) && $row->year == "2025\2026") ? 'selected style=color:red ': '' }} value="2025\2026">2025\2026</option>
                    <option {{ (isset($row) && $row->year == "2026\2027") ? 'selected style=color:red ': '' }} value="2026\2027">2026\2027</option>
                </select>     
              </div>
        </div>
        <div class="col-md-4 ">
            <div class=" d-flex justify-content-start ">
                <label  class="mx-2" for="الفصل الدراسي ">الفصل الدراسي: </label>
                <select  class="my-3   w-75 form-control" name="term">
                    <option value="" hidden >اختر الفصل الدراسي  </option>
                    <option {{ (isset($row) && $row->term == "الأول") ? 'selected style=color:red ': '' }} value="الأول">الأول</option>
                    <option  {{ (isset($row) && $row->term == "الثاني") ? 'selected style=color:red ': '' }} value="الثاني">الثاني</option>
                </select>     
              </div>
        </div>
        <div class="col-md-4 ">
            <div class=" d-flex justify-content-start ">
                <label  class="mx-2" for="البرنامج">البرنامج: </label>
                <select  class="my-3   w-75 form-control" name="program">
                    <option  value="" hidden >اختر البرنامج </option>
                    <option {{ (isset($row) && $row->program == "علوم حاسب") ? 'selected style=color:red ': '' }}value="علوم حاسب">علوم حاسب</option>
                    <option {{ (isset($row) && $row->program == "نظم معلومات") ? 'selected style=color:red ': '' }} value="نظم معلومات">نظم معلومات</option>
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
                        <option {{ (isset($row) && $row->level == "الأول") ? 'selected style=color:red ': '' }}   value="الأول">الأول</option>
                        <option {{ (isset($row) && $row->level == "الثاني") ? 'selected style=color:red ': '' }} value="الثاني">الثاني</option>
                        <option {{ (isset($row) && $row->level == "الثالث") ? 'selected style=color:red ': '' }} value="الثالث">الثالث</option>
                        <option {{ (isset($row) && $row->level == "الرابع") ? 'selected style=color:red ': '' }} value="الرابع">الرابع</option>
                    </select>     
                  </div>
            </div>
    <div class="col-md-4">
            <div class=" d-flex justify-content-start ps-5 ">
                <label class="col-md-6" for="عدد الساعات">  عدد الساعات المسجلة للطالب : </label>  
                <input disabled value="{{$row->hour_number}}" class=" ms-5 form-control m-3  w-75 " type="number" id="عدد الساعات" name="hour_number">  
          </div>
    </div>
        </div>
        </div>



<div class="container pt-3">
<div class="row ">
    <div class="col-md-6">
        <div class=" d-flex justify-content-start   ">
            <label for="name">الأستاذ الدكتور الفاضل /</label> 
            <input disabled value="{{$row->dr_name}}" class="form-control m-3  w-50 " type="text" id="name" name="dr_name">
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
            <input disabled value="{{$row->name}}"class="form-control m-3  w-75 " type="text" id="name" name="name">
            
          </div>
    </div>
<div class="col-md-6">
    <div class=" d-flex justify-content-start  ">
        <label class="" for="التاريخ "> التاريخ  : </label>  
        <input disabled value="{{$row->date}}"class="form-control m-3  w-75 " type="date" id="التاريخ " name="date">
     
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
                <td> <input disabled  value="{{$row->coure_code}}"class="tableForms" type="number" name="coure_code"> </td>
                <td> <input disabled value="{{$row->coure_name}}"  class="tableForms" type="text" name="coure_name"> </td>
                <td> <input disabled  value="{{$row->coure_hours}}"class="tableForms" type="number" name="coure_hours"> </td>
                <td> <input disabled  value="{{$row->uiversity_required}}"class="tableForms" type="text" name="uiversity_required"> </td>
                <td> <input disabled value="{{$row->uiversity_optional}}"class="tableForms" type="text" name="uiversity_optional"></td>
                <td> <input disabled value="{{$row->college_required}}" class="tableForms" type="text" name="college_required"></td>
                <td> <input disabled value="{{$row->college_optional}}" class="tableForms" type="text" name="college_optional"></td>
                <td><input disabled  value="{{$row->specialty_required}}"class="tableForms" type="text" name="specialty_required"> </td>
                <td><input disabled  value="{{$row->specialty_optional}}"class="tableForms" type="text" name="specialty_optional"> </td>
                
            </tr>
          </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class=" d-flex justify-content-start ps-5 ">
                <label class="col-md-4" for="عدد ساعات بعد الانسحاب"> عدد الساعات المسجل لها الطالب بعد الانسحاب من المقرر </label>  
                <input disabled value="{{$row->hours_after_withdraw}}" class=" col-md-4 ms-2 form-control m-3  w-25 " type="number" id="عدد ساعات بعد الانسحاب" name="hours_after_withdraw">  
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
            <input disabled type="submit" value="Submit">
            <button class="btn btn-warning me-md-2 w-15"  id="print_Button" type="button"  onclick="printDiv()">طباعه</button>

        </div>
        </div>
    {{-- </form> --}}
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
<script src="{{ asset('site_files/Js/Chart.bundle.min.js') }}"></script>


<script type="text/javascript">
    function printDiv() {
        var printContents = document.getElementById('print').innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
        location.reload();
    }

</script>
</body>
</html>