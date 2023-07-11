<!DOCTYPE html>
<html lang="en">
<head> 
    {{-- <link rel="stylesheet" href="styale.css"> --}}
    <link rel="stylesheet" href="{{ asset('site_files/css/form5/styale.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link  rel="stylesheet" href="{{ asset('site_files/css/bootstrap.min.css') }}" >
</head>
<body> 
 
  <div class="main"> 
    <h3> محضر اجتماع </h3>

    <!-- start form -->
    <form class="row g-4 needs-validation "  action="{{ route('store5') }}"  method="POST" novalidate  >
      @csrf
    <div class="form">

      <div class="row">

        <div class="col-3" >
          <input type="time" name="time">     <label> : الوقت</label>
        </div>

        <div class=" col-3">
          <input type="text" name="plase">     <label> : المكان</label>
        </div>


          <div class="col-3">
            <input type="date" name="date">     <label> : التاريخ </label>

          </div>


          <div class="col-3">
           (  <input type="text" name="num_meet"> )     <label> الاجتماع  : رقم</label>
  
          </div>

          
        
       
          <div class=" col-6 mt-5">
            <input type="number" name="studetn_num_fals">     <label> : عدد الغائبين</label>
          </div>
  
          <div class=" col-6 mt-5">
            <input type="number" name="studetn_num_true">     <label> : عدد الحاضرين</label>
          </div>
  

          <h4> : المواضيع التي تمت مناقشتها</h4>
           
  
          <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="subject1">     <label> : الموضوع الاول  </label>
  
          </div>


          
          <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="Recommendations1">     <label> : التوصيات </label>
  
          </div>

          
          <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="subject2">     <label> : الموضوع الثاني  </label>
  
          </div>

          <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="Recommendations2">     <label> :  التوصيات </label>
  
          </div>

             
          <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="subject3">     <label> : الموضوع الثالت  </label>
  
          </div>

          <div class="col-12 mt-4 ">
            <input type="text" class="tests" name="Recommendations3">     <label> :  التوصيات </label>
  
          </div>

         
 

      

          <div class=" mt-5 ">
            
            <input type="text" class="tests" name="dr_name">  
            <label> :  المرشد  الاكاديمي</label>
 
  
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