<?php


namespace App\Model;
use Illuminate\Database\Eloquent\Model;

//
class Venda extends Model
{
    protected $table = "venda";
    protected $fillable = ['valor','vendedor_id'];
}
