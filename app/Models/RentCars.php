<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RentCars extends Model
{
    use HasFactory;
    protected $fillable =[
        'registration_license','brand','model','manufacture_date','description','category_id','properties','slug'
    ];


    // pravim slug
    protected static function boot() {
        parent::boot();
    
        static::creating(function ($question) {
            $question->slug = Str::slug((string)$question->brand . '_' . (string)$question->model . '_' .  (string)$question->registration_license );                                                
       });
       
    }
}
