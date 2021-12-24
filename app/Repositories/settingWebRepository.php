<?php

namespace App\Repositories;

use App\Models\settingWeb;
use App\Repositories\BaseRepository;

/**
 * Class settingWebRepository
 * @package App\Repositories
 * @version December 24, 2021, 5:08 am UTC
*/

class settingWebRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'phone',
        'fax',
        'email1',
        'email2',
        'email_contact_us',
        'instagram',
        'twitter',
        'facebook'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return settingWeb::class;
    }
}
