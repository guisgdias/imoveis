<?php

namespace App\Criteria;

use Illuminate\Support\Facades\Auth;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class AdminListImoveisCriteria
 * @package namespace App\Criteria;
 */
class AdminListImoveisCriteria implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $user = Auth::guard('api')->user();
        $userId = $user->id;

        $model = $model->where('user_id', '=', $userId);

        return $model;
    }
}
