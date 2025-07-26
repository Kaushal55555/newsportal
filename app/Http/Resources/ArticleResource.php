<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            "title" => $this->title,
            "content" => $this->content,
            "views" => $this->views,
            "meta_keywords" => $this->meta_keywords,
            "meta_description" => $this->meta_description,
            "image" => asset($this->image),
        ];
    }
}
