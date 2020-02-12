<?php


namespace App\Http\Controllers;

use App\Mail\EnviandoEmail;
use DB;
use App\Quotation;
use App\Model\Vendedor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VendedorController  extends Controller
{
    public function index()
    {
        $vendedores = Vendedor::all();
        return view('vendedor.vendedores', compact('vendedores'));
    }

    public function create()
    {
        return view('vendedor.create');
    }

    public function inserirVendedor(Request $request){
        $novoVendedor = new Vendedor();
        $novoVendedor-> nome = $request->nome;
        $novoVendedor-> email= $request->email;
        $novoVendedor-> save();
        return redirect('/vendedor')->with('success', 'Sucesso !');
    }

    public function editarVendedor($id)
    {
        $vendedor = Vendedor::find($id);

        return view('vendedor.update', compact('vendedor'));
    }

    public function update(Request $request,$id)
    {
        $vendedor = Vendedor::findOrFail($id);
        $vendedor->nome  = $request->nome;
        $vendedor->email = $request->email;
        $vendedor->save();
        return redirect('/vendedor')->with('success', 'Sucesso !');
    }

    public function destroy($id)
    {
        $vendedor = Vendedor::find($id);
        $vendedor->delete();
        return redirect('/vendedor')->with('success', 'Sucesso !');
    }
}

