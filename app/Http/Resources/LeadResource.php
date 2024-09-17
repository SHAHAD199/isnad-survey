<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LeadResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
  return [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'current_city' => $this->current_city,
            'downpayment' => $this->downpayment,
            'state_type' => $this->state_type,
            'area' => $this->area,
            'location' =>  explode(',', $this->location),
            'purpse_purchase' => $this->purpse_purchase,
            'current_budget' => $this->current_budget,
            'monthly_payment' => $this->monthly_payment,
            'city' => $this->city,
            'members_number' => $this->members_number,
            'job' => $this->job,
            'academic_achievement' => $this->academic_achievement,
            'marital_status' => (int) $this->marital_status,
            'created_at' => Carbon::parse($this->created_at)->format('Y-m-d')
        ];
    }
}
