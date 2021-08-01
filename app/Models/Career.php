<?php

namespace App\Models;

use Carbon\Carbon;
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
    public function apply(){
        return $this->hasMany(CareerApply::class);
    }
}
