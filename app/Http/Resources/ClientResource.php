<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [


            'name'                =>$this->name,
            'email'                =>$this->email,
            'phone'                =>$this->phone,
            'commercial'           =>$this->commercial,
            'avatar'                =>$this->image_path,
            'country_id'           =>$this->country->name,
            // 'category_id'          =>$this->category->name,
           

               ];
    }
}
