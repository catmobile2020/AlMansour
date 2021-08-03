<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';

    protected $fillable = [
        'category_id',
        'ar_title',
        'en_title',
        'ar_content',
        'en_content',
        'thumbnail',
        'video'
    ];

    protected $perPage = 15;

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function media(){
        return $this->hasMany(Media::class);
    }
}
