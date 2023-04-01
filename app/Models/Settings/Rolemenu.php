<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rolemenu extends Model
{
    use HasFactory;
    protected $table = 'rolemenu';
    protected $primaryKey = 'id';
    protected $fillable = [
        'clientid',
        'role_id',
        'menu_id',
    ];
}
