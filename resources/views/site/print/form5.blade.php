<!DOCTYPE html>
<html lang="en">
<head> 
    {{-- <link rel="stylesheet" href="styale.css"> --}}
    <link rel="stylesheet" href="{{ asset('site_files/css/form5/styale.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      @media print {
          #print_Button {
              display: none;
          }
      }

  </style> 
</head>
<body id="print"> 
 
  <div class="main"> 
    <h3> محضر اجتماع </h3>

    <!-- start form -->
    {{-- <form class="row g-4 needs-validation "  action="{{ route('store5') }}"  method="POST" novalidate  >
      @csrf --}}
    <div class="form">

      <div class="row">

        <div class="col-3" >
          <input disabled value="{{$row->time}}" type="time" name="time">     <label> : الوقت</label>
        </div>

        <div class=" col-3">
          <input disabled value="{{$row->plase}}" type="text" name="plase">     <label> : المكان</label>
        </div>


          <div class="col-3">
            <input disabled value="{{$row->date}}" type="date" name="date">     <label> : التاريخ </label>

          </div>


          <div class="col-3">
           (  <input disabled value="{{$row->num_meet}}" type="text" name="num_meet"> )     <label> الاجتماع  : رقم</label>
  
          </div>

          
        
       
          <div class=" col-6 mt-5">
            <input disabled value="{{$row->studetn_num_fals}}" type="number" name="studetn_num_fals">     <label> : عدد الغائبين</label>
          </div>
  
          <div class=" col-6 mt-5">
            <input disabled value="{{$row->studetn_num_true}}" type="number" name="studetn_num_true">     <label> : عدد الحاضرين</label>
          </div>
  

          <h4> : المواضيع التي تمت مناقشتها</h4>
           
  
          <div class="col-12 mt-4 ">
            <input disabled value="{{$row->subject1}}" type="text" class="tests" name="subject1">     <label> : الموضوع الاول  </label>
  
          </div>


          
          <div class="col-12 mt-4 ">
            <input disabled value="{{$row->Recommendations1}}" type="text" class="tests" name="Recommendations1">     <label> : التوصيات </label>
  
          </div>

          
          <div class="col-12 mt-4 ">
            <input disabled value="{{$row->subject2}}" type="text" class="tests" name="subject2">     <label> : الموضوع الثاني  </label>
  
          </div>

          <div class="col-12 mt-4 ">
            <input disabled value="{{$row->Recommendations2}}" type="text" class="tests" name="Recommendations2">     <label> :  التوصيات </label>
  
          </div>

             
          <div class="col-12 mt-4 ">
            <input disabled value="{{$row->subject3}}" type="text" class="tests" name="subject3">     <label> : الموضوع الثالت  </label>
  
          </div>

          <div class="col-12 mt-4 ">
            <input disabled value="{{$row->Recommendations3}}" type="text" class="tests" name="Recommendations3">     <label> :  التوصيات </label>
  
          </div>

          
 

      

          <div class=" mt-5 ">
            
            {{-- <input disabled value="" type="text" class="tests" name="dr_name">   --}}
            <label> :  المرشد  الاكاديمي</label>
 
  
          </div>


      </div>
      <button class="btn btn-warning me-md-2 w-15"  id="print_Button" type="button"  onclick="printDiv()">طباعه</button>
      {{-- <input disabled value="" class="btn btn-warning me-md-2 w-15" type="submit" value="حفظ"> --}}


    </div>
</form>

  </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>


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