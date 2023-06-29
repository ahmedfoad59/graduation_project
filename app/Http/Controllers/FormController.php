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

    public function index1()
    {
        $rows = Form1::when($request->search,function($query) use ($request){
            $query->where('name','like','%' .$request->search . '%');
        })->latest()->get();
        return view('site.index.index_form1' ,compact('rows'));
    }
    public function store1(Request $request)
    {
        //
    }
    public function print1($id)
    {
        $row=Form1::find($id) ;
        return view('site.print.form1',compact('row'));
    }







// 22222222222222222222222222222222
    public function show2()
    {
        return view('site.form2');
    }

    public function index2()
    {
        $rows = Form2::when($request->search,function($query) use ($request){
            $query->where('name','like','%' .$request->search . '%');
        })->latest()->get();
        return view('site.index.index_form1' ,compact('rows'));
    }
    public function store2(Request $request)
    {
        //
    }
    public function print2()
    {
        $row=Form2::find($id) ;
        return view('site.print.form1',compact('row'));
    }










// 333333333333333333333333333333333333333333
    public function show3()
    {
        return view('site.form3');
    }

    public function index3()
    {
        $rows = Form3::when($request->search,function($query) use ($request){
            $query->where('name','like','%' .$request->search . '%');
        })->latest()->get();
        return view('site.index.index_form1' ,compact('rows'));
    }
    public function store3(Request $request)
    {
        //
    }
    public function print3()
    {
        $row=Form3::find($id) ;
        return view('site.print.form3',compact('row'));
    }






// 44444444444444444444444444444444444444444
    public function show4()
    {
        return view('site.form4');
    }

    public function index4()
    {
        $rows = Form4::when($request->search,function($query) use ($request){
            $query->where('name','like','%' .$request->search . '%');
        })->latest()->get();
        return view('site.index.index_form1' ,compact('rows'));
    }
    public function store4(Request $request)
    {
        //
    }
    public function print4()
    {
        $row=Form4::find($id) ;
        return view('site.print.form4',compact('row'));
    }





// 55555555555555555555555555555
public function show5()
{
    return view('site.form5');
}

public function index5()
{
    $rows = Form5::when($request->search,function($query) use ($request){
        $query->where('name','like','%' .$request->search . '%');
    })->latest()->get();
    return view('site.index.index_form1' ,compact('rows'));
}
public function store5(Request $request)
{
    //
}
public function print5()
{
    $row=Form5::find($id) ;
        return view('site.print.form1',compact('row'));
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
