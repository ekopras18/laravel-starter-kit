<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table = 'activity_log';
    protected $primaryKey = 'id';
    protected $fillable = [
        'clientid',
        'user',
        'table',
        'query',
        'detail',
    ];
}
