<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'menu';
    protected $primaryKey = 'id';
    protected $fillable = [
        'clientid',
        'navigasi',
        'name',
        'route',
        'icon',
        'parent',
        'order',
    ];
}
