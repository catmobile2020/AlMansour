<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'email',
        'comment'
    ];

    protected $perPage = 15;

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
}
