<?php
/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 28/09/2016
 * Time: 19:11
 */

namespace App\Services;


use App\Repositories\ImovelStatusRepository;

class ImovelStatusService
{

    /**
     * @var ImovelStatusRepository
     */
    private $imovelStatusRepository;

    public function __construct(ImovelStatusRepository $imovelStatusRepository)
    {

        $this->imovelStatusRepository = $imovelStatusRepository;
    }

    public function all(){
        return $this->imovelStatusRepository->all();
    }
}