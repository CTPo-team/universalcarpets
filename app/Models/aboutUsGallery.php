<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class aboutUsGallery extends Model
{
    use HasFactory;

    public $table = 'about_us_gallery';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'about_us_id',
        'path_image',
    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function aboutUs()
    {
        return $this->belongsTo(\App\Models\aboutUsPage::class, 'about_us_id');
    }

    public function aboutUsGallery()
    {
        return $this->belongsTo(\App\Models\aboutUsGallery::class, 'about_us_id');
    }
}
