<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class gallery extends Model
{
    use HasFactory;

    public $table = 'gallery';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    public $fillable = [
        'code',
        'path_image',
        'type'
    ];
}
