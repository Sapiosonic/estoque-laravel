<?php

    namespace app\Http\Controllers;
    use App\Http\Controllers\Controller;
    use Illuminate\Support\Facades\DB;
    use App\Models\Produto;



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

            if(view()->exists('listagem'))
            {
                return view('listagem')->with('produtos', $produtos);
            }
        }
    }