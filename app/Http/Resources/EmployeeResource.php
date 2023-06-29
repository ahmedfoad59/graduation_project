<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            'id'                   =>$this->id,
            'name'                 => $this->name,
            'email'                =>$this->email,
            'country_id'           =>$this->country,
            'category_id'          =>$this->category,
            'avatar'               =>$this->image_path,
        ];
    }
}
