<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class product
 * @package App\Models
 * @version December 18, 2021, 12:59 pm UTC
 *
 * @property \App\Models\ProductCategory $productCategory
 * @property integer $product_category_id
 * @property string $title
 * @property string $path_image
 * @property string $desc
 * @property boolean $status
 * @property string $seo_desc
 * @property string $seo_category
 * @property string $seo_keyword
 * @property string $seo_url
 */
class product extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'product';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_category_id',
        'product_brand_id',
        'title',
        'path_image',
        'desc',
        'status',
        'seo_desc',
        'seo_category',
        'seo_keyword',
        'seo_url',
        'slug',
        'featured',
        'path_image_thumbnail'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'product_category_id' => 'integer',
        'product_brand_id' => 'integer',
        'title' => 'string',
        'desc' => 'string',
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
        'product_category_id' => 'required',
        'product_brand_id' => 'required',
        'title' => 'required|string|max:255',
        'path_image.*' => 'nullable|max:2048',
        'desc' => 'nullable|string',
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
    public function productCategory()
    {
        return $this->belongsTo(\App\Models\productCategory::class, 'product_category_id');
    }

    public function productBrand()
    {
        return $this->belongsTo(\App\Models\productBrand::class, 'product_brand_id');
    }

    public function imageProduct()
    {
        return $this->hasMany(\App\Models\imageProduct::class, 'product_id', 'id');
    }

    public function imageProductOne()
    {
        return $this->hasOne(\App\Models\imageProduct::class, 'product_id', 'id')->oldest();
    }
}
