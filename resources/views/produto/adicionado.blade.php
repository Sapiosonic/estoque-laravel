@extends('principal')

@section('conteudo')

    @if(empty($produtos))
        <div class="alert alert-danger">
            Você não tem nenhum produto cadastrado.
        </div>
    @else
    
    <h1>Listagem de produtos</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th>Nome</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Ação</th>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr class="{{ $produto->quantidade <= 1 ? 'table-danger' : '' }}">
                        <td> {{ e($produto->nome) }}</td>
                        <td> {{ e($produto->valor) }}</td>
                        <td> {{ e($produto->descricao) }}</td>
                        <td> {{ e($produto->quantidade) }}</td>
                        <td><a href="/produtos/mostra/{{ $produto->id }}"><span class="bi bi-search" aria-hidden="true"></span></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <h4>
        <span class="badge bg-danger text-white float-end">Um ou menos itens no estoque</span>
    </h4>

    <div class="alert alert-success">
        <h6><strong>Sucesso!</strong> O produto {{ old('nome') }} foi adicionado com sucesso.</h6>
    </div>
@stop