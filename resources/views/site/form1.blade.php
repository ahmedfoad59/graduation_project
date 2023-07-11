<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel="stylesheet" href="{{ asset('site_files/css/form1/styale.css') }}">
    {{-- <link rel="stylesheet" href="styale.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link  rel="stylesheet" href="{{ asset('site_files/css/bootstrap.min.css') }}" >
</head>
<body> 
 
  <div class="main">
    <h3> بطاقه متابعه طالب</h3>
    <form class="row g-4 needs-validation "  action="{{ route('store1') }}"  method="POST" novalidate  >
      @csrf
    <!-- start form -->
    <div class="form">

      <div class="row"> 

        <div class="col-4" > 
          <input type="text" name="collage_id">     <label> : الرقم الاكاديمي</label>
        </div>

        <div class=" col-4">
          <input type="text" name="level">     <label> : المستوي</label>
        </div>


          <div class="col-4">
            <input type="text" name="name">     <label> : اسم الطالب</label>

          </div>


          <div class="col-8 mt-5">
            <input type="text" name="dr_name">     <label> : اسم عضو هيئه التدريس</label>
  
          </div>

          
          <div class="col-4 mt-5">
            <input type="text" name="subject" >     <label> : الماده  </label>
  
          </div>

          <h4> : التحصيل الاكاديمي</h4>
           
  
          <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="exams">     <label> : اختبارات <b>-</b> </label>
  
          </div>


          
          <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="shar">     <label> : مشاركه <b>-</b> </label>
  
          </div>

          
          <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="Duties">     <label> : واجبات <b>-</b> </label>
  
          </div>

          <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="Attendance">     <label> : الحضور والغياب <b>-</b> </label>
  
          </div>

          <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="the_behavior">     <label> : السلوك <b>-</b> </label>
  
          </div>

          
          <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="Recommendations">     <label> : التوصيات <b>-</b> </label>
  
          </div>

          
      
          <div class="col-6 mt-5 ">
            <label> توقيع عضو هيئه</label>
            <br>
            <input type="text" class="tests">   
  
          </div>

          <div class="col-6 mt-5 ">
            <label> : توقيع المرشد  الاكاديمي
              <br>
              : التدريس
            </label>
            <br>
            <input type="text" class="tests">   
  
          </div>


      </div>
 



    </div>
     <input class="btn btn-warning me-md-2 w-15" type="submit" value="حفظ">
    </form>
  </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>