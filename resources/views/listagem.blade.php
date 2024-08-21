@extends('principal')

@section('conteudo')

@if(empty($produtos))
        <div class="alert alert-danger">
            Você não tem nenhum produto cadastrado.
        </div>
@else

        <h1>Listagem de produtos</h1>

        <table class="table table-striped table-bordered table-hover">
            @foreach ($produtos as $produto)
                <tr>
                    <td> {{ e($produto->nome) }}</td>
                    <td> {{ e($produto->valor) }}</td>
                    <td> {{ e($produto->descricao) }}</td>
                    <td> {{ e($produto->quantidade) }}</td>
                    <td><a href="/produtos/mostra/{{ $produto->id }}"><span class="bi bi-search" aria-hidden="true"></span></a></td>
                </tr>
            @endforeach
        </table>
    @endif
@stop
