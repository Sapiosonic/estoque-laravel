@extends('principal')

@section('conteudo')

<h1>Novo Produto</h1>

<form action="">
    <label for="">Nome</label>
    <input type="text">
    
    <label for="">Descricao</label>
    <input type="text">

    <label for="">Valor</label>
    <input type="text">

    <label for="">Quantidade</label>
    <input type="number">
    <button type="submit">Gravar</button>
</form>
@stop