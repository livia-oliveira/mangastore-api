<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VolumeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'name_of_volume'=>$this->name_of_volume,
            'number_of_volume'=>$this->number_of_volume,
            'number_of_chapters'=>$this->number_of_chapters,
            'stock'=>$this->stock,
            'price'=>$this->price,
            'manga_id'=>$this->manga_id,
        ];
    }
}
