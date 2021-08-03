<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
        'ar_name',
        'en_name',
        'image'
    ];

    public function services(){
        return $this->hasMany(Service::class);
    }
}
