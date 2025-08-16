<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostsResources extends JsonResource
{
    public $status;
    public $resource;
    public $massage;
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function __construct($resource, $status, $massage){
        parent::__construct($resource);
        $this->resource = $resource;
        $this->status = $status;
    }
    public function toArray(Request $request): array
    {
        return [
            'status' => $this->status,
            'massage' => $this->massage,
            'data' => $this->resource
        ];
    }
}
