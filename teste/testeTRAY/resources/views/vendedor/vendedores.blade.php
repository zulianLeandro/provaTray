@extends('layout')

@section('cabecalho')
    Vendedores
@endsection

@section('conteudo')
    <a href="/vendedor/create" class="btn btn-success mb-2" > Adicionar Vendedor </a>
    <a href="/venda/mail" class="btn btn-success mb-2" > Envio de Email </a>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Listar Vendas</th>
            <th scope="col">Vender</th>
            <th scope="col">Editar</th>
        </tr>
        </thead>
        <tbody>
            @foreach($vendedores as $vendedor)
                <tr>
                    <th scope="col"> {{ $vendedor-> id}} </th>
                    <th scope="col"> {{ $vendedor-> nome}} </th>
                    <th scope="col"> {{ $vendedor-> email}} </th>
                    <th scope="col"><a href="{{ url("/venda/$vendedor->id/pedido") }}" class="btn btn-dark mb-2" > Listar Vendas </a></th>
                    <th scope="col"> <a href="{{ url("/venda/$vendedor->id/venda") }}" class="btn btn-success mb-2" > Nova Venda </a></th>
                    <th scope="col"><a href="{{ url("/vendedor/$vendedor->id/editarVendedor") }}" class="btn btn-primary" > Editar </a>   <a href="{{ url("/vendedor/$vendedor->id/destroy") }}" class="btn btn-danger" > Excluir </a>  </th>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection

