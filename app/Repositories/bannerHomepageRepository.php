<?php

namespace App\Repositories;

use App\Models\bannerHomepage;
use App\Repositories\BaseRepository;

/**
 * Class bannerHomepageRepository
 * @package App\Repositories
 * @version December 18, 2021, 1:12 pm UTC
*/

class bannerHomepageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'path_image',
        'title',
        'desc',
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
        return bannerHomepage::class;
    }
}
