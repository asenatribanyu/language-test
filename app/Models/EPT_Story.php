<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EPT_Story extends Model
{
    use HasFactory;

    protected $guarded=[
        'id'
    ];

    protected  $table='ept_stories';
}