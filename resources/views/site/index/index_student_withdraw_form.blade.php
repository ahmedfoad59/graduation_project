<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel="stylesheet" href='{{ asset('site_files/css/styale.css') }}'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body> 

    <div class="main">

        <!--start  search -->


        <div class="search">
            {{-- <h6>brand</h6>
            <input type="search" placeholder="Search">
            <button class="btn-search"><i class="fa-sharp fa-solid fa-magnifying-glass"></i>search </button>
            <button  class="btn-add"> <a href="{{ route('withdraw') }}" >   add</a></button> --}}
            <form action="{{route('index_withdraw')}}" method="get">

              <div class="row">

                  <div class="col-md-4">
                      <input type="text" name="search" value="{{request()->search}}" class="form-control"
                          placeholder="search">
                  </div>

                  <div class="col-md-4">
                      <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i>
                          @lang('site.search')</button>
                      <a href="{{route('withdraw')}}" class="btn btn-primary"><i
                              class="fa fa-plus"></i> @lang('site.add')</a>
                              
                  </div>
                </div>
              </form>
 
        </div>

        <!--end  search -->

        <!-- start table  -->
        <table class="table mt-5">
            <thead>
              <tr class=" nn" style="color: #fff;">
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">universty_id</th>
                <th scope="col">course code</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
            
              @foreach($rows as $index=>$row)
              <tr>
                <th scope="row"> {{$index}}</th> 
                <td>{{$row->name}}</td>
                <td>{{$row->universty_id}}</td>
                <td>{{$row->coure_code}}</td>
                <td>
                  {{-- <button class="bt-action-edit"><i class="fa-solid fa-pen-to-square"></i> edit</button>  --}}
                  <button class="bt-action-delete"> <i class="fa-sharp fa-solid fa-trash"></i> delete</button>
                  <button class="btn btn-warning me-md-2 w-15"> <a href="{{route('printw',$row->id)}}" class="">print</a> </button>
                  {{-- <form action="{{route('dashboard.'.$module_name_plural.'.destroy', $row)}}" method="POST" style="display: inline-block">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit" style="color:#fff!important;" rel="tooltip" title="" class="bt-action-edit" data-original-title="@lang('site.delete')">
                        <i class="fa-solid fa-pen-to-square">delete</i>
                    </button> 
                    
                  </form>

                    <a href="{{route('dashboard.'.$module_name_plural.'.edit', $row)}}" rel="tooltip" title="" class="btn btn-info btn-sm "
                    data-original-title="@lang('site.edit') @lang('site.'.$module_name_singular)">
                    <i class="fa fa-edit">@lang('site.edit')</i>
                    </a> --}}
                </td>
                
              </tr>
              @endforeach
            </tbody>
          </table>
        <!--end table  -->



    </div>





<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>