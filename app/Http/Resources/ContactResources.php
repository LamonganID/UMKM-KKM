<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public $status;
    public $massage;
    public $resource;
    
    public function __construct($resource, $status, $massage)
    {
        parent::__construct($resource);
        $this->resource= $resource;
        $this->status = $status;
    }
    public function toArray(Request $request): array
    {
        return [
            'status' => $this->status,
            'massage' => $this->massage,
            'data' => parent::toArray($request),
        ];
    }
}
