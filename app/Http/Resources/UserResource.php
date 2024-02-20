<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'affiliation_id' => $this->affiliation_id,
            // 'createdByUser' => $this->when($this->needToInclude($request, 'department.createdByUser'), function () {
            //     return new UserResource($this->createdByUser);
            // }),
            'ct' => $this->when($request->include == 'createdAt', function () {
                return $this->created_at;
            }),

        ];
    }
}
