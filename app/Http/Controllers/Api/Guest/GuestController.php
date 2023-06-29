<?php

namespace App\Http\Controllers\Api\Guest;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Rate;
use App\Models\Brand;
use App\Models\Country;

use App\Http\Resources\EmployeeResource;
use App\Http\Resources\CountryResource;
use App\Http\Resources\BrandResource;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class GuestController extends Controller
{
    public function getAllEmployee()
    {
        $employees = Employee::All();
        if ($employees->count() <= 0) {
            return response()->json([
                'status' => '0',
                'message' => "Ther is No Subject",
            ]);
        }

        return response()->json([
            'status' => '1',
            'subjects' => EmployeeResource::collection($subjects),
        ]);
    }
    public function getAllCountries()
    {
        $countries = Country::All();
        if ($countries->count() <= 0) {
            return response()->json([
                'status' => '0',
                'code' => 400,
                'message' =>__('auth.empt'),
            ]);
        }

        return response()->json([
            'status' => '1', // i change this value from 0 to one "success has 1" "fail has 0 "
            'code' => 200,

            'message' =>  __('auth.success'),
            'countries' =>   CountryResource::collection($countries) ,
        ]);
    }

    public function getAllCategories()
    {
        $countries = Category::All();

        if ($countries->count() <= 0) {
            return response()->json([
                'status' => '0',
                'code' => 400,
                'message' =>__('auth.empt'),
            ]);
        }

        return response()->json([
            'status' => '1',
            'code' => 200,
            'message' =>  __('auth.success'),
            'categories' => CategoryResource::collection($countries),
        ]);
    }


    public function getAllBrands()
    {
        $brands = Brand::All();

        if ($brands->count() <= 0) {
            return response()->json([
                'status' => '0',
                'code' => 400,
                'message' =>__('auth.empt'),
            ]);
        }

        return response()->json([
            'status' => '1',
            'code' => 200,
            'message' =>  __('auth.success'),
            'brands' => BrandResource::collection($brands),
        ]);
    }
    /*
     public function show_mobiles(){
    $moiles = mobile::where('user_id',Auth::id())->get();
    return response()->json([
        'message' => __('auth.success'),
        'status' => 1,
        'code' => 200,
        'data'=> MobilesResource::collection($moiles)



    ]);

   } */


    // public function getStudentById(Request $request)
    // {
    //     $validator=Validator::make($request->all(),[
    //         'student_id'=>'required | exists:students,id',
    //     ]);
    //     if($validator->fails())
    //     {
    //         return response()->json([
    //             'status'=>false,
    //             'message'=>$validator->errors()->tojson(),
    //         ]);
    //     }
    //     return response()->json([
    //         'status'  => true,
    //         'student' => new StudentResource(Student::find($request->student_id)),
    //     ], 200);

    // }

    // public function getTeacherById(Request $request)
    // {
    //     $validator=Validator::make($request->all(),[
    //         'teacher_id'=>'required | exists:teachers,id',
    //     ]);
    //     if($validator->fails())
    //     {
    //         return response()->json([
    //             'status'=>false,
    //             'message'=>$validator->errors()->tojson(),
    //         ]);
    //     }
    //     return response()->json([
    //         'status'  => true,
    //         'student' => new TeacherResource(Teacher::find($request->teacher_id)),
    //     ], 200);

    // }
    // public function getBestsStudents()
    // {
    //     $students=Student::orderBy('points','desc')->limit(3)->get();
    //     if($students->count()<=0)
    //     {
    //         return response()->json([
    //             'status'=>false,
    //             'message'=>__('site.Not Found'),
    //         ]);
    //     }
    //     return response()->json([
    //         'status'=>true,
    //         'message'=>__('site.add_successfuly'),
    //         'students'=>StudentResource::collection($students),
    //     ]);

    // }
    // public function HighRateTecahers( )
    // {

    //     $HighRateTechIds=Rate::where('stars','>=',4)->pluck('teacher_id')->toArray();
    //     $teachers=Teacher::whereIn('id',array_unique($HighRateTechIds))->latest()->paginate(10);

    //         if($teachers->count() <= 0){
    //             return response()->json([
    //                 "status"    => false,
    //                 'message'   =>__('site.Not Found'),
    //             ], 422);
    //         }

    //         return response()->json([
    //             'teachers' =>TeacherResource::collection($teachers)->response()->getData(true),
    //         ], 200);
    // }
    public function getData($model,$resourc)
    {
        $all = $model->All();

        if ($countries->count() <= 0) {
            return response()->json([
                'status' => '0',
                'code' => 400,
                'message' =>__('auth.empt'),
            ]);
        }

        return response()->json([
            'status' => '1',
            'code' => 200,
            'message' =>  __('auth.success'),
            'categories' =>$resourc->collection($all),
        ]);
    }
}
