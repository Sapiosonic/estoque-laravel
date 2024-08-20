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
            
            $html = '<h1>Listagem de produtos com Laravel</h1>';
            $html .= '<ul>';
            $produtos = DB::select('SELECT * FROM produtos');
            // dd($produto);

            foreach ($produtos as $produto) {
                $html .= '<li> Nome: '. $produto->name . ', Descrição:'. $produto->descricao .'</li>';
                }
            $html .= '</ul>';
            return $html;
                   
        }
    }