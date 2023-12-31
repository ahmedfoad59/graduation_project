

<!DOCTYPE html>
<html lang="en">
<head> 
  <link rel="stylesheet" href="{{ asset('site_files/css/form2/styale.css') }}">
    <link rel="stylesheet" href="styale.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link  rel="stylesheet" href="{{ asset('site_files/css/bootstrap.min.css') }}" >
</head>
<body> 

  <div class="main">

    <h2>بيان باسماء الطلاب للمرشد</h2>
    <form class="row g-4 needs-validation "  action="{{ route('store2') }}"  method="POST" novalidate  >
      @csrf
    <div class="empty"></div>


    <!--input s-->

    <div class="inputs">
      
    <div class="row">


      <div class="col-6" >  
        <input name="level" type="text">
        <label>: المستوي</label>
      </div>

      <div class="col-6">
        <input  name="dr_name"  type="text" >
        <label>: اسم المرشد الاكاديمي</label>
      </div>
    </div>
    </div>



    <div class="row"></div>
        <!-- start table  -->
        <table class="tabl mt-2">
            <thead style="background-color: rgb(172, 172, 172);">
              <tr  style="color: #000;">
                <th scope="col">الرقك الاكاديمي</th>
                <th scope="col">اسم الطالب</th>
                <th scope="col " >الرقم</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <th scope="row"> <input   name="college_id1"     type="text" class="input -table"></th>
                <td> <input  name="name1"  type="text" class="input -table"> </td>
                <td style="border-left: 2px solid #000;">
                  1
                 </td>
                
              </tr>
 

              <tr>
                <th scope="row"> <input   name="college_id2"     type="text" class="input -table"></th>
                <td> <input  name="name2"    type="text" class="input -table"> </td>
                <td style="border-left: 2px solid #000;">
                  2
                 </td>
                
              </tr>
 
              
              <tr>
                <th scope="row"><input   name="college_id3"     type="text" class="input -table"></th>
                <td> <input  name="name3"   type="text" class="input -table"> </td>
                <td style="border-left: 2px solid #000;">
                  3
                 </td>
                
              </tr>
 
              
              <tr>
                <th scope="row"><input   name="college_id4"     type="text" class="input -table"></th>
                <td> <input  name="name4"   type="text" class="input -table"> </td>
                <td style="border-left: 2px solid #000;">
                  4
                 </td>
                
              </tr>
 
              
              <tr>
                <th scope="row"> <input   name="college_id5"     type="text" class="input -table"></th>
                <td> <input  name="name5"    type="text" class="input -table"> </td>
                <td style="border-left: 2px solid #000;">
                  5
                 </td>
                
              </tr>
 
              
              <tr>
                <th scope="row"> <input   name="college_id6"     type="text" class="input -table"></th>
                <td> <input  name="name6"   type="text" class="input -table"> </td>
                <td style="border-left: 2px solid #000;">
                  6
                 </td>
                
              </tr>
 
              
            </tbody>
          </table>
        <!--end table  -->



    </div>
    <input  class="btn btn-warning me-md-2 w-15" type="submit" value="حفظ">
  </form>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>