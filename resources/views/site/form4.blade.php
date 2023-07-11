<!DOCTYPE html>
<html lang="en">
<head> 
    {{-- <link rel="stylesheet" href="styale.css"> --}}
    <link rel="stylesheet" href="{{ asset('site_files/css/form4/styale.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link  rel="stylesheet" href="{{ asset('site_files/css/bootstrap.min.css') }}" >
</head>
<body> 
 
  <div class="main">
    <h3> اجتماع فردي</h3>

    <!-- start form --> 
    <form class="row g-4 needs-validation "  action="{{ route('store4') }}"  method="POST" novalidate  >
      @csrf
    <div class="form">

      <div class="row">

        <div class="col-6" >
          <input type="text" name="collage_id" >     <label> : الرقم الاكاديمي</label>
        </div>

        <div class=" col-6">
          <input type="text"  name="name" >     <label> : اسم الطالب</label>
        </div>


          <!-- <div class="col-4">
            <input type="text">     <label> : اسم الطالب</label>

          </div>


          <div class="col-8 mt-5">
            <input type="text">     <label> : اسم عضو هيئه التدريس</label>
  
          </div>

          
          <div class="col-4 mt-5">
            <input type="text">     <label> : الماده  </label>
  
          </div> -->

          <h4> : ١-المواضيع التي تمت مناقشتها  </h4>
           
  
          <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="subject1" >     <label> <b>-</b> </label>
  
          </div>
             <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="subject2" >     <label> <b>-</b> </label>
  
          </div>
   <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="subject3" >     <label> <b>-</b> </label>
  
          </div>
   <div class="col-12 mt-4 ">
            <input type="text" class="tests"  name="subject4" >     <label> <b>-</b> </label>
  
          </div>



          
          <h4>: ٢-التوصيات </h4>
           
  
          <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="Recommendations1" >     <label> <b>-</b> </label>
  
          </div>
             <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="Recommendations2" >     <label> <b>-</b> </label>
  
          </div>
   <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="Recommendations3" >     <label> <b>-</b> </label>
  
          </div>
   <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="Recommendations4" >     <label> <b>-</b> </label>
  
          </div>


          
          
      
          <div class="col-6 mt-5  " style="margin-bottom: 15px;">
            <label style="font-size: 25px; margin:0 10px;"> الطالب</label>  
             <input disabled type="text" class="tests mt-2" >  <b>:التوقيع</b>
  
          </div>


          <div class="col-6 mt-5  " style="margin-bottom: 15px;">
            <label style="font-size: 25px; margin:0 10px;"> المرشد الاكاديمي</label>  
             <input disabled type="text" class="tests mt-2">  <b>:التوقيع</b>
  
          </div>


      </div>
      <input class="btn btn-warning me-md-2 w-15" type="submit" value="حفظ">
    </div>
    </form>
  </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>