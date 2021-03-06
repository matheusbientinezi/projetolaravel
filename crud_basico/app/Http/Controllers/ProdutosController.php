<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function getAll()
    {
        $produtos = Produto::get();

        return view('produtos.list',['produtos' => $produtos]);
    }

    public function create()
    {    
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        Produto::create([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);
        
        return "Produto Criado com Sucesso!
                <br>
                <a href='/produtos'>Voltar</a>";
    }

    public function showId($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.show',['produto' => $produto]);
    }
    public function showName($nome)
    {
        $produto = Produto::findOrFail($nome);
        return view('produtos.show',['produto' => $produto]);
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit',['produto' => $produto]);
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $produto->update([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade,
        ]);

        return "Produto Atualizado com Sucesso! 
                <br>
                <a href='/produtos'>Voltar</a>";
    }

    public function delete($id)
    {
        $produto = Produto::findOrfail($id);
        
        return view('produtos.delete', ['produto' => $produto]);
    }

    public function destroy($id)
    {
        $produto = Produto:: FindOrFail($id);
        $produto->delete();
    
        return "Produto excluido com Sucesso!";
    }
}
