<?php

namespace App\Models;

use Carbon\Carbon;
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

    /**
     * @param $date
     * @return string
     */
    protected function getCreatedAtAttribute($date){
        return Carbon::parse($date)->format('l, j F Y');
    }

    /**
     * @param $date
     * @return string
     */
    protected function getUpdatedAtAttribute($date) {
        return Carbon::parse($date)->diffForHumans();
    }
    public function language(){
        return $this->belongsTo(Language::class, 'language_id');
    }
}
