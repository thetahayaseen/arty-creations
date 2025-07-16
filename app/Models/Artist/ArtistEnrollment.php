<?php

namespace App\Models\Artist;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class ArtistEnrollment extends Model
{
    protected $fillable = [
        "user_id", "name", "father_name", "nic_number", "address", "gender", "date_of_birth", "educational_qualifications", "present_job", "experience", "facebook", "instagram", "is_accepted"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
