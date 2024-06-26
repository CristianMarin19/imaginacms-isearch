<?php

namespace Modules\Isearch\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class SearchItemTransformer extends JsonResource
{
    public function toArray($request): array
    {
        $data = [
            'id' => $this->id,
            'title' => $this->name ?? $this->title ?? '',
            'slug' => $this->slug ?? '',
            'url' => $this->url ?? '',
            'mediaFiles' => $this->mediaFiles(),
            'category' => new SearchItemTransformer($this->whenLoaded('category')),
        ];

        return $data;
    }
}
