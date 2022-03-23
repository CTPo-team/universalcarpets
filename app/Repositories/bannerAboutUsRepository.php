<?php

namespace App\Repositories;

use App\Models\bannerAboutUs;
use App\Repositories\BaseRepository;

/**
 * Class bannerAboutUsRepository
 * @package App\Repositories
 * @version March 20, 2022, 10:45 am UTC
*/

class bannerAboutUsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'path_image',
        'title'
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
        return bannerAboutUs::class;
    }
}
