@extends('layout.principal')

@section('conteudo')

<h1>Novo Produto</h1>

@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            <ul>
                <li>{{ $error }}</li>
            </ul>
        </div>
    @endforeach
@endif

<form action="/produtos/adiciona" method="post">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input id="nome" name="nome" value="{{ old('nome') }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="descricao">Descricao</label>
        <input id="descricao" name="descricao" value="{{ old('descricao') }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="valor">Valor</label>
        <input id="valor" name="valor" value="{{ old('valor') }}" class="form-control">
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input id="quantidade" name="quantidade" value="{{ old('quantidade') }}" type="number" class="form-control">
    </div>
    <div class="text-right" style="width: 100%; display: flex; justify-content:flex-end; margin-top: 25px;">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>
@stop