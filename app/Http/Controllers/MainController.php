<?php

namespace App\Http\Controllers;

use App\Models\Imovel;
use App\Services\ImovelService;
use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    /**
     * @var ImovelService
     */
    private $imovelService;

    public function __construct(ImovelService $imovelService)
    {
        $this->imovelService = $imovelService;
    }

    public function index(Request $request){
        return $this->imovelService->listAll($request);
    }

    public function show(Imovel $imovel){
        if (is_null($imovel->id)) {
            $arrayError = array("data" => array("error" => "Imovel não existe!"));
            return $arrayError;
        }
        return $imovel->load(['status','type','user']);
    }
}
