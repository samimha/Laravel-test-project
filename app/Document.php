<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Document extends Model
{
    use softDeletes;

    protected $dates = ['deleted_at'];
    
    protected $fillable = ['title', 'user_id'];
}
