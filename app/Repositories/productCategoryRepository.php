<?php

namespace App\Repositories;

use App\Models\productCategory;
use App\Repositories\BaseRepository;

/**
 * Class productCategoryRepository
 * @package App\Repositories
 * @version December 18, 2021, 1:13 pm UTC
*/

class productCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'product_category_id',
        'title',
        'desc',
        'sub_category',
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
        return productCategory::class;
    }
}
