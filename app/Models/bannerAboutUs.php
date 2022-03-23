<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class bannerAboutUs
 * @package App\Models
 * @version March 20, 2022, 10:45 am UTC
 *
 * @property string $path_image
 * @property string $title
 */
class bannerAboutUs extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'banner_about_us';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'path_image',
        'title'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',        
        'title' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'path_image' => 'required|string',
        'title' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public static $messages = [
        'path_image.required' => 'The Image field is required',
    ];
    
}
