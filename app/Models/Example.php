<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
    protected $table = 'examples';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
        'status_type',
        'status_id',
    ];
}
