<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerApply extends Model
{
    use HasFactory;
    protected $table = 'career_applies';
    protected $fillable = [
        'career_id',
        'name',
        'email',
        'mobile',
        'cv'
    ];

    public function career(){
        return $this->belongsTo(Career::class, 'career_id');
    }
}
