<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            "id" => $this->id,
            "name" => $this->name,
            "email" => $this->email,
            "phone" => $this->phone,
            "facebook_url" => $this->facebook_url,
            "youtube_url" => $this->youtube_url,
            "instagram_url" => $this->instagram_url,
            "meta_keywords" => $this->meta_keywords,
            "meta_description" => $this->meta_description,
            "logo" => asset($this->logo),
        ];
    }
}
