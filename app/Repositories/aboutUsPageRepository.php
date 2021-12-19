<?php

namespace App\Repositories;

use App\Models\aboutUsPage;
use App\Repositories\BaseRepository;

/**
 * Class aboutUsPageRepository
 * @package App\Repositories
 * @version December 18, 2021, 1:12 pm UTC
*/

class aboutUsPageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'desc',
        'short_desc',
        'seo_desc',
        'seo_category',
        'seo_keyword',
        'seo_url'
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
        return aboutUsPage::class;
    }
}
