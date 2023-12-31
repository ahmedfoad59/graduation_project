<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ClientResource;
use App\Http\Resources\EmployeeResource;
class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return 
        [
            'id'         =>$this->id,
            'name'       =>$this->name,
            // 'clients'    => ClientResource::collection( $this->Client),
            // 'employees'    => EmployeeResource::collection( $this->Employee),
        ];
    }
}
