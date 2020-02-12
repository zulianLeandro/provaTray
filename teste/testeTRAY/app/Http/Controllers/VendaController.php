<?php


namespace App\Http\Controllers;

use App\Mail\EnviandoEmail;
use DB;
use App\Quotation;
use App\Model\Venda;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VendaController
{
    public function pedido($id)
    {
        $vendas =    DB::table('venda')
                     ->join('vendedor', 'vendedor.id','=', 'venda.vendedor_id')
                     ->where('venda.vendedor_id','=',$id)
                     ->select('venda.id','venda.vendedor_id','venda.valor','venda.created_at', 'vendedor.nome', 'vendedor.email')
                     ->get();

        return view('venda.pedido', compact('vendas'));

    }

    public function venda($id)
    {
        return view('venda.venda');
    }

    public function inserirPedido(Request $request,$id)
    {
        $novoPedido = new Venda();
        $novoPedido-> valor = $request-> valor;
        $novoPedido-> vendedor_id = $id;

        $novoPedido-> save();

        return redirect('/vendedor')->with('success', 'Sucesso !');
    }

    public function mail()
    {
        Mail::to('6973e926cc-e08ecd@inbox.mailtrap.io')->send(new EnviandoEmail());

        return redirect('/vendedor')->with('success', 'Sucesso !');
    }

}
