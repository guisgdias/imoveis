<?php
/**
 * Created by PhpStorm.
 * User: Guilherme
 * Date: 26/09/2016
 * Time: 16:22
 */

namespace App\Services;


use App\Criteria\AdminListImoveisCriteria;
use App\Repositories\ImovelRepository;
use Illuminate\Support\Facades\Auth;

class ImovelService
{

    /**
     * @var ImovelRepository
     */
    private $imovelRepository;

    public function __construct(ImovelRepository $imovelRepository)
    {
        $this->imovelRepository = $imovelRepository;
    }

    public function listImoveisFromUser()
    {
        $this->imovelRepository->pushCriteria(new AdminListImoveisCriteria());

        return $this->imovelRepository->with(['status', 'type'])->orderBy('id', 'desc')->paginate();
    }

    public function showImovel($imovel)
    {
        $user = Auth::guard('api')->user();
        $userId = $user->id;

        if (is_null($imovel->id)) {
            $arrayError = array("data" => array("error" => "Imovel não existe!"));
            return $arrayError;
        }

        if ($imovel->user_id != $userId) {
            $arrayError = array("data" => array("error" => "Imovel não pertence a esse usuário!"));
            return $arrayError;
        }

        return $imovel;
    }

    public function create($request)
    {
        $data = $request->all();

        $user = Auth::guard('api')->user();
        $userId = $user->id;

        $data["user_id"] = $userId;

        //GERANDO A LATITUDE E LONGITUDE DO IMOVEL
        $address = $this->makeAddress($data);

        $latLong = latLongGenerate($address);

        if ($latLong === false) {
            $arrayError = array("data" => array("error" => "Problema ao gerar latitude e longitude do seu endereço!"));
            return $arrayError;
        }

        $data["latitude"] = $latLong["latitude"];
        $data["longitude"] = $latLong["longitude"];

        //SALVANDO IMAGEM NO S3 E SETANDO URL NO BANCO DE DADOS
        $url = request()->file('image')->store('images/imoveis', 's3');
        $urlCompleta = \Storage::disk('s3')->url($url);

        $data["image"] = $urlCompleta;

        return $this->imovelRepository->create($data);


    }

    public function update($imovel, $request)
    {
        $data = $request->all();

        $user = Auth::guard('api')->user();
        $userId = $user->id;

        if (is_null($imovel->id)) {
            $arrayError = array("data" => array("error" => "Imovel não existe!"));
            return $arrayError;
        }

        if ($imovel->user_id != $userId) {
            $arrayError = array("data" => array("error" => "Imovel não pertence a esse usuário!"));
            return $arrayError;
        }

        //GERANDO A LATITUDE E LONGITUDE DO IMOVEL
        $address = $this->makeAddress($data);

        $latLong = latLongGenerate($address);

        if ($latLong === false) {
            $arrayError = array("data" => array("error" => "Problema ao gerar latitude e longitude do seu endereço!"));
            return $arrayError;
        }

        $data["latitude"] = $latLong["latitude"];
        $data["longitude"] = $latLong["longitude"];

        //SALVANDO IMAGEM NO S3 E SETANDO URL NO BANCO DE DADOS
        $url = request()->file('image')->store('images/imoveis', 's3');
        $urlCompleta = \Storage::disk('s3')->url($url);

        $data["image"] = $urlCompleta;

        return $this->imovelRepository->update($data, $imovel->id);


    }

    private function makeAddress($data)
    {
        //GERANDO A LATITUDE E LONGITUDE DO IMOVEL
        $address = "";

        if (isset($data['address']) && !empty($data['address'])) {
            $address .= $data['address'] . ",";
        }

        if (isset($data['number']) && !empty($data['number'])) {
            $address .= $data['number'] . ",";
        }

        if (isset($data['complement']) && !empty($data['complement'])) {
            $address .= $data['complement'] . ",";
        }

        if (isset($data['district']) && !empty($data['district'])) {
            $address .= $data['district'] . ",";
        }

        if (isset($data['city']) && !empty($data['city'])) {
            $address .= $data['city'] . ",";
        }

        if (isset($data['uf']) && !empty($data['uf'])) {
            $address .= $data['uf'];
        }

        return $address;
    }

    public function destroy($imovel)
    {
        $user = Auth::guard('api')->user();
        $userId = $user->id;

        if (is_null($imovel->id)) {
            $arrayError = array("data" => array("error" => "Imovel não existe!"));
            return $arrayError;
        }

        if ($imovel->user_id != $userId) {
            $arrayError = array("data" => array("error" => "Imovel não pertence a esse usuário!"));
            return $arrayError;
        }

        $imovel->delete();

        $arraySuccess = array("data" => array("success" => true));
        return $arraySuccess;
    }
}