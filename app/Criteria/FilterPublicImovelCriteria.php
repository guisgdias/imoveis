<?php

namespace App\Criteria;

use DB;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class FilterPublicImovelCriteria
 * @package namespace App\Criteria;
 */
class FilterPublicImovelCriteria implements CriteriaInterface
{
    /**
     * @var
     */
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

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
        if (isset($this->data['address']) && !empty($this->data['address'])) {
            $latLong = latLongGenerate($this->data['address']);

            if ($latLong === false) {
                return $model;
            }


            $latitude = $latLong["latitude"];
            $longitude = $latLong["longitude"];

            $distancia = 10;

            if (isset($this->data['distance']) && !empty($this->data['distance'])) {
                $distancia = $this->data['distance'];
            }

            DB::statement('DROP TABLE IF EXISTS tmp_imoveis_distancia');

            DB::statement('
                              CREATE TEMPORARY TABLE tmp_imoveis_distancia AS (
                                  SELECT id,
                                         (6371 * acos(
                                                       cos( radians(' . $latitude . ') )
                                                       * 
                                                       cos( radians( latitude ) )
                                                       * 
                                                       cos( radians( longitude ) - radians(' . $longitude . ') )
                                                       + 
                                                       sin( radians(' . $latitude . ') )
                                                       * 
                                                       sin( radians( latitude ) ) 
                                                     )
                                        ) AS distancia
                                    FROM imoveis
                              );
            ');

            $model = $model->whereRaw('
                imoveis.id IN (
                    SELECT id 
                    FROM tmp_imoveis_distancia
                    WHERE distancia < ' . $distancia . '
                )
            ');
        }

        return $model;
    }
}
