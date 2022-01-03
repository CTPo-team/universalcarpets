<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class blogCategory
 * @package App\Models
 * @version December 18, 2021, 1:13 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $blogs
 * @property string $title
 * @property string $desc
 * @property string $seo_desc
 * @property string $seo_category
 * @property string $seo_keyword
 * @property string $seo_url
 */
class blogCategory extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'blog_category';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'desc',
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
        'title' => 'string',
        'desc' => 'string',
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
        'title' => 'required|string|max:255',
        'desc' => 'nullable|string',
        'seo_desc' => 'nullable|string',
        'seo_category' => 'nullable|string',
        'seo_keyword' => 'nullable|string',
        'seo_url' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function blogs()
    {
        return $this->hasMany(\App\Models\blog::class, 'blog_category_id');
    }
}
