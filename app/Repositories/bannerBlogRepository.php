<?php

namespace App\Repositories;

use App\Models\bannerBlog;
use App\Repositories\BaseRepository;

/**
 * Class bannerBlogRepository
 * @package App\Repositories
 * @version March 20, 2022, 10:43 am UTC
*/

class bannerBlogRepository extends BaseRepository
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
        return bannerBlog::class;
    }
}
