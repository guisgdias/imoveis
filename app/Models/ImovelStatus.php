<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ImovelStatus extends Model implements Transformable
{
    use TransformableTrait;

    protected $table = "imovel_status";

    protected $fillable = ["description"];

}
