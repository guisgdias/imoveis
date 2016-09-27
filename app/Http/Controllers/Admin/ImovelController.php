<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImovelRequest;
use App\Models\Imovel;
use App\Services\ImovelService;

class ImovelController extends Controller
{
    /**
     * @var ImovelService
     */
    private $imovelService;

    public function __construct(ImovelService $imovelService)
    {
        $this->imovelService = $imovelService;
    }

    public function index(){
        return $this->imovelService->listImoveisFromUser();
    }

    public function show(Imovel $imovel){
        return $this->imovelService->showImovel($imovel);
    }

    public function create(ImovelRequest $imovelRequest){
        return $this->imovelService->create($imovelRequest);
    }

    public function update(Imovel $imovel, ImovelRequest $imovelRequest){
        return $this->imovelService->update($imovel,$imovelRequest);
    }

    public function destroy(Imovel $imovel){
        return $this->imovelService->destroy($imovel);
    }
}
