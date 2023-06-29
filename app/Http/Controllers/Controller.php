<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    public function createToken($model)
    {
        $token=Str::random(6);
        if($model->where('token',$token)->get()->count()>0)
        {
            $this->createToken($model);
        }
        return $token;
    }

    
    public function createCode($model)
    {
        $code=Str::random(6);
        if($model->where('code',$code)->get()->count()>0)
        {
            $this->createCode($model);
        }
        return $code;
    }
}
