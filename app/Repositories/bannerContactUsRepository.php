<?php

namespace App\Repositories;

use App\Models\bannerContactUs;
use App\Repositories\BaseRepository;

/**
 * Class bannerContactUsRepository
 * @package App\Repositories
 * @version March 20, 2022, 10:44 am UTC
*/

class bannerContactUsRepository extends BaseRepository
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
        return bannerContactUs::class;
    }
}
