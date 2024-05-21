<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    protected $guarded = ['id'];

    public function answers(): HasMany
    {
        return $this->hasMany(Question::class,'parent_id','id');
    }
}
