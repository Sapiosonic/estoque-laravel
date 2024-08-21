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
            // $produto->saveOrFail();
            // nosso código vai aqui!
                        
            $produtos = DB::select('SELECT * FROM produtos');
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

            $resposta = DB::select('SELECT * FROM produtos WHERE id = :id', ['id' => $id]);

            if(empty($resposta))
            {
                return "Esse produto não existe";
            }
            
            return view('produto.detalhes')->with('produto', $resposta[0]);
        }
    }