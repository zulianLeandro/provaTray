@extends('layout')

@section('cabecalho')
    Pedidos
@endsection

@section('conteudo')
    <form class="needs-validation" novalidate method="post">
        @csrf
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="valorVenda">R$ Venda</label>
                <input type="text" class="form-control" id="valor" name="valor" value="" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Vender</button>
    </form>



@endsection

