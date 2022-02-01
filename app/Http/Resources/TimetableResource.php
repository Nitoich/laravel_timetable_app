<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TimetableResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'day' => $this->day->name,
            'teacher' => $this->teacher->full_name,
            'number' => $this->number,
            'type' => $this->type,
            'cabinet' => $this->cabinet->number,
            'subject' => $this->subject->name
        ];
    }
}
