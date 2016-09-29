<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ImovelRequest;
use App\Models\Imovel;
use App\Repositories\ImovelStatusRepository;
use App\Repositories\ImovelTypeRepository;
use App\Services\ImovelService;
use App\Services\ImovelStatusService;
use App\Services\ImovelTypeService;

class ImovelController extends Controller
{
    /**
     * @var ImovelService
     */
    private $imovelService;
    /**
     * @var ImovelStatusRepository
     */
    private $imovelStatusRepository;
    /**
     * @var ImovelTypeRepository
     */
    private $imovelTypeRepository;
    /**
     * @var ImovelStatusService
     */
    private $imovelStatusService;
    /**
     * @var ImovelTypeService
     */
    private $imovelTypeService;

    public function __construct(ImovelService $imovelService, ImovelStatusService $imovelStatusService, ImovelTypeService $imovelTypeService)
    {
        $this->imovelService = $imovelService;
        $this->imovelStatusService = $imovelStatusService;
        $this->imovelTypeService = $imovelTypeService;
    }

    public function index(){
        $imoveis = $this->imovelService->listImoveisFromUser();
        return view('admin.home', compact('imoveis'));
    }

    public function show(Imovel $imovel){
        $imovel = $this->imovelService->showImovel($imovel);
        return view('admin.view', compact('imovel'));
    }

    public function store(){
        $status = $this->imovelStatusService->all();
        $types = $this->imovelTypeService->all();
        return view('admin.create', compact('status','types'));
    }

    public function create(ImovelRequest $imovelRequest){
        $this->imovelService->create($imovelRequest);
        return redirect()->route('admin.imoveis.index');
    }

    public function edit(Imovel $imovel){
        $status = $this->imovelStatusService->all();
        $types = $this->imovelTypeService->all();
        return view('admin.edit', compact('imovel','status','types'));

    }

    public function update(Imovel $imovel, ImovelRequest $imovelRequest){
        $this->imovelService->update($imovel,$imovelRequest);
        return redirect()->route('admin.imoveis.index');
    }

    public function destroy(Imovel $imovel){
        $this->imovelService->destroy($imovel);
        return redirect()->route('admin.imoveis.index');
    }
}
