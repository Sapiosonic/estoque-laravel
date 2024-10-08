<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;
use App\Http\Requests\ProdutosRequest;



class ProdutoController extends Controller
{

    public function lista()
    {
        $produtos = Produto::all();

        if (view()->exists('produto.listagem')) 
        {
            return view('produto.listagem')->with('produtos', $produtos);
        }
    }

    public function mostra($id)
    {
        $resposta = Produto::find($id);

        if (empty($resposta)) 
        {
            return "Esse produto não existe";
        }

        return view('produto.detalhes')->with('produto', $resposta);
    }

    public function novo()
    {
        return view('produto.formulario');
    }

    public function adiciona(ProdutosRequest $request)
    {
        Produto::create($request->all());
        // return redirect('/produtos')->withInput()->onlyInput('nome');
        return redirect('/produtos')->withInput()->onlyInput('nome');
    }

    public function edita($id)
    {
        $produto = Produto::find($id);
        return view('produto.editar', compact('produto'));
    }

    public function altera(Request $request, $id)
    {
        $produto = Produto::find($id);
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->valor = $request->input('valor');
        $produto->quantidade = $request->input('quantidade');
        $produto->save();
        // return redirect()->route('produto.lista');
        return redirect('/produtos')->withInput()->onlyInput('nome');
    }

    public function listaJson()
    {
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function remove($id)
    {
        $produto = Produto::find($id);

        if ($produto) {
            $produto->delete();
        } else {
            return redirect()->route('produto.lista')->with('error', 'Produto não encontrado!');
        }

        return redirect()->route('produto.lista');
    }

}
