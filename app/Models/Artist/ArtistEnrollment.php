<?php

namespace App\Models\Artist;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

/**
 * @property int $user_id
 * @property string $name
 * @property string $father_name
 * @property string $nic_number
 * @property string $address
 * @property string $gender
 * @property string $date_of_birth
 * @property string $educational_qualifications
 * @property string $present_job
 * @property string $experience
 * @property string|null $facebook
 * @property string|null $instagram
 * @property bool $is_accepted
 */
class ArtistEnrollment extends Model
{
    protected $fillable = [
        "user_id", "name", "father_name", "nic_number", "address", "gender", "date_of_birth", "educational_qualifications", "present_job", "experience", "facebook", "instagram", "is_accepted"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
