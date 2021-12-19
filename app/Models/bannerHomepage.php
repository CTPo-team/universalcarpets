<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class bannerHomepage
 * @package App\Models
 * @version December 18, 2021, 1:12 pm UTC
 *
 * @property string $path_image
 * @property string $title
 * @property string $desc
 * @property string $button_url
 * @property boolean $status
 */
class bannerHomepage extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'banner_homepage';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'path_image',
        'title',
        'desc',
        'button_url',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'path_image' => 'string',
        'title' => 'string',
        'desc' => 'string',
        'button_url' => 'string',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'nullable|string|max:255',
        'desc' => 'nullable|string',
        'button_url' => 'nullable|string|max:255',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'path_image' => 'nullable|max:2048',
    ];

    
}
