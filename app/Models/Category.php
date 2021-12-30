<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    protected $guarded = [];

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id', 'id')->whereNotNull('parent_id');
    }

    public function parent(){
        return $this->belongsTo(self::class, 'parent_id')->whereNull('parent_id');
    }

    public function services(){
        return $this->hasMany(Service::class);
    }

}
