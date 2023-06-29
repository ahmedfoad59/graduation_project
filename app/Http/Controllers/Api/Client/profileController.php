<?php

namespace App\Http\Controllers\Api\Client;
use App\Http\Controllers\Controller;

use App\CustomClass\response;
use App\Http\Resources\ClientResource;
use App\Http\Resources\RequestResource;
use App\Http\Resources\RankResource;
use App\Http\Resources\ChallengeResource;
use App\Http\Resources\VideoResource;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use App\Models\Client;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Auth;
use Illuminate\Support\Facades\DB;

class profileController
{
    public function getProfile(Request $request){
        try {
            if (! $client = auth('client')->user()) {
                return response()->json([
                    'status'  => false,
                    'message' =>__('site.user_not_found'),
                ], 404);
            }

        } catch (TokenExpiredException $e) {

            return response()->json([
                'status'  => false,
                'message' => __('site.token_expired'),
            ], 404);

        } catch (TokenInvalidException $e) {

            return response()->json([
                'status'  => false,
                'message' => __('site.token_invalid'),
            ], 404);

        } catch (JWTException $e) {

            return response()->json([
                'status'  => false,
                'message' => __('site.token_absent'),
            ], 404);
        }
        return response()->json([
            'status'  => true,
            //'authType'=>$student->paid=='pay' ? true : false,
            'client' =>new ClientResource($client),
        ], 200);

    }

