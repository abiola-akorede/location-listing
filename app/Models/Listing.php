<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    protected $table = 'listing'; 

    protected $fillable = [
            'project_title',            
            'address',
            'city', 
            'phone',
            'email',
            'category',
            'description',
            'google_map',
            'youtube_link',
            'cover_image',
            'photo_gallery',
            'feature_1',
            'price',
            'feature_2',
            'feature_3',
            'feature_4',
            'feature_5',
            'feature_6',
            'feature1',
            'feature2',
            'feature3',
            'feature4',
            'feature5',
            'feature6',  
            'user_id',
    ];
}
