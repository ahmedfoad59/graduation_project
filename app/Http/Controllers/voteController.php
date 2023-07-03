<?php

namespace App\Http\Controllers;

use App\Models\Vote;
// use App\Models\Form2;
// use App\Models\Form3;
// use App\Models\Form4;
// use App\Models\Form5;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class voteController extends Controller
{
    public function show()
    { 
        
        return view('site.votes');
      
    } 

    public function index(Request $request)
    {
        $Admission_and_transfer1=count(Vote::where('Admission_and_transfer',1)->get());
        $Commitment_to_the1    =count(Vote::where('Commitment_to_the',1)->get());	
        $Teaching_methods_and1 =count(Vote::where('Teaching_methods_and',1)->get()); 	
        $Method_of_treatment1  = count(Vote::where('Method_of_treatment',1)->get());   
        $program_educational1  = count(Vote::where('program_educational',1)->get());    
        $Field_Training1       = count(Vote::where('Field_Training',1)->get());        
        $Laboratories_lab1     = count(Vote::where('Laboratories_lab',1)->get());	        
        $Teaching_and_learning1= count(Vote::where('Teaching_and_learning',1)->get());	    
        $Academic_Advising1    = count(Vote::where('Academic_Advising',1)->get());	        
        $Quarterly_business1   = count(Vote::where('Quarterly_business',1)->get());	    
        $Private_lessons1      = count(Vote::where('Private_lessons',1)->get());        
        $University_book1      = count( Vote::where('University_book',1)->get());	        
        $numerical_density1    = count( Vote::where('numerical_density',1)->get());       
        $The_methods_used_i1   = count(Vote::where('The_methods_used_i',1)->get());    	
        $Student_activities1   =count( Vote::where('Student_activities',1)->get());    	
        $Scholarships1         = count(Vote::where('Scholarships',1)->get());	            
        $Encouraging_excell1   = count(Vote::where('Encouraging_excell',1)->get());	    
        $Availability_of_infor1= count(Vote::where('Availability_of_infor',1)->get());	    
        $Non_discrimination1   =count( Vote::where('Non_discrimination',1)->get());    
        $The_facilities_avai1  =count( Vote::where('The_facilities_avai',1)->get());	    
        $Effective_participation_in1= count(Vote::where('Effective_participation_in',1)->get());
        $Program_management_credib1= count(Vote::where('Program_management_credib',1)->get());	
        $Complaints_and_suggesti1= count(Vote::where('Complaints_and_suggesti',1)->get());
        $Services_provided_to_stu1= count(Vote::where('Services_provided_to_stu',1)->get());
        $Services_provided_to1=  count(Vote::where('Services_provided_to',1)->get());	 
        $arr1=[
        $Admission_and_transfer1,
        $Commitment_to_the1    	,
        $Teaching_methods_and1 , 	
        $Method_of_treatment1 ,   
        $program_educational1 ,   
        $Field_Training1      ,       
        $Laboratories_lab1    ,        
        $Teaching_and_learning1,	    
        $Academic_Advising1    ,	        
        $Quarterly_business1  ,    
        $Private_lessons1     ,        
        $University_book1      ,        
        $numerical_density1   ,     
        $The_methods_used_i1  ,  	
        $Student_activities1   , 	
        $Scholarships1        ,            
        $Encouraging_excell1  ,    
        $Availability_of_infor1,	    
        $Non_discrimination1   ,  
        $The_facilities_avai1  ,	    
        $Effective_participation_in1,
        $Program_management_credib1,
        $Complaints_and_suggesti1,
        $Services_provided_to_stu1,
        $Services_provided_to1, 
        ];
        $sum1=array_sum($arr1);




        $Admission_and_transfer2= count(Vote::where('Admission_and_transfer',2)->get());
        $Commitment_to_the2    =count(Vote::where('Commitment_to_the',2)->get());	
        $Teaching_methods_and2 =count(Vote::where('Teaching_methods_and',2)->get());  	
        $Method_of_treatment2  =count( Vote::where('Method_of_treatment',2)->get());	    
        $program_educational2  = count(Vote::where('program_educational',2)->get());	    
        $Field_Training2       =count( Vote::where('Field_Training',2)->get());	        
        $Laboratories_lab2     =count( Vote::where('Laboratories_lab',2)->get());	        
        $Teaching_and_learning2= count(Vote::where('Teaching_and_learning',2)->get());	    
        $Academic_Advising2    =count( Vote::where('Academic_Advising',2)->get());	        
        $Quarterly_business2   =count( Vote::where('Quarterly_business',2)->get());	    
        $Private_lessons2      =count( Vote::where('Private_lessons',2)->get());	        
        $University_book2      = count( Vote::where('University_book',2)->get());	        
        $numerical_density2   = count( Vote::where('numerical_density',2)->get());       
        $The_methods_used_i2   =count( Vote::where('The_methods_used_i',2)->get());     	
        $Student_activities2   = count(Vote::where('Student_activities',2)->get());    	
        $Scholarships2         =count( Vote::where('Scholarships',2)->get());	            
        $Encouraging_excell2   = count(Vote::where('Encouraging_excell',2)->get());	    
        $Availability_of_infor2=count(Vote::where('Availability_of_infor',2)->get());	    
        $Non_discrimination2   = count(Vote::where('Non_discrimination',2)->get());	    
        $The_facilities_avai2  = count(Vote::where('The_facilities_avai',2)->get());	    
        $Effective_participation_in2= count(Vote::where('Effective_participation_in',2)->get());
        $Program_management_credib2= count(Vote::where('Program_management_credib',2)->get());	
        $Complaints_and_suggesti2=count( Vote::where('Complaints_and_suggesti',2)->get());	
        $Services_provided_to_stu2=count( Vote::where('Services_provided_to_stu',2)->get());	
        $Services_provided_to2=  count(Vote::where('Services_provided_to',2)->get());	

$arr2=
[
    $Admission_and_transfer2,
    $Commitment_to_the2    ,
    $Teaching_methods_and2,
    $Method_of_treatment2 ,	    
    $program_educational2 ,	    
    $Field_Training2       ,      
    $Laboratories_lab2     ,       
    $Teaching_and_learning2,	    
    $Academic_Advising2   ,      
    $Quarterly_business2 ,    
    $Private_lessons2      ,	        
    $University_book2     ,        
    $numerical_density2   ,     
    $The_methods_used_i2  ,  	
    $Student_activities2  ,
    $Scholarships2        ,           
    $Encouraging_excell2 ,    
    $Availability_of_infor2,    
    $Non_discrimination2   ,
    $The_facilities_avai2  ,    
    $Effective_participation_in2,
    $Program_management_credib2,
    $Complaints_and_suggesti2,
    $Services_provided_to_stu2,	
    $Services_provided_to2,
        ];
        $sum2=array_sum($arr2);

        $Admission_and_transfer3=count(Vote::where('Admission_and_transfer',3)->get());
        $Commitment_to_the3    =count(Vote::where('Commitment_to_the',3)->get());	
        $Teaching_methods_and3 =count(Vote::where('Teaching_methods_and',3)->get());  	
        $Method_of_treatment3  = count(Vote::where('Method_of_treatment',3)->get());	    
        $program_educational3  = count(Vote::where('program_educational',3)->get());	    
        $Field_Training3       = count(Vote::where('Field_Training',3)->get());	        
        $Laboratories_lab3     = count(Vote::where('Laboratories_lab',3)->get());	        
        $Teaching_and_learning3= count(Vote::where('Teaching_and_learning',3)->get());	    
        $Academic_Advising3    = count(Vote::where('Academic_Advising',3)->get());	        
        $Quarterly_business3   = count(Vote::where('Quarterly_business',3)->get());	    
        $Private_lessons3      =count( Vote::where('Private_lessons',3)->get());	        
        $University_book3      = count( Vote::where('University_book',3)->get());	        
        $numerical_density3    =count(  Vote::where('numerical_density',3)->get());       
        $The_methods_used_i3   =count( Vote::where('The_methods_used_i',3)->get());     	
        $Student_activities3   =count( Vote::where('Student_activities',3)->get());    	
        $Scholarships3         =count( Vote::where('Scholarships',3)->get());	            
        $Encouraging_excell3   =count( Vote::where('Encouraging_excell',3)->get());	    
        $Availability_of_infor3= count(Vote::where('Availability_of_infor',3)->get());	    
        $Non_discrimination3   =count( Vote::where('Non_discrimination',3)->get());	    
        $The_facilities_avai3  = count(Vote::where('The_facilities_avai',3)->get());	    
        $Effective_participation_in3= count(Vote::where('Effective_participation_in',3)->get());
        $Program_management_credib3= count(Vote::where('Program_management_credib',3)->get());	
        $Complaints_and_suggesti3= count(Vote::where('Complaints_and_suggesti',3)->get());	
        $Services_provided_to_stu3=count( Vote::where('Services_provided_to_stu',3)->get());	
        $Services_provided_to3=  count(Vote::where('Services_provided_to',3)->get());

$arr3=[
    
$Admission_and_transfer3,
$Commitment_to_the3   ,
$Teaching_methods_and3,
$Method_of_treatment3 ,
$program_educational3 ,    
$Field_Training3     ,        
$Laboratories_lab3   ,
$Teaching_and_learning3,
$Academic_Advising3  ,   
$Quarterly_business3 ,    
$Private_lessons3     ,        
$University_book3    ,
$numerical_density3  ,   
$The_methods_used_i3 ,	
$Student_activities3  ,
$Scholarships3         ,   
$Encouraging_excell3   ,    
$Availability_of_infor3,    
$Non_discrimination3 ,    
$The_facilities_avai3  ,    
$Effective_participation_in3,
$Program_management_credib3,	
$Complaints_and_suggesti3,
$Services_provided_to_stu3,	
$Services_provided_to3,

];
$sum3=array_sum($arr3);

        $Admission_and_transfer4=count(Vote::where('Admission_and_transfer',4)->get());
        $Commitment_to_the4    =count(Vote::where('Commitment_to_the',4)->get());	
        $Teaching_methods_and4 =count(Vote::where('Teaching_methods_and',4)->get());  	
        $Method_of_treatment4  =count( Vote::where('Method_of_treatment',4)->get());	    
        $program_educational4  = count(Vote::where('program_educational',4)->get());	    
        $Field_Training4       = count(Vote::where('Field_Training',4)->get());	        
        $Laboratories_lab4     =count( Vote::where('Laboratories_lab',4)->get());	        
        $Teaching_and_learning4=count( Vote::where('Teaching_and_learning',4)->get());	    
        $Academic_Advising4    =count( Vote::where('Academic_Advising',4)->get());	        
        $Quarterly_business4   =count( Vote::where('Quarterly_business',4)->get());	    
        $Private_lessons4      =count( Vote::where('Private_lessons',4)->get());	        
        $University_book4      = count( Vote::where('University_book',4)->get());	        
        $numerical_density4    = count( Vote::where('numerical_density',4)->get());       
        $The_methods_used_i4   =count( Vote::where('The_methods_used_i',4)->get());     	
        $Student_activities4   =count( Vote::where('Student_activities',4)->get());    	
        $Scholarships4         = count(Vote::where('Scholarships',4)->get());	            
        $Encouraging_excell4   = count(Vote::where('Encouraging_excell',4)->get());	    
        $Availability_of_infor4=count( Vote::where('Availability_of_infor',4)->get());	    
        $Non_discrimination4   =count( Vote::where('Non_discrimination',4)->get());	    
        $The_facilities_avai4  = count(Vote::where('The_facilities_avai',4)->get());	    
        $Effective_participation_in4=count( Vote::where('Effective_participation_in',4)->get());
        $Program_management_credib4= count(Vote::where('Program_management_credib',4)->get());	
        $Complaints_and_suggesti4= count(Vote::where('Complaints_and_suggesti',4)->get());	
        $Services_provided_to_stu4=count( Vote::where('Services_provided_to_stu',4)->get());	
        $Services_provided_to4=  count(Vote::where('Services_provided_to',4)->get());	 
$arr4=[
    $Admission_and_transfer4,
    $Commitment_to_the4    ,
    $Teaching_methods_and4 , 	
    $Method_of_treatment4  ,
    $program_educational4  ,   
    $Field_Training4       ,	        
    $Laboratories_lab4     ,       
    $Teaching_and_learning4,   
    $Academic_Advising4    ,       
    $Quarterly_business4  ,	    
    $Private_lessons4     ,
    $University_book4      ,      
    $numerical_density4    ,     
    $The_methods_used_i4  ,     	
    $Student_activities4  ,  	
    $Scholarships4        ,          
    $Encouraging_excell4   ,    
    $Availability_of_infor4,
    $Non_discrimination4   ,
    $The_facilities_avai4 ,	    
    $Effective_participation_in4,
    $Program_management_credib4,	
    $Complaints_and_suggesti4,
    $Services_provided_to_stu4,
    $Services_provided_to4,
    ];
    $sum4=array_sum($arr4);

        $Admission_and_transfer5=count(Vote::where('Admission_and_transfer',5)->get());
        $Commitment_to_the5    =count(Vote::where('Commitment_to_the',5)->get());	
        $Teaching_methods_and5 =count(Vote::where('Teaching_methods_and',5)->get());  	
        $Method_of_treatment5  = count(Vote::where('Method_of_treatment',5)->get());	    
        $program_educational5  = count(Vote::where('program_educational',5)->get());	    
        $Field_Training5       = count(Vote::where('Field_Training',5)->get());	        
        $Laboratories_lab5    = count(Vote::where('Laboratories_lab',5)->get());	        
        $Teaching_and_learning5= count(Vote::where('Teaching_and_learning',5)->get());	    
        $Academic_Advising5    = count(Vote::where('Academic_Advising',5)->get());	        
        $Quarterly_business5   = count(Vote::where('Quarterly_business',5)->get());	    
        $Private_lessons5      = count(Vote::where('Private_lessons',5)->get());	        
        $University_book5      = count( Vote::where('University_book',5)->get());	        
        $numerical_density5    = count( Vote::where('numerical_density',5)->get());       
        $The_methods_used_i5   =count( Vote::where('The_methods_used_i',5)->get());     	
        $Student_activities5   =count( Vote::where('Student_activities',5)->get());    	
        $Scholarships5         = count(Vote::where('Scholarships',5)->get());	            
        $Encouraging_excell5   = count(Vote::where('Encouraging_excell',5)->get());	    
        $Availability_of_infor5= count(Vote::where('Availability_of_infor',5)->get());	    
        $Non_discrimination5   =count( Vote::where('Non_discrimination',5)->get());	    
        $The_facilities_avai5  =count( Vote::where('The_facilities_avai',5)->get());	    
        $Effective_participation_in5= count(Vote::where('Effective_participation_in',5)->get());
        $Program_management_credib5= count(Vote::where('Program_management_credib',5)->get());	
        $Complaints_and_suggesti5=count( Vote::where('Complaints_and_suggesti',5)->get());	
        $Services_provided_to_stu5=count( Vote::where('Services_provided_to_stu',5)->get());	
        $Services_provided_to5= count( Vote::where('Services_provided_to',5)->get());	 
$arr5=[
    $Admission_and_transfer5,
    $Commitment_to_the5    ,
    $Teaching_methods_and5 ,
    $Method_of_treatment5  ,   
    $program_educational5  ,
    $Field_Training5       ,    
    $Laboratories_lab5    ,     
    $Teaching_and_learning5, 
    $Academic_Advising5   ,
    $Quarterly_business5,    
    $Private_lessons5    ,    
    $University_book5    ,     
    $numerical_density5  ,    
    $The_methods_used_i5  , 	
    $Student_activities5  ,
    $Scholarships5  ,    
    $Encouraging_excell5  , 
    $Availability_of_infor5,  
    $Non_discrimination5  ,    
    $The_facilities_avai5  ,   
    $Effective_participation_in5,
    $Program_management_credib5,
    $Complaints_and_suggesti5,
    $Services_provided_to_stu5,	
    $Services_provided_to5,
    
    ];
    $sum5=array_sum($arr5);

      $total=$sum1+$sum2+$sum3+$sum4+$sum5;


        $rows = Vote::when($request->search,function($query) use ($request){
            $query->where('name','like','%' .$request->search . '%');
        })->latest()->get();
        return view('site.vote.chart' ,compact('rows','sum1','sum2','sum3','sum4','sum5','total'));
    }
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
        'Admission_and_transfer'	=>['nullable',Rule::in(1,2,3,4,5)],
        'Commitment_to_the'      	=>['nullable',Rule::in(1,2,3,4,5)],
        'Teaching_methods_and'  	=>['nullable',Rule::in(1,2,3,4,5)],
        'Method_of_treatment'	    =>['nullable',Rule::in(1,2,3,4,5)],
        'program_educational'	    =>['nullable',Rule::in(1,2,3,4,5)],
        'Field_Training'	        =>['nullable',Rule::in(1,2,3,4,5)],
        'Laboratories_lab'	        =>['nullable',Rule::in(1,2,3,4,5)],
        'Teaching_and_learning'	    =>['nullable',Rule::in(1,2,3,4,5)],
        'Academic_Advising'	        =>['nullable',Rule::in(1,2,3,4,5)],
        'Quarterly_business'	    =>['nullable',Rule::in(1,2,3,4,5)],
        'Private_lessons'	        =>['nullable',Rule::in(1,2,3,4,5)],
        'University_book'	        =>['nullable',Rule::in(1,2,3,4,5)],
        'numerical_density'       	=>['nullable',Rule::in(1,2,3,4,5)],
        'The_methods_used_i'     	=>['nullable',Rule::in(1,2,3,4,5)],
        'Student_activities'    	=>['nullable',Rule::in(1,2,3,4,5)],
        'Scholarships'	            =>['nullable',Rule::in(1,2,3,4,5)],
        'Encouraging_excell'	    =>['nullable',Rule::in(1,2,3,4,5)],
        'Availability_of_infor'	    =>['nullable',Rule::in(1,2,3,4,5)],
        'Non_discrimination'	    =>['nullable',Rule::in(1,2,3,4,5)],
        'The_facilities_avai'	    =>['nullable',Rule::in(1,2,3,4,5)],
        'Effective_participation_in'=>['nullable',Rule::in(1,2,3,4,5)],
        'Program_management_credib'	=>['nullable',Rule::in(1,2,3,4,5)],
        'Complaints_and_suggesti'	=>['nullable',Rule::in(1,2,3,4,5)],
        'Services_provided_to_stu'	=>['nullable',Rule::in(1,2,3,4,5)],
        'Services_provided_to'	    =>['nullable',Rule::in(1,2,3,4,5)],
            
        
        ]);
        // return $request->all();

       $Vote=Vote::create($request->all());
    return redirect()->route('votes/index');
       
    }
    public function print1($id)
    {
        $row=Form1::find($id) ;
        return view('site.print.form1',compact('row'));
    }





}