    public function updateProfile(Request $request){
        try {
            if (! $client = auth('client')->user()) {
                return response()->json([
                    'status'  => false,
                    'message' =>__('site.user_not_found'),
                ], 404);
            }

        } catch (TokenExpiredException $e) {

            return response()->json([
                'status'  => false,
                'message' => __('site.token_expired'),
            ], 404);

        } catch (TokenInvalidException $e) {

            return response()->json([
                'status'  => false,
                'message' => __('site.token_invalid'),
            ], 404);

        } catch (JWTException $e) {

            return response()->json([
                'status'  => false,
                'message' => __('site.token_absent'),
            ], 404);
        }

        $validator = Validator::make($request->all(), [

            'name'                 => 'required|string|max:255|unique:clients,name'.$client->id,
            'email'                => 'required|email|max:255|unique:clients,email'.$client->id,
            'phone'                => "required|string|unique:clients,phone",
            'avatar'               => 'nullable|image',
            'password'             => 'required|confirmed|min:6|max:255',
            'password_confirmation'=> "required|string|same:password",
            'country_id'           => 'required|exists:countries,id',
            'brand_id'             => "required|exists:brands,id",

        ]);

        if($validator->fails()){
            return response()->json([
                "status" => false,
                'errors'=> $validator->errors(),
            ], 402);
        }

        if($request->has('name'))
        {
            $client->name  = $request->get('name');
        }
        if($request->has('email'))
        {
            $client->email  = $request->get('email');
        }
        if($request->has('phone'))
        {
            $client->phone  = $request->get('phone');
        } 
       
        if($request->has('country_id'))
        {
            $client->country_id  = $request->get('country_id');
        }
        if($request->has('brand_id'))
        {
            $client->brand_id  = $request->get('brand_id');
        }

        if($request->has('image') && $request->image != null)
        {
            if($client->image != null){
                $oldAvatar = $client->image;
                if(file_exists(base_path('public/uploads/client/') . $oldAvatar)){
                    unlink(base_path('public/uploads/client/') . $oldAvatar);
                }
            }
                $path = rand(0,1000000) . time() . '.' . $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move(base_path('public/uploads/client') , $path);
                $client->image   = $path;
        }

        if($client->save()){
            return response()->json([
                'status'  => true,
                'message' =>__('site.Profile Updated Successfully'),
                'client' => new ClientResource($client),
            ], 200);
           }
        else {
            return response()->json([
                'status'  => false,
                'message' =>__('site.profile updated failed'),
            ], 200);
        }
    }
    public function changeClientPassword(Request $request)
    {
          // return $request;
          try {
            if (! $client = auth('client')->user()) {
                return response()->json([
                    'status'  => false,
                    'message' => __('site.user_not_found'),
                ], 404);
            }

        } catch (TokenExpiredException $e) {

            return response()->json([
                'status'  => false,
                'message' => __('site.token_expired'),
            ], 404);

        } catch (TokenInvalidException $e) {

            return response()->json([
                'status'  => false,
                'message' => __('site.token_invalid'),
            ], 404);

        } catch (JWTException $e) {

            return response()->json([
                'status'  => false,
                'message' => __('site.token_absent'),
            ], 404);
        }
        $validator = Validator::make($request->all(), [
            'oldPassword'             => 'required|string|min:6',
            'password'                => 'required|string|min:6',
            'password_confirmation'   => 'required|string|same:password',
        ]);

        if($validator->fails()){
            return response()->json([
                "status"    => false,
                'message'   => $validator->errors(),
            ], 422);
        }
        if(Hash::check($request->oldPassword, $client->password)){
            $client->password  = Hash::make($request->get('password'));
            $client->save();
            return response()->json([
                'status'  => true,
                'message' => __('site.password change Successfully'),
            ], 200);

        } else {
            return response()->json([
                'status'  => false,
                'message' => __('site.old password is wrong'),
            ], 200);
        }
    }




    
//     public function getClientRequests(Request $request)
//     {
//             // return $request;
//             try {
//             if (! $client = auth('client')->user()) {
//                 return response()->json([
//                     'status'  => false,
//                     'message' => __('site.user_not_found'),
//                 ], 404);
//             }

//         } catch (TokenExpiredException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_expired'),
//             ], 404);

//         } catch (TokenInvalidException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_invalid'),
//             ], 404);

//         } catch (JWTException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_absent'),
//             ], 404);
//         }


//         $requests=$client->requsts;
//         if($requests->count() <= 0)
//         {
//             return response()->json([
//                 "status"    => false,
//                 'message'   =>__('site.Not Found'),
//             ], 422);
//         }


//         return response()->json([
//             'status'  => true,
//             'requests' =>RequestResource::collection($requests),
//         ], 200);
//     }

        
//     public function getClientRank(Request $request)
//     {
//             // return $request;
//             try {
//             if (! $client = auth('client')->user()) {
//                 return response()->json([
//                     'status'  => false,
//                     'message' => __('site.user_not_found'),
//                 ], 404);
//             }

//         } catch (TokenExpiredException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_expired'),
//             ], 404);

//         } catch (TokenInvalidException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_invalid'),
//             ], 404);

//         } catch (JWTException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_absent'),
//             ], 404);
//         }


//         $rank=$client->rank;
//         if($rank->count() <= 0)
//         {
//             return response()->json([
//                 "status"    => false,
//                 'message'   =>__('site.Not Found'),
//             ], 422);
//         }


//         return response()->json([
//             'status'  => true,
//             'ranks' =>new RankResource($rank),
//         ], 200);
//     }




    
//     public function getClientChallenges(Request $request)
//     {
//             // return $request;
//             try {
//             if (! $client = auth('client')->user()) {
//                 return response()->json([
//                     'status'  => false,
//                     'message' => __('site.user_not_found'),
//                 ], 404);
//             }

//         } catch (TokenExpiredException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_expired'),
//             ], 404);

//         } catch (TokenInvalidException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_invalid'),
//             ], 404);

//         } catch (JWTException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_absent'),
//             ], 404);
//         }


//         $challenges=$client->challenges;
//         if($challenges->count() <= 0)
//         {
//             return response()->json([
//                 "status"    => false,
//                 'message'   =>__('site.Not Found'),
//             ], 422);
//         }


//         return response()->json([
//             'status'  => true,
//             'challenges' =>ChallengeResource::collection($challenges),
//         ], 200);
//     }

    
//     public function getClientVidios(Request $request)
//     {
//             // return $request;
//             try {
//             if (! $client = auth('client')->user()) {
//                 return response()->json([
//                     'status'  => false,
//                     'message' => __('site.user_not_found'),
//                 ], 404);
//             }

//         } catch (TokenExpiredException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_expired'),
//             ], 404);

//         } catch (TokenInvalidException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_invalid'),
//             ], 404);

//         } catch (JWTException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_absent'),
//             ], 404);
//         }


//         $videos=$client->videos;
//         if($videos->count() <= 0)
//         {
//             return response()->json([
//                 "status"    => false,
//                 'message'   =>__('site.Not Found'),
//             ], 422); 
//         }


//         return response()->json([
//             'status'  => true,
//             'videos' =>VideoResource::collection($videos),
//         ], 200);
//     }



//     public function changeStudentClassroom(Request $request)
//     {
//           // return $request;
//           try {
//             if (! $student = auth('student')->user()) {
//                 return response()->json([
//                     'status'  => false,
//                     'message' => __('site.user_not_found'),
//                 ], 404);
//             }

//         } catch (TokenExpiredException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_expired'),
//             ], 404);

//         } catch (TokenInvalidException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_invalid'),
//             ], 404);

//         } catch (JWTException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_absent'),
//             ], 404);
//         }
//         $validator = Validator::make($request->all(), [
//             'classroom_id'              => 'required|exists:classrooms,id',
//         ]);

//         if($validator->fails()){
//             return response()->json([
//                 "status"    => false,
//                 'message'   => $validator->errors(),
//             ], 422);
//         }
//         $student->update(['classroom_id'=>$request->classroom_id]);

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.updated_successfuly'),
//             ], 200);
//    }

//     public function getStudenSubjects(Request $request)
//     {
//             // return $request;
//             try {
//             if (! $student = auth('student')->user()) {
//                 return response()->json([
//                     'status'  => false,
//                     'message' => __('site.user_not_found'),
//                 ], 404);
//             }

//         } catch (TokenExpiredException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_expired'),
//             ], 404);

//         } catch (TokenInvalidException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_invalid'),
//             ], 404);

//         } catch (JWTException $e) {

//             return response()->json([
//                 'status'  => false,
//                 'message' => __('site.token_absent'),
//             ], 404);
//         }
//         $classroom=$student->classroom;
//         $subjects=$classroom->subjects;
//         if($subjects->count() <= 0){
//             return response()->json([
//                 "status"    => false,
//                 'message'   =>__('site.Not Found'),
//             ], 422);
//         }


//             return response()->json([
//                 'status'  => true,
//                 'subjects' =>subjecteResource::collection($subjects),
//             ], 200);
//     }
 }
