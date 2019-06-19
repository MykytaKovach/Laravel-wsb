<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Trip extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // farmatowanie danych aby zwracało objekty JSON zamiast String
        return [
            'id'=>$this->id,
            'to'=>json_decode(preg_replace('/\s+/', '', $this->to),true),
            'from'=>json_decode(preg_replace('/\s+/', '', $this->from),true),
            'dateStart'=>$this->dateStart,
            'dateEnd'=>$this->dateEnd,
            'selectedFlight'=>json_decode(preg_replace('/\s+/', '', $this->selectedFlight),true),
            'selectedReturnFlight'=>json_decode(preg_replace('/\s+/', '', $this->selectedReturnFlight),true),
            'status'=>$this->status,
            'createdBy'=>$this->createdBy,
            'created_at'=>$this->created_at
        ];
    }
}
