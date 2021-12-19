<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class productCategory
 * @package App\Models
 * @version December 18, 2021, 1:13 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $products
 * @property integer $product_category_id
 * @property string $title
 * @property string $desc
 * @property boolean $sub_category
 * @property string $seo_desc
 * @property string $seo_category
 * @property string $seo_keyword
 * @property string $seo_url
 */
class productCategory extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'product_category';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'product_category_id',
        'title',
        'desc',
        'sub_category',
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
        'product_category_id' => 'integer',
        'title' => 'string',
        'desc' => 'string',
        'sub_category' => 'boolean',
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
    public function products()
    {
        return $this->hasMany(\App\Models\Product::class, 'product_category_id');
    }
}
