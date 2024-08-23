<?php

    namespace app\Http\Controllers;
    use App\Http\Controllers\Controller;
    use App\Models\Produto;
    use Illuminate\Http\Request;



    class ProdutoController extends Controller
    {

        public function lista()
        {
            $produtos = Produto::all();

            if(view()->exists('produto.listagem'))
            {
                return view('produto.listagem')->with('produtos', $produtos);
            }
        }

        public function listaJson()
        {
            $produtos = Produto::all();
            return response()->json($produtos);
        }

        public function mostra($id)
        {
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
            // 2) salvar no banco de dados.;
            Produto::create(request()->all());

            // 3) retornar alguma view.
            return redirect('/produtos')->withInput()->onlyInput('nome');
        }
    }