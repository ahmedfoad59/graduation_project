<?php

namespace App\Http\Controllers;

use App\Models\Form1;
use App\Models\Form2;
use App\Models\Form3;
use App\Models\Form4;
use App\Models\Form5;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function show1()
    { 
        
        return view('site.form1');
      
    } 
 
    public function index1(Request $request)
    {
        $rows = Form1::when($request->search,function($query) use ($request){
            $query->where('name','like','%' .$request->search . '%');
        })->latest()->get();
        return view('site.index.index_form1' ,compact('rows'));
    }
    public function store1(Request $request)
    { 
    
        $request->validate([
            'name'	                  => 'nullable|string|max:60',
            'level'	                  => 'nullable|string|max:60',
            'collage_id'	          => 'nullable|string|max:60',
            'dr_name'	              => 'nullable|string|max:60',
            'subject'	              => 'nullable|string|max:60',
            'exams'	                  => 'nullable|string|max:60',
            'shar'	                  => 'nullable|string|max:60',
            'Duties'	              => 'nullable|string|max:60',
            'Attendance'	          => 'nullable|string|max:60',
            'the_behavior'	          => 'nullable|string|max:60',
            'Recommendations'         => 'nullable|string|max:60',
            
 
        ]);
       $Form1=Form1::create($request->all());
    return redirect()->route('index1');
       
    }
    public function print1($id)
    {
        // resources\views\site\print\form1.blade.php
        $row=Form1::find($id) ;
        return view('site.print.form1',compact('row'));
    }


// 22222222222222222222222222222222
    public function show2()
    {
        return view('site.form2');
    }

    public function index2(Request $request)
    {
        $rows = Form2::when($request->search,function($query) use ($request){
            $query->where('name','like','%' .$request->search . '%');
        })->latest()->get();
        return view('site.index.index_form2' ,compact('rows'));
    }
    public function store2(Request $request)
    {
        // return $request->all();
       
        
        $request->validate([
            'dr_name'	 => 'nullable|string|max:60',
        'level'	 => 'nullable|string|max:60',
        'name1'	 => 'nullable|string|max:60',
        'college_id1'	 => 'nullable|string|max:60',
        'name2'	 => 'nullable|string|max:60',
        'college_id2'	 => 'nullable|string|max:60',
        'name3'	 => 'nullable|string|max:60',
        'college_id3'	 => 'nullable|string|max:60',
        'name4'	 => 'nullable|string|max:60',
        'college_id4'	 => 'nullable|string|max:60',
        'name5'	 => 'nullable|string|max:60',
        'college_id5'	 => 'nullable|string|max:60',
        'name6'	 => 'nullable|string|max:60',
        'college_id6' => 'nullable|string|max:60',

        ]);
       $Form2=Form2::create($request->all());
       return redirect()->route('index2');
    }
    public function print2()
    {
        $row=Form2::find($id) ;
        return view('site.print.form2',compact('row'));
    }










// 333333333333333333333333333333333333333333
    public function show3()
    {
        return view('site.form3');
    }

    public function index3(Request $request)
    {
        $rows = Form3::when($request->search,function($query) use ($request){
            $query->where('name','like','%' .$request->search . '%');
        })->latest()->get();
        return view('site.index.index_form3' ,compact('rows'));
    }
    public function store3(Request $request)
    {
        //
    }
    public function print3($id)
    {
        $row=Form3::find($id) ;
        return view('site.print.form3',compact('row'));
    }






// 44444444444444444444444444444444444444444
    public function show4()
    {
        return view('site.form4');
    }

    public function index4(Request $request)
    {
        $rows = Form4::when($request->search,function($query) use ($request){
            $query->where('name','like','%' .$request->search . '%');
        })->latest()->get();
        return view('site.index.index_form4' ,compact('rows'));
    }
    public function store4(Request $request)
    {

        $request->validate([
            'name'	               => 'nullable|string|max:60',
            'collage_id'           => 'nullable|string|max:60',
            'subject1'	           => 'nullable|string|max:60',
            'subject2'	           => 'nullable|string|max:60',
            'subject3'	           => 'nullable|string|max:60',
            'subject4'	           => 'nullable|string|max:60',
            'Recommendations1'	   => 'nullable|string|max:60',
            'Recommendations2'	   => 'nullable|string|max:60',
            'Recommendations3'	   => 'nullable|string|max:60',
            'Recommendations4'     => 'nullable|string|max:60',
      

        ]);
       $Form4=Form4::create($request->all());
       return redirect()->route('index4');
    }
    public function print4($id)
    {
        $row=Form4::find($id) ;
        return view('site.print.form4',compact('row'));
    }





// 55555555555555555555555555555
public function show5()
{
    return view('site.form5');
}

public function index5(Request $request)
{
    $rows = Form5::when($request->search,function($query) use ($request){
        $query->where('name','like','%' .$request->search . '%');
    })->latest()->get();
    return view('site.index.index_form5' ,compact('rows'));
}
public function store5(Request $request)
{
    
    $request->validate([
        'num_meet'	           => 'nullable|string|max:60',
        'date'	                => 'nullable|string|max:60',
        'plase'	                => 'nullable|string|max:60',
        'time'	                => 'nullable|string|max:60',
        'studetn_num_true'	    => 'nullable|string|max:60',
        'studetn_num_fals'	    => 'nullable|string|max:60',
        'subject1'	            => 'nullable|string|max:60',
        'Recommendations1'	    => 'nullable|string|max:60',
        'subject2'	            => 'nullable|string|max:60',
        'Recommendations2'	    => 'nullable|string|max:60',
        'subject3'	            => 'nullable|string|max:60',
        'Recommendations3'	    => 'nullable|string|max:60',
  

    ]);
   $Form5=Form5::create($request->all());
   return redirect()->route('index5');
}
public function print5($id)
{
    $row=Form5::find($id) ;
        return view('site.print.form5',compact('row'));
}






    public function show(Form1 $form1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form1  $form1
     * @return \Illuminate\Http\Response
     */
    public function edit(Form1 $form1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form1  $form1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form1 $form1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form1  $form1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form1 $form1)
    {
        //
    }
}
