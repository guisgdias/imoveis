<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Imovel extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = "imoveis";

    protected $fillable = ["status_id","type_id","user_id","image","address","number","complement","district","city","uf","title","description","price","condominio","iptu","area","amount_room","amount_bathroom","parking_space","longitude","latitude"];

    public function status(){
        return $this->belongsTo('App\Models\ImovelStatus');
    }

    public function type(){
        return $this->belongsTo('App\Models\ImovelType');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
