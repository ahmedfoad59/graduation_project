<?php

namespace App\Http\Controllers\Api\Investor;


use App\Http\Controllers\Controller;

use App\CustomClass\response;
use App\Http\Resources\StudentResource;
use App\Http\Resources\CommentResource;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use App\Models\Student;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use JWTAuth;
use Auth;
class DateController extends Controller
{
    public function store(Request $request)
    {
        try {
            if (! $investor = auth('client')->user()) {
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
        $validator=Validator::make($request->all(),[


            'day'	        =>'required|date ',
            'start_date'	=>'required',
            'end_date'	    =>'required',
            'client_id'	    =>'required',
            'employee_id'	=>'required',


            'text'          =>'required | min:1 | max:1000',
            'files'          =>'nullable | array',
            'files.*'        =>'mimes:doc,csv,xlsx,xls,docx,ppt,odt,rtf,ods,odp,pdf',
            'project_id'    =>'nullable | exists:projects,id',
            'referendum_id' =>'nullable | exists:referendums,id',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>false,
                'message'=>$validator->errors(),
            ]);
        }
        $request_data=$request->except(["_token",'files','investor_id','Apipassword','lang']);
        if($request->hasFile('files'))
        {
            $arr=array();
            foreach($request->file('files') as $file){
                $path = rand(0,1000000) . time() . '.' . $file->getClientOriginalExtension();
                $file->move(base_path('public/uploads/comments') , $path);
                array_push($arr, $path);
            }
                $request_data['files']=json_encode($arr);

        }
        $request_data['investor_id']=$investor->id;
        $comment=Comment::create($request_data);
        return response()->json([
            'status'=>true,
            'message'=>__('site.add_successfuly'),
            'comment'=>new CommentResource($comment),
        ]);

    }
    public function update(Request $request)
    {
        try {
            if (! $investor = auth('investor')->user()) {
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
            'text'          =>'required | min:1 | max:1000',
            'files'          =>'nullable | array',
            'files.*'        =>'mimes:doc,csv,xlsx,xls,docx,ppt,odt,rtf,ods,odp,pdf',
            'project_id'    =>'nullable | exists:projects,id',
            'referendum_id' =>'nullable | exists:referendums,id',
            'comment_id'    =>'required | exists:comments,id',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>false,
                'message'=>$validator->errors(),
            ]);
        }
        $request_data=$request->except(["_token",'files','comment_id','Apipassword','lang']);
        $comment=Comment::where('investor_id',$investor->id)->find($request->comment_id);
        if(empty($comment))
        {
            return response()->json([
                'status'=>false,
                'message'=>__('site.Not Found'),
            ]);
        }
        if(count($request->files) > 0)
        {
            if($comment->files != null)
            {
                foreach(json_decode($comment->files) as $file){
                    if(file_exists(base_path('public/uploads/comments/') . $file)){
                        unlink(base_path('public/uploads/comments/') . $file );
                    }
                }
            }
            $arr=array();
            foreach($request->file('files') as $file){
                $path = rand(0,1000000) . time() . '.' . $file->getClientOriginalExtension();
                $file->move(base_path('public/uploads/comments') , $path);
                array_push($arr, $path);
            }
                $request_data['files']=json_encode($arr);

        }
        $request_data['investor_id']=$investor->id;
        $comment->update($request_data);
        return response()->json([
            'status'=>true,
            'message'=>__('site.updated_successfuly'),
            'comment'=>new CommentResource($comment),
        ]);

    }

    public function delete(Request $request)
    {
        try {
            if (! $investor = auth('investor')->user()) {
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
        $validator=Validator::make($request->all(),[
            'comment_id'    =>'required | exists:comments,id',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>false,
                'message'=>$validator->errors(),
            ]);
        }
        $comment=Comment::where('investor_id',$investor->id)->find($request->comment_id);
        if(empty($comment))
        {
            return response()->json([
                'status'=>false,
                'message'=>__('site.Not Found'),
            ]);
        }
        if($comment->files != null)
        {
            foreach(json_decode($comment->files) as $file){
                if(file_exists(base_path('public/uploads/comments/') . $file)){
                    unlink(base_path('public/uploads/comments/') . $file );
                }
            }
        }
        //delete likes
        if($comment->likes()->count() > 0)
        {
            foreach($comment->likes as $like)
            {
                $like->delete();
            }
        }
        //delete replay
        if($comment->replies()->count() > 0)
        {
            foreach($comment->replies as $reply)
            {

                if($reply->files != null)
                {
                    foreach(json_decode($reply->files) as $file){
                        if(file_exists(base_path('public/uploads/replies/') . $file)){
                            unlink(base_path('public/uploads/replies/') . $file );
                        }
                    }
                }
                if($reply->likes()->count() > 0)
                {
                    foreach($reply->likes as $like)
                    {
                        $like->delete();
                    }
                }
                $reply->delete();
            }
        }
        //end rplay
        $comment->delete();
        return response()->json([
            'status'=>true,
            'message'=>__('site.deleted_successfuly'),
        ]);

    }
    public function getCommentByProjectId(Request $request)
    {
        try {
            if (! $investor = auth('investor')->user()) {
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
        $validator=Validator::make($request->all(),[
            'project_id'    =>'required | exists:projects,id',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>false,
                'message'=>$validator->errors(),
            ]);
        }
        $comments=Comment::where('project_id',$request->project_id)->paginate(10);
        if($comments->count() <= 0)
        {
            return response()->json([
                'status'=>false,
                'message'=>__('site.Not Found'),
            ]);
        }
        return response()->json([
            'status'=>true,
            'message'=>__('site.add_successfuly'),
            'comments'=>CommentResource::collection($comments)->response()->getData(true),
        ]);

    }

    public function getCommentByReferendumID(Request $request)
    {
        try {
            if (! $investor = auth('investor')->user()) {
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
        $validator=Validator::make($request->all(),[
            'referendum_id'    =>'required | exists:referendums,id',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>false,
                'message'=>$validator->errors(),
            ]);
        }
        $comments=Comment::where('referendum_id',$request->referendum_id)->paginate(10);
        if($comments->count() <= 0)
        {
            return response()->json([
                'status'=>false,
                'message'=>__('site.Not Found'),
            ]);
        }
        return response()->json([
            'status'=>true,
            'message'=>__('site.add_successfuly'),
            'comments'=>CommentResource::collection($comments)->response()->getData(true),
        ]);

    }

}
