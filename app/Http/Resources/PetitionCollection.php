<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class PetitionCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        // Convert the collection of petitions to an array
        // return parent::toArray($request);

        // Return the specific petition data
        // wrap the request into a data key and return the collection
        return [
            'data' => $this->collection,
            'version' => '1.0.0', // with every api responce this version, author data send. but it only returns using this way in controller "return new PetitionCollection(Petition::all());"
            'author' => 'John Doe',
        ];
    }
}
