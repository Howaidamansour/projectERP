<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Resources\Json\JsonResource;

class Transaction extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    
    public function toArray(Request $request): array
    {

        return [
            'id' => $this->id,
            'amount' =>$this->amount,
            'type' =>$this->type,
             'category_id' => $this->category_id,
             'user_id' => $this->user_id,

         
        ];

    }
}
