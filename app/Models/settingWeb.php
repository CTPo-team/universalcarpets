<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class settingWeb
 * @package App\Models
 * @version December 24, 2021, 5:08 am UTC
 *
 * @property string $phone
 * @property string $fax
 * @property string $email1
 * @property string $email2
 * @property string $email_contact_us
 * @property string $instagram
 * @property string $twitter
 * @property string $facebook
 */
class settingWeb extends Model
{

    use HasFactory;

    public $table = 'setting_web';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'phone',
        'fax',
        'email1',
        'email2',
        'email_contact_us',
        'instagram',
        'twitter',
        'facebook',
        'youtube',
        'path_image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'phone' => 'string',
        'fax' => 'string',
        'email1' => 'string',
        'email2' => 'string',
        'email_contact_us' => 'string',
        'instagram' => 'string',
        'twitter' => 'string',
        'facebook' => 'string',
        'youtube' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'phone' => 'nullable|string|max:255',
        'fax' => 'nullable|string|max:255',
        'email1' => 'nullable|string|max:255',
        'email2' => 'nullable|string|max:255',
        'email_contact_us' => 'nullable|string|max:255',
        'instagram' => 'nullable|url',
        'twitter' => 'nullable|url',
        'facebook' => 'nullable|url',
        'youtube' => 'nullable|url',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
