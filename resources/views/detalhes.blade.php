@extends('principal')

@section('conteudo')
    <h1>Detalhes do produto:  {{$produto->nome}} </h1>

    <ul>
        <li><strong>Valor: </strong> R$ {{$produto->valor}} </li>
        <li><strong>Descrição: </strong>  {{$produto->descricao }} </li>
        <li><strong>Quantidade em estoque </strong>  {{$produto->quantidade}} </li>
    </ul>
@stop 