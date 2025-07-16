<?php

namespace App\Http\Requests\Artist;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ArtistEnrollmentRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            "name" => "required|string|min:2|max:255",
            "father_name" => "required|string|min:2|max:255",
            "nic_number" => ["required", "string", "regex:/^[0-9]{5}-[0-9]{7}-[0-9]{1}$/", Rule::unique("artist_enrollments", "nic_number")->ignore($this->artist_enrollments)],
            "address" => "required|string|max:500",
            "gender" => "required|in:male,female",
            "date_of_birth" => "required|date|before:today",
            "educational_qualifications" => "required|max:2550",
            "present_job" => "required|max:255",
            "experience" => "required|max:2550",
            "facebook" => ["required", "url", "regex:/^https:\/\/(www\.)?facebook\.com\/[A-Za-z0-9._]+\/?$/"],          
            "instagram" => ["required", "url", "regex:/^https:\/\/(www\.)?instagram\.com\/[A-Za-z0-9._]+\/?$/"],          
        ];
    }

    protected function prepareForValidation(): void
    {
        if ($this->filled('date_of_birth')) {
            $this->merge([
                'date_of_birth' => \Carbon\Carbon::createFromFormat('d-m-Y', $this->date_of_birth)->format('Y-m-d'),
            ]);
        }
    }

}