<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;
    protected $table = 'careers';
    protected $fillable = [
        'title',
        'content'
    ];

    public function apply(){
        return $this->hasMany(CareerApply::class);
    }
}
