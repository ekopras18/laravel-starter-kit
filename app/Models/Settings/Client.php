<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'client';
    protected $primaryKey = 'clientid';
    protected $fillable = [
        'logo',
        'name',
        'owner',
        'details',
        'address',
        'category',
        'status',
    ];
}
