<!DOCTYPE html>
<html lang="en">
<head> 
    {{-- <link rel="stylesheet" href="styale.css"> --}}
    <link rel="stylesheet" href="{{ asset('site_files/css/form5/styale.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body> 
 
  <div class="main">
    <h3> محضر اجتماع </h3>

    <!-- start form -->
    <div class="form">

      <div class="row">

        <div class="col-3" >
          <input type="time">     <label> : الوقت</label>
        </div>

        <div class=" col-3">
          <input type="text" >     <label> : المكان</label>
        </div>


          <div class="col-3">
            <input type="date">     <label> : التاريخ </label>

          </div>


          <div class="col-3">
           (  <input type="text"> )     <label> الاجتماع  : رقم</label>
  
          </div>

          
        
       
          <div class=" col-6 mt-5">
            <input type="number" >     <label> : عدد الغائبين</label>
          </div>
  
          <div class=" col-6 mt-5">
            <input type="number" >     <label> : عدد الحاضرين</label>
          </div>
  

          <h4> : المواضيع التي تمت مناقشتها</h4>
           
  
          <div class="col-12 mt-4 ">
            <input type="text" class="tests">     <label> : الموضوع الاول  </label>
  
          </div>


          
          <div class="col-12 mt-4 ">
            <input type="text" class="tests">     <label> : التوصيات </label>
  
          </div>

          
          <div class="col-12 mt-4 ">
            <input type="text" class="tests">     <label> : الموضوع الثاني  </label>
  
          </div>

          <div class="col-12 mt-4 ">
            <input type="text" class="tests">     <label> :  التوصيات </label>
  
          </div>

             
          <div class="col-12 mt-4 ">
            <input type="text" class="tests">     <label> : الموضوع الثالت  </label>
  
          </div>

          <div class="col-12 mt-4 ">
            <input type="text" class="tests">     <label> :  التوصيات </label>
  
          </div>

         
 

      

          <div class=" mt-5 ">
            
            <input type="text" class="tests">  
            <label> :  المرشد  الاكاديمي</label>
 
  
          </div>


      </div>


    </div>

  </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>