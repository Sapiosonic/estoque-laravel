<?php

    namespace app\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\DB;
    use App\Models\Produto;
    use Illuminate\Http\Request;



    class ProdutoController extends Controller
    {

        public function lista()
        {
            // $produto = new Produto();
            // $produto->name = 'Máquina de lavar';
            // $produto->descricao = 'Máquina de lavar da Samsung 15kg modo enxague, centrífuga.';
            // $produto->preco = 3100.90;
            // $produto->qtd_estoque = 5;
            // $produto = Produto::FindOrNew('id')
            // $produto->saveOrFail();
            // nosso código vai aqui!
            
            $produtos = Produto::all();
            // dd($produto);
            // return view('listagem')->with('produtos', $produtos);
            // return view('listagem')->withProdutos($produtos);

            if(view()->exists('produto.listagem'))
            {
                return view('produto.listagem')->with('produtos', $produtos);
                // return view('listagem')->with('produtos', array());
            }
        }

        public function mostra($id)
        {
            // $id = request('id', '0');
            // $id = request()->route('id');

            $resposta = Produto::find($id);
            
            if(empty($resposta))
            {
                return "Esse produto não existe";
            }
            
            return view('produto.detalhes')->with('produto', $resposta);
        }

        public function novo()
        {
            return view('produto.formulario');
        }

        public function adiciona()
        {
            // deve adicionar os produtos no banco.

            // 1) pegar dados no formulário.
            $nome  = request('nome');
            $descricao  = request('descricao');
            $valor  = request('valor');
            $quantidade  = request('quantidade');

            // 2) salvar no banco de dados.
            Produto::create([
                'nome' => $nome,
                'descricao' => $descricao,
                'valor' => $valor,
                'quantidade' => $quantidade
            ]);
            

            // 3) retornar alguma view.
            // $produtos = Produto::all();
            // return view('produto.listagem')->with('produtos', $produtos);
            return redirect('/produtos')->withInput()->onlyInput('nome');
        }
    }