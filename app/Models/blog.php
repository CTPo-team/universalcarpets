<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class blog
 * @package App\Models
 * @version December 18, 2021, 1:00 pm UTC
 *
 * @property \App\Models\BlogCategory $blogCategory
 * @property integer $blog_category_id
 * @property string $title
 * @property string $path_image
 * @property string $desc
 * @property string $short_desc
 * @property boolean $status
 * @property string $seo_desc
 * @property string $seo_category
 * @property string $seo_keyword
 * @property string $seo_url
 */
class blog extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'blog';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'blog_category_id',
        'title',
        'path_image',
        'desc',
        'short_desc',
        'status',
        'seo_desc',
        'seo_category',
        'seo_keyword',
        'seo_url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'blog_category_id' => 'integer',
        'title' => 'string',
        'path_image' => 'string',
        'desc' => 'string',
        'short_desc' => 'string',
        'status' => 'boolean',
        'seo_desc' => 'string',
        'seo_category' => 'string',
        'seo_keyword' => 'string',
        'seo_url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'blog_category_id' => 'required',
        'title' => 'required|string|max:255',
        'path_image' => 'nullable|string',
        'desc' => 'nullable|string',
        'short_desc' => 'nullable|string',
        'status' => 'required|boolean',
        'seo_desc' => 'nullable|string',
        'seo_category' => 'nullable|string',
        'seo_keyword' => 'nullable|string',
        'seo_url' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function blogCategory()
    {
        return $this->belongsTo(\App\Models\BlogCategory::class, 'blog_category_id');
    }
}
