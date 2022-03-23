<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\aboutUsGallery;

/**
 * Class aboutUsPage
 * @package App\Models
 * @version December 18, 2021, 1:12 pm UTC
 *
 * @property string $title
 * @property string $desc
 * @property string $short_desc
 * @property string $seo_desc
 * @property string $seo_category
 * @property string $seo_keyword
 * @property string $seo_url
 */
class aboutUsPage extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'about_us_page';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'desc',
        'our_strategy_desc',
        'short_desc',
        'seo_desc',
        'seo_category',
        'seo_keyword',
        'seo_url',
        'path_image_technologies',
        'path_image_strategy',
        'path_image_home',
        'path_image_network',
        'path_image_certificate',
        'frame_youtube',
        'header'
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
        'our_strategy_desc' => 'string',
        'short_desc' => 'string',
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
        'title' => 'nullable|string|max:255',
        'desc' => 'nullable|string',
        'short_desc' => 'nullable|string',
        'our_strategy_desc' => 'nullable|string',
        'seo_desc' => 'nullable|string',
        'seo_category' => 'nullable|string',
        'seo_keyword' => 'nullable|string',
        'seo_url' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable',
        'path_image_network' => "required_if:title,==,NETWORK",
        'path_image_technologies' => "required_if:title,==,TECHNOLOGIES",
        'path_image_strategy' => "required_if:title,==,OUR STORY",
        'path_image_home' => "required_if:title,==,OUR STORY",
        'path_image_certificate' => "required_if:title,==,OUR STORY",
    ];

    public static $messages = [
        'path_image_technologies.required_if' => 'The Image field is required',
        'path_image_certificate.required_if' => 'The Image Certificate field is required',
        'path_image_strategy.required_if' => 'The Image Strategy field is required',
        'path_image_home.required_if' => 'The Image Homepage field is required',
        'path_image_network.required_if' => 'The Image field is required',
    ];

}
