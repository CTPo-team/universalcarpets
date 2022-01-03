<?php

namespace App\Repositories;

use App\Models\contactUsPage;
use App\Repositories\BaseRepository;

/**
 * Class contactUsPageRepository
 * @package App\Repositories
 * @version December 29, 2021, 3:25 am UTC
*/

class contactUsPageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'desc',
        'embed_maps_link'
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
        return contactUsPage::class;
    }
}
