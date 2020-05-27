<?php

namespace App\Http\Resources;

use App\Node;
use Illuminate\Http\Resources\Json\JsonResource;

class GraphResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'nodes' => NodeResource::collection(Node::where('graph_id', '=', $this->id)->get()),
        ];
    }
}
