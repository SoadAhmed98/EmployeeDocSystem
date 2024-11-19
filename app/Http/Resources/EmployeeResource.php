<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'employee_id' => $this->employee_id,
            'name' => $this->name,
            'hiring_date' => $this->hiring_date,
            'job' => $this->getJobTitle(),
            'notes' => $this->notes ? $this->notes : '',
            'documents' => $this->whenLoaded('documents', function () {
                return DocumentResource::collection($this->documents);
            }, []), // Include documents when loaded
            'created_at' => $this->created_at->toDateTimeString(),
            'updated_at' => $this->updated_at->toDateTimeString(),
        ];
    }
}
