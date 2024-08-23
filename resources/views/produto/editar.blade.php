@extends('principal')

@section('conteudo')

<h1>Editar Produto: {{ $produto->nome }}</h1>

<form action="{{ route('produto.altera', $produto->id) }}" method="post">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input id="nome_editar" name="nome" value="{{ old('nome', $produto->nome) }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="descricao">Descricao</label>
        <input id="descricao_editar" name="descricao" value="{{ old('descricao', $produto->descricao) }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="valor">Valor</label>
        <input id="valor_editar" name="valor"value="{{ old('valor', $produto->valor) }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input id="quantidade_editar" name="quantidade" value="{{ old('quantidade', $produto->quantidade) }}" type="number" class="form-control">
    </div>
    <div class="text-right" style="width: 100%; display: flex; justify-content:flex-end; margin-top: 25px;">
        <button id="btn_editar" type="submit" class="btn btn-success">Editar</button>
    </div>
</form>
@stop