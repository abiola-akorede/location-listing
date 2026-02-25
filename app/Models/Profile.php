<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $fillable = [
            'user_id',
            'first_name',
            'last_name',
            'Surname',
            'phone',
            'email',
            'address',
            'state_of_origin',
            'local_govt',
            'gender',
            'occupation',
            'bvn',
            'passport',
            'date_of_birth',
            'name_next_of_kin',
            'addy_next_of_kin',
            'email_of_next_of_kin',
            'phone_next_of_kin',
    ];

    public function user()
    {
        return $this->belongTo(User::class);
    }
}
