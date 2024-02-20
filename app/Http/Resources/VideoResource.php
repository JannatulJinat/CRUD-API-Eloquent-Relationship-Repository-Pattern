<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VideoResource extends JsonResource
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
            'watchable_type' => $this->watchable_type,
            'watchable_id' => $this->watchable_id,
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'likes' => $this->likes,
        ];
    }
}
