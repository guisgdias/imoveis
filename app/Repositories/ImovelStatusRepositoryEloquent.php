<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ImovelStatusRepository;
use App\Models\ImovelStatus;
use App\Validators\ImovelStatusValidator;

/**
 * Class ImovelStatusRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ImovelStatusRepositoryEloquent extends BaseRepository implements ImovelStatusRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ImovelStatus::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
