<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class bannerProduct
 * @package App\Models
 * @version March 20, 2022, 10:49 am UTC
 *
 * @property string $path_image
 * @property string $title
 * @property string $category
 * @property string $button_title
 * @property string $button_url
 * @property boolean $status
 */
class bannerProduct extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'banner_product';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'path_image',
        'title',
        'category',
        'button_title',
        'button_url',
        'status',
        'desc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',        
        'title' => 'string',
        'category' => 'string',
        'button_title' => 'string',
        'button_url' => 'string',
        'desc' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'path_image' => 'required|string',
        'title' => 'nullable|string|max:255',
        'category' => 'nullable|string|max:255',
        'button_title' => 'nullable|string|max:255',
        'button_url' => 'nullable|string|max:255',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    public static $messages = [
        'path_image.required' => 'The Image field is required',
    ];

    
}
