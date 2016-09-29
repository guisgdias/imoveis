<?php
/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 28/09/2016
 * Time: 19:14
 */

namespace App\Services;


use App\Repositories\ImovelTypeRepository;

class ImovelTypeService
{
    /**
     * @var ImovelTypeRepository
     */
    private $imovelTypeRepository;

    public function __construct(ImovelTypeRepository $imovelTypeRepository)
    {
        $this->imovelTypeRepository = $imovelTypeRepository;
    }

    public function all(){
        return $this->imovelTypeRepository->all();
    }
}