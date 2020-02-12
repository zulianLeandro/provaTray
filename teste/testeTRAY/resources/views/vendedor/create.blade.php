@extends('layout')

@section('cabecalho')
    Adicionar Vendedor
@endsection

@section('conteudo')

     <form class="needs-validation" novalidate method="post">
        @csrf
        <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <label for="validationServerUsername">E-mail</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="email">@</span>
                    </div>
                    <input type="text" class="form-control is-invalid" id="email"  name="email" aria-describedby="inputGroupPrepend3" required>
                    <div class="invalid-feedback">

                    </div>
                </div>
            </div>
        </div>

        <button class="btn btn-primary" type="submit">Salvar</button>
     </form>
@endsection

