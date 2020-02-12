@extends('layout')

@section('cabecalho')
    Pedidos
@endsection

@section('conteudo')

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id Venda</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">R$ Comissão</th>
            <th scope="col">R$ venda</th>
            <th scope="col">Data da Venda</th>
        </tr>
        </thead>
        <tbody>
                @foreach($vendas as $venda)
                    <tr>
                        <th scope="col"> {{ $venda-> id }} </th>
                        <th scope="col"> {{ ($venda-> nome)  }} </th>
                        <th scope="col"> {{ ($venda-> email) }}  </th>
                        <th scope="col">{{ ($venda-> valor) * 0.085 }}</th>
                        <th scope="col">{{ $venda-> valor }}</th>
                        <th scope="col">{{  $venda-> created_at  }}</th>

                    </tr>
                @endforeach
        </tbody>
    </table>

@endsection

