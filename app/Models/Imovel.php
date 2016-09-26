<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Imovel extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = "imoveis";

    protected $fillable = ["status_id","type_id","image","address","number","complement","district","state","uf","description","price","condiminio","iptu","area","amount_room","amount_bathroom","parking_space","longitude","latitude"];


}
