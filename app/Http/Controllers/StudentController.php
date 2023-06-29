<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Withdrawal_form;
use App\Models\Course_add_form;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class StudentController extends Controller
{
   
    public function index_student(Request $request)
    {
        $rows = Student::when($request->search,function($query) use ($request){
            $query->where('name','like','%' .$request->search . '%');
        })->latest()->get();
        return view('site.index.index_student_form' ,compact('rows'));
    }
 
    public function index()
    {
        return view('site.student_form');
    }

    public function store(Request $request)
    {

        // Log::info($request);
        // return   request()->input('name');
                   

        $request->validate([

            'name'	                   => 'nullable|string|max:60',
            'name_en'	               =>'nullable|string|max:60',
            'birth_day'	               => 'nullable|string|max:60',
            'birth_distination'	       => 'nullable|string|max:60',
            'national_number'	       => 'nullable|string|max:60',
            'nationality'	           => 'nullable|string|max:60',
            'nationality_date'	       => 'nullable|string|max:60',
            'nationality_distination'  => 'nullable|string|max:60',
            'passport_number'          => 'nullable|string|max:60',
            'Certificate'	           => 'nullable|string|max:60',
            'section'	               => 'nullable|string|max:60',
            'total_degree'	           => 'nullable|string|max:60',
            'school'	               => 'nullable|string|max:60',
            'administration'	       => 'nullable|string|max:60',
            'governorate'	           => 'nullable|string|max:60',
            'adress'                   => 'nullable|string|max:60',
            'phone'	                   => 'nullable|string|max:60',
            'home_phone'	           => 'nullable|string|max:60',
            'email'	                   => 'nullable|email|max:255|unique:students,email',
            'universty_id'	           => 'nullable|string|max:60',
            'college'	               => 'nullable|string|max:60',
            'department'	           => 'nullable|string|max:60',
            'group'	                   => 'nullable|string|max:60',
            'f_name'	               => 'nullable|string|max:60',
            'f_national_number'	       => 'nullable|string|max:60',
            'f_nationality'	           => 'nullable|string|max:60',
            'f_nationality_date'	   => 'nullable|string|max:60',
            'f_nationality_distination'=> 'nullable|string|max:60',
            'f_passport_number'	       => 'nullable|string|max:60',
            'f_job'                    => 'nullable|string|max:60',
            'f_adress'             	   => 'nullable|string|max:60',
            'f_phone'	               => 'nullable|string|max:60',
            'f_home_phone'	           => 'nullable|string|max:60',
            'f_email'                  => 'nullable|string|max:60',

        ]);
       
       $student=Student::create($request->all());
    //    return "success";
    return redirect()->route('index_student');
   
    }
    public function prints($id)
    {
       $row=Student::find($id) ;
       return view('site.print.student_form',compact('row'));
    }











    //this is custom to withdraw model

    public function index_withdraw(Request $request)
    {
        $rows = Withdrawal_form::when($request->search,function($query) use ($request){
            $query->where('name','like','%' .$request->search . '%');
        })->latest()->get();
        return view('site.index.index_student_withdraw_form' ,compact('rows'));
    }

    public function storew(Request $request)
    {
        // return "sdfs";
        //   return $request->all();
        $request->validate([
            'name'                  => 'nullable|string|max:60',
            'universty_id'	        => 'nullable|string|max:60',
            'year'	                => 'nullable|string|max:60',
            'term'	                => 'nullable|string|max:60',
            'program'	            => 'nullable|string|max:60',
            'level'	                => 'nullable|string|max:60',
            'hour_number'          	=> 'nullable|string|max:60',
            'dr_name'	            => 'nullable|string|max:60',
            'date'	                => 'nullable|string|max:60',
            'coure_code'	        => 'nullable|string|max:60',
            'coure_name'	        => 'nullable|string|max:60',
            'coure_hours'         	=> 'nullable|string|max:60',
            'uiversity_required'   	=> 'nullable|string|max:60',
            'uiversity_optional'	=> 'nullable|string|max:60',
            'college_required'	    => 'nullable|string|max:60',
            'college_optional'	    => 'nullable|string|max:60',
            'specialty_required'   	=> 'nullable|string|max:60',
            'specialty_optional'    => 'nullable|string|max:60',
            'hours_after_withdraw'	=> 'nullable|string|max:60',

        ]);
    //    return $request->all();
       $student=Withdrawal_form::create($request->all());
    //    return "success";
    return redirect()->route('index_withdraw');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('site.student_withdraw_form');
    }
    public function printw($id)
    {
       $row=Withdrawal_form::find($id) ;
       return view('site.print.student_withdraw_form',compact('row'));
    }

    // resources\views\site\print\student_withdraw_form.blade.php
    









// add course
    public function index_add_course(Request $request)
    {
        $rows = Course_add_form::when($request->search,function($query) use ($request){
            $query->where('name','like','%' .$request->search . '%');
        })->latest()->get();
        return view('site.index.index_add_course' ,compact('rows'));
    }

    public function show_course()
    {
        return view('site.student_add_course_form');
        
    }
    public function store_course(Request $request)
    {
        $request->validate([

            'name'	                            => 'nullable|string|max:60',
            'year'              	            => 'nullable|string|max:60',
            'term'	                            => 'nullable|string|max:60',
            'program'                   	    => 'nullable|string|max:60',
            'level'                         	=> 'nullable|string|max:60',
            'national_number'	                => 'nullable|string|max:60',
            'email'	                            => 'nullable|string|max:60',
            'dr_name'	                        => 'nullable|string|max:60',
            'phone'	                            => 'nullable|string|max:60',
            'hour_number'	                    => 'nullable|string|max:60',
            'level_rate'	                    => 'nullable|string|max:60',
            'Cumulative_average'            	=> 'nullable|string|max:60',
            'course_code'                   	=> 'nullable|string|max:60',
            'course_name'                     => 'nullable|string|max:60',
            'course_hour_number'	          => 'nullable|string|max:60',
            'number_of_register_course'       => 'nullable|string|max:60',
            'code_of_least_order'             => 'nullable|string|max:60',
            'Theoretical_lecture_dates'	      => 'nullable|string|max:60',
            'Practical_lesson_dates'	      => 'nullable|string|max:60',
            'type'                            => 'nullable|string|max:60',
            'notes'                           => 'nullable|string|max:60',
        ]);
       
       $student=Course_add_form::create($request->all());
       return redirect()->route('index_add_course');

    //    return redirect()->back(); 
    }
    public function print_add_course($id)
    {
       $row=Course_add_form::find($id) ;
       return view('site.print.student_add_course_form',compact('row'));
    }
    
    public function print_course($id)
    {
        // return"grdgfd";


        $data = [
            'title' => 'Welcome to CodeSolutionStuff.com',
            'date' => date('m/d/Y')
        ];
          
        $pdf = PDF::loadView('myPDF', $data)->setOptions(['defaultFont' => 'sans-serif']);
    
        return $pdf->download('codesolutionstuff.pdf');
        // $course=Course_add_form::findOrFail($id);
        // $pdf = PDF::loadView('site.print.student_add_course_form', [
        //     'title' => 'CodeAndDeploy.com Laravel Pdf Tutorial',
        //     'description' => 'This is an example Laravel pdf tutorial.',
        //     'footer' => 'by <a href="https://codeanddeploy.com">codeanddeploy.com</a>'
        // ]);

        // return $pdf->download('sample.pdf');
    }
    
    







    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
