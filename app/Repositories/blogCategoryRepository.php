<?php

namespace App\Repositories;

use App\Models\blogCategory;
use App\Repositories\BaseRepository;

/**
 * Class blogCategoryRepository
 * @package App\Repositories
 * @version December 18, 2021, 1:13 pm UTC
*/

class blogCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'desc',
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
        return blogCategory::class;
    }
}
