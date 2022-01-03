<?php

namespace App\Repositories;

use App\Models\productBrand;
use App\Repositories\BaseRepository;

/**
 * Class productBrandRepository
 * @package App\Repositories
 * @version December 29, 2021, 3:28 am UTC
*/

class productBrandRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return productBrand::class;
    }
}
