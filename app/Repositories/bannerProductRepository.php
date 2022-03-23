<?php

namespace App\Repositories;

use App\Models\bannerProduct;
use App\Repositories\BaseRepository;

/**
 * Class bannerProductRepository
 * @package App\Repositories
 * @version March 20, 2022, 10:49 am UTC
*/

class bannerProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'path_image',
        'title',
        'category',
        'button_title',
        'button_url',
        'status'
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
        return bannerProduct::class;
    }
}
