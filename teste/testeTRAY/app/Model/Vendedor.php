<?php


namespace App\Model;
use Illuminate\Database\Eloquent\Model;


class Vendedor extends Model
{
    protected $table = "vendedor";
    protected $fillable = ['nome','email'];
}
