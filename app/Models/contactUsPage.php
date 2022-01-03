<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class contactUsPage
 * @package App\Models
 * @version December 29, 2021, 3:25 am UTC
 *
 * @property string $title
 * @property string $desc
 * @property string $embed_maps_link
 */
class contactUsPage extends Model
{

    use HasFactory;

    public $table = 'contact_us_page';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'desc',
        'embed_maps_link'
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
        'embed_maps_link' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:255',
        'desc' => 'nullable|string',
        'embed_maps_link' => 'nullable|string',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
