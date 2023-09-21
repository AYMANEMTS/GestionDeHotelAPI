<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $values = parent::toArray($request);
        $values['updated'] = date_format(date_create($values['updated_at']),'d-m-Y');
        unset($values['id'],$values['updated_at']);
        return $values;
    }
    public static function collection($resource)
    {
        return parent::collection($resource)->additional([
            'count' => $resource->count()
        ]);

    }
}
