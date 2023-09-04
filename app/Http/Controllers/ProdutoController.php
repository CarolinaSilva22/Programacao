<?php

namespace App\Http\Controllers;

use App\Models\DetalhesProduto;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
   
    public function index(Request $request)
    {
        $produtos = Produto::paginate(10);
        return view('app.produto.produto', ['produtos' => $produtos, 'request' => $request->all()]);
    }

    public function create()
    {
        return view('app.produto.create');
    }

    public function store(Request $request)
    {
        // $r=[
        //     'produto_id' => 'required',
        //     'validade' => 'required',
        //     'peso' => 'required|integer'];
        // $f=[
        //     'required'=> 'Esse campo (:attribute) é obrigatório!!',
        //     'integer'=> 'Esse campo só aceita números!!'];
            $regras=[
                'nome' => 'required|min:3|max:50',
                'preco' => 'required|numeric',
                'estoque_maximo' => 'required|integer',
                'estoque_minimo' => 'required|integer',
                'descricao' => 'required|min:5|max:200'];
            $feedback=[
                'required'=> 'Esse campo (:attribute) é obrigatório!!',
                'nome.min'=> 'Tem que ter no mínimo 5 caracteres!!',
                'nome.max'=> 'Ultrapassou o limite de caracter!!',
                'integer'=> 'Esse campo só aceita números!!',
                'numeric'=> 'Esse campo so aceita números!!',
                'descricao.max'=>'Ultrapassou o limite de caracter!!',
                'descricao.min'=> 'Tem que ter no mínimo 5 caracteres!!'];

                $request->validate($regras, $feedback);
                $produto = Produto::create($request->all());;
                return redirect()->route('app.produto.produto', ['produtos'=> $produto]);
    }

    public function show(Request $request)
    {
        $detalhes = DetalhesProduto::find($request->all());
        return view('app.produto.show',['detalhes' => $detalhes, 'request'=> $request]);
    }

    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('app.produto.edit', ['produto'=> $produto]);
    }

     public function update(Request $request, $id)
    {   
        $produto = Produto::find($id);
        $produto->update($request->all());
        return redirect()->route('app.produto.produto', [$produto->id]);
    }

     public function destroy($id)
     {
       Produto::find($id)->delete();
        return redirect()->route('app.produto.produto');
    }
    
    public function editar(DetalhesProduto $detalhes)
    {
        dd($detalhes);
        return view('app.produto.detalhes_produto', ['detalhes'=> $detalhes]);
    }
    public function atualizar(Request $request, DetalhesProduto $detalhes)
    {
        $detalhes->update($request->all());
        return redirect()->route('app.produto.show', [$detalhes->id]);
    }
}