<?php

namespace App\Repositories;

use App\Models\blog;
use App\Repositories\BaseRepository;

/**
 * Class blogRepository
 * @package App\Repositories
 * @version December 18, 2021, 1:00 pm UTC
*/

class blogRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'blog_category_id',
        'title',
        'path_image',
        'desc',
        'short_desc',
        'status',
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
        return blog::class;
    }
}
