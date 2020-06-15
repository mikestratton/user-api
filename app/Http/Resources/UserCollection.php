<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);

        return [
            'id' => $this->id,
            'Fname' => $this->Fname,
            'Lname' => $this->Lname,
            'email' => $this->email,
            'Phone' => $this->Phone,
            'Mobile' => $this->Mobile,

        ];
    }
}
