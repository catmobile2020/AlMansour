<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = [
        'language_id',
        'title',
        'caption',
        'content',
        'image'
    ];

    public function language(){
        return $this->belongsTo(Language::class, 'language_id');
    }
}
