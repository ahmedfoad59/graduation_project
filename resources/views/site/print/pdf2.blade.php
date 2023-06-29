

<html dir="rtl">
    <head>
      <link rel="stylesheet" href="{{ asset('site_files/css/all.min.css') }}">
      <link rel="stylesheet" href="{{ asset('site_files/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('site_files/css/student_add_course_form/main.css') }}">
      <style>
        @media print {
            #print_Button {
                display: none;
            }
        }

    </style> 
    </head>
    <body id="print">
        <div id="bage3" class="h-100  p-3" >
          <section class=" col-md-12 d-flex justify-content-center m-2 pb-5 ">
            <div class="div1 mx-2  " > </div>
            <h2 class="border-bottom border-warning  border-3 border-pt-2 py-2 "> إستماره تسجيل المقررات </h2>
            
        </section>
            
                 <div class="form3">
                    <div class="container-fluid">
                        <div class="row h-100">
                          <div class="col-mid-6 w-50 ">
                            {{-- <form class="row g-4 needs-validation "  action=""  method="POST" novalidate  >
                              @csrf --}}
                                <div class="col-md-6  " >
                                    <label for="validationTooltip01" class="form-label"  >إسم الطـــــــــالب:</label>
                                    <input type="text"  name="name" id="validationTooltip01" class="form-control">
                                  </div>
                                  <div class="col-md-6 " class="border-0">
                                    <label for="validationTooltip01" class="form-label"  >العام الدراسي:</label>
                                    <input type="text"  name="year" id="validationTooltip01" class="form-control">
                                  </div>
                            
                            
                                <div class="col-md-6  " >
                                    <label for="validationTooltip01" class="form-label"  >الفصل الدراسي:</label>
                                    <input type="text"   name="term" id="validationTooltip01" class="form-control">
                                  </div>
                                  <div class="col-md-6 " class="border-0">
                                    <label for="validationTooltip01" class="form-label"  >البرنامج:</label>
                                    <input type="text" name="program" id="validationTooltip01" class="form-control">
                                  </div>
                           
                           
                                <div class="col-md-6  " >
                                    <label for="validationTooltip01" class="form-label"  >المستوى:</label>
                                    <input type="text" name="level" id="validationTooltip01" class="form-control">
                                  </div>
                                  <div class="col-md-6 " class="border-0">
                                    <label for="validationTooltip01" class="form-label"  >الرقم القومى:</label>
                                    <input type="text" name="national_number" id="validationTooltip01" class="form-control">
                                  </div>
                            {{-- </form> --}}

                            
                            <label for="validationTooltip01" class="form-label"  > البريد الالكترونى:</label>
                                <input type="text" name="email" id="validationTooltip01" class="form-control">
                                <label for="validationTooltip01" class="form-label"  >المرشد الاكاديمي:</label>
                                <input type="text" name="dr_name" id="validationTooltip01" class="form-control">
                                <label for="validationTooltip01" class="form-label"  >رقم الهاتف :</label>
                                <input type="text" name="phone" id="validationTooltip01" class="form-control">
                          </div>

                          
                          <div class="col-mid-6 w-25  h-20 p-4  m-auto border border-dark ">
                            <label for="validationTooltip01" class="form-label fs-5"  > عدد الساعات:</label><span><input type="text" name="hour_number" id="validationTooltip01" class="border-0 w-50"></span>
                                
                                <label for="validationTooltip01" class="form-label fs-5"  >معدل المستوى:</label><span><input type="text" name="level_rate"  id="validationTooltip01" class="border-0 w-50"></span>
                                
                                <label for="validationTooltip01" class="form-label fs-5"  >المعدل  التراكمى:</label><span><input type="text" name="Cumulative_average"  id="validationTooltip01" class="border-0 w-50"></span>     
                          </div>
                        

                          <div class="form3-table py-4 "> 
                            
                             <table   class="table table-bordered  w-75 m-auto"  >
                                 <thead class="text-center">
                                  <tr>
                                    <th rowspan="2" class="pb-5">م</th>
                                    <th rowspan="2" class="pb-5">كود المقرر</th>
                                    <th rowspan="2" class="w-25 pb-5">اسم المقرر</th>
                                    <th rowspan="2">عدد الساعات المعنمده</th>
                                    <th rowspan="2">نوع المقرر</th>
                                    <th rowspan="2">عدد مرات تسجيل المقرر</th>
                                    <th rowspan="2">كود المتطلب السابق</th>
                                    <th colspan="2">مواعيد</th>
                                    <th rowspan="2" class="pb-5"> ملاحظات</th>
                                  </tr>
                                  <tr>
                                    {{-- <th colspan="2"></th> --}}
                                    {{-- <th>اختيارى</th> --}}
                                    <th>المحاضرات النظريه</th>
                                    <th>الدروس العمليه</th>
                                  </tr>
                                 </thead>
                                 <tbody>
                                  <tr>
                                    <th>1</th>
                                    <td><input type="text" name="course_code" class="text-center form-control w-75 m-auto border-0"></td>
                                    <td><input type="text" name="course_name" class="text-center form-control w-75 m-auto border-0"></td>
                                    <td><input type="text" name="course_hour_number" class="text-center form-control w-75 m-auto border-0"></td>
                                    {{-- <td><input type="text" name="type" class="text-center form-control w-75 m-auto border-0"></td> --}}
                                    <td>
                                    <select name="type" class="text-center form-control w-75 m-auto border-0">
                                      <option selected ></option>
                                      <option value="0">اجبارى</option>
                                      <option value="1">اختيارى</option>
                                    </select>
                                   </td>
                                    <td><input type="text" name="number_of_register_course" class="text-center form-control w-75 m-auto border-0"></td>
                                    <td><input type="text" name="code_of_least_order" class="text-center form-control w-75 m-auto border-0"></td>
                                    <td><input type="text" name="Theoretical_lecture_dates" class="text-center form-control w-75 m-auto border-0"></td>
                                    <td><input type="text" name="Practical_lesson_dates" class="text-center form-control w-75 m-auto border-0"></td>
                                    <td><input type="text" name="notes" class="text-center form-control w-75 m-auto border-0"></td>
                                    {{-- <td><input type="text" name="" class="text-center form-control w-75 m-auto border-0"></td> --}}
                                  </tr>
                                 
                                    
                                 </tbody>
                             </table>
                                 


                                 <div class="px-5 py-5 text-left font-weight-normal fs-4">
                                  <p>اسم المرشد الاكاديمى :  ...................</p>
                                  <p> توقيع المرشد الاكاديمي :  .....................</p>
                                  <p>تاريخ التسجيل :  ................. </p>
                                  <p> يتم تسجيل المقررات فبل بدء الدراسه للطلاب لبقدامى وفى الاسبوع الاول من العام الدراسي للطلاب الجدد .</p>
                                  <p> يعتمد: أ.د./ وكيل الكلية لشئون التعليم والطلاب</p>
                                  <p> ............................</p>
                                  <div class="d-grid gap-2 d-md-flex justify-content-lg-start p-3 ">
                                    {{-- <button class="btn btn-warning me-md-2 w-15" type="button">حفظ</button> --}}
                                    <input class="btn btn-warning me-md-2 w-15" type="submit" value="حفظ">
                                    <button class="btn btn-warning me-md-2 w-15"  id="print_Button" type="button"  onclick="printDiv()">طباعه</button>
                                    
                                    
                       
                                  </div>
                                
                                </div>
                            {{-- </form> --}}
                            {{-- <button class="btn btn-warning me-md-2 w-15" id="print_Button" type="button">طباعه</button> --}}
                            {{-- <button class="btn btn-danger  float-left mt-3 mr-2" id="print_Button" onclick="printDiv()"> <i
                              class="mdi mdi-printer ml-1"></i>طباعة</button>  --}}
                        </div>
                        </div>  
                        
                    </div>
                    
                 </div>
                </div>
                   
        </div>
        
<script src= "{{ asset('site_files/Js/bootstrap.bundle.min.js') }}" ></script>
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
