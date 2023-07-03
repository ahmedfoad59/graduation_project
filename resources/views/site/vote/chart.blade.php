

<html>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<link rel="stylesheet" href={{ asset('site_files/css/chart/style.css') }}>
<body>
<div id="parentChart" >
        {{-- @php
            
        @endphp
        {{$sum1}}
        {{$sum2}}
        {{$sum3}}
        {{$sum4}}
        {{$sum5}}
        {{$total}} --}}
        
    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

    <button type="submit"  id="chart" name="chart"><a href="{{route('votes/show')}}" class="">تصويت</a></button>
    
</div>

{{-- <script src={{ asset('site_files/Js/chart/chatr.js') }}></script> --}}
<script >
    var xValues = [ "غير راضى جدا","راضى جدا","راضي", "محايد", "غير راضي"];
    var yValues = [{{$sum1}}/{{$total}},{{$sum2}}/{{$total}},{{$sum3}}/{{$total}},{{$sum4}}/{{$total}},{{$sum5}}/{{$total}}];
    var barColors = [

    "#f5ae45",
    "#f5f763",
    "#5e5c59",
    "#b2a076",
    "#cbc40c",
    ];

    new Chart("myChart", {
    type: "pie",
    data: {
    labels: xValues,
    datasets: [{
        backgroundColor: barColors,
        data: yValues
    }]
    },
    options: {
    title: {
        display: true,
        text: "مدينة الثقافه والعلوم"
    }
    }
    });
</script>

</body>
</html>


