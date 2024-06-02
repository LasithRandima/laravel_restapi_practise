<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PetitionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //  return the all petition data
        // return parent::toArray($request);

        // return the specific petition data
        return [
            'id' => $this->id,
            'title' => ucwords($this->title), // we can transform the data this way
            'category' => $this->category,
            'description' => $this->description,
            'author' => $this->author,
            'signees' => $this->signees,
        ];
    }
}
