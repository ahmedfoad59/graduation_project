<?php

namespace App\Http\Controllers\api\client;



use App\Http\Controllers\Controller;

use App\CustomClass\response;
use App\Http\Resources\ClientResource;
use App\Http\Resources\ChallengeResource;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use App\Models\Client;
use App\Models\Challenge;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Auth;
class ChallengeController extends Controller
{
    public function store(Request $request)
    {
        try {
            if ($client=auth('client')->user()) {
                return response()->json([
                    'status'  => false,
                    'message' =>__('site.user_not_found'),
                ], 404);
            }
        }
        catch (TokenExpiredException $e) {

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
        $validator=Validator::make($request->all(),[
            'name'           =>'required | string |max :50',
            'discription'	 =>'nullable | string |max :1000',
            'creater_id'     =>'required|exists:clients,id',
            'category_id'    =>'required|exists:categories,id',
            'start_date'     =>'required|date',
            'number_of_days' =>'required|numeric',
            'status'         =>['required ','string',Rule::in('open','close')],
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>false,
                'message'=>$validator->errors(),
            ]);
        }
        $challenge=Challenge::create([
            'name'           =>$request->name,
            'category_id'    =>$request->category_id,
            'start_date'     =>$request->start_date,
            'number_of_days' =>$request->number_of_days,
            'status'         =>$request->status,

        ]);
        $challenge->creater_id=$client->id;


        if($request->discription != null)
        {
            $challenge->discription=$request->discription;
        }
        $challenge->save();
      
        
        return response()->json([
            'status'=>true,
            'message'=>__('site.add_successfuly'),
            //'authType'=>$student->paid=='pay' ? true : false,

            'challenge'=>new ChallengeResource($challenge),
        ]);

    }
    public function update(Request $request)
    {
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
                'message' =>__('site.token_invalid'),
            ], 404);

        } catch (JWTException $e) {

            return response()->json([
                'status'  => false,
                'message' => __('site.token_absent'),
            ], 404);
        }
        $validator=Validator::make($request->all(),[
            'id'             =>'required | exists:challenges,id',
            'name'           =>'nullable | string |max :50',
            'discription'	 =>'nullable | string |max :1000',
            'category_id'    =>'nullable|exists:categories,id',
            'start_date'     =>'nullable|date',
            'number_of_days' =>'nullable|numeric',
            'status'         =>['nullable ','string',Rule::in('open','close')],
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>false,
                'message'=>$validator->errors(),
            ]);
        }
        $challenge=Challenge::where('creater_id',$client->id)->find($request->id);
        if(empty($challenge))
        {
            return response()->json([
                'status'=>false,
                'message'=>__('site.Not Found'),
            ]);
        }
        if($request->name != null)
        {
            $challenge->name=$request->name;
        }
        if($request->discription != null)
        {
            $challenge->discription=$request->discription;
        }
        
        if($request->category_id != null)
        {
            $challenge->category_id=$request->category_id;
        }
        
        if($request->start_date != null)
        {
            $challenge->start_date=$request->start_date;
        }
        
        if($request->number_of_days != null)
        {
            $challenge->number_of_days=$request->number_of_days;
        }
        if($request->status != null)
        {
            $challenge->status=$request->status;
        }
        
        $challenge->update();
        return response()->json([
            'status'=>true,
            'message'=>__('site.update_successfuly'),
            'challenge'=>new ChallengeResource($challenge),
        ]);

    }
}
