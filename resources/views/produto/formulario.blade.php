@extends('principal')

@section('conteudo')

<h1>Novo Produto</h1>

<form action="/produtos/adiciona" method="post">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input id="nome" name="nome" class="form-control">
    </div>
    <div class="form-group">
        <label for="descricao">Descricao</label>
        <input id="descricao" name="descricao" class="form-control">
    </div>
    <div class="form-group">
        <label for="valor">Valor</label>
        <input id="valor" name="valor" class="form-control">
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input id="quantidade" name="quantidade" type="number" class="form-control">
    </div>
    <div class="text-right" style="width: 100%; display: flex; justify-content:flex-end; margin-top: 25px;">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>
@stop