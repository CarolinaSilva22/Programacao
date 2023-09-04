<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;


class FornecedorController extends Controller
{
   
    public function index()
    {
        
        return view('app.fornecedor.fornecedor');
    }
    
    public function listar(Request $request)
    {
        $fornecedores = Fornecedor::where('nome', 'like', '%'.$request->input('nome').'%')
        ->where('site', 'like', '%'.$request->input('site').'%')
        ->where('uf', 'like', '%'.$request->input('uf').'%')
        ->where('email', 'like', '%'.$request->input('email').'%')
        ->get();
        
        return view('app.fornecedor.listar',['fornecedores'=>$fornecedores]);
    }

    public function adicionar(Request $request)
    {
        if($request->input('_token') != '' && $request->input('id') == ''){
            $regras=[
                'nome' => 'required|min:5|max:50',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'required|email',];
            $feedback=[
                'required'=> 'Esse campo (:attribute) é obrigatório!!',
                'nome.min'=> 'Tem que ter no mínimo 5 caracteres!!',
                'nome.max'=> 'Ultrapassou o limite de caracter!!',
                'uf.min'=> 'Tem que ter no mínimo 2 caracteres!!',
                'uf.max'=>'Ultrapassou o limite de caracter!!',
                'email.email'=> 'Esse campo tem que ser um email válido!!'];

        $request->validate($regras, $feedback);
        $fornecedor = new Fornecedor();
        $fornecedor->create($request->all());
            }
            if($request->input('_token') != '' && $request->input('id') != ''){
                $fornecedor = Fornecedor::find($request->input('id'));
                $update = $fornecedor->update($request->all());
                if($update){

                    echo 'Update realizado com sucesso';
                }else{
                    echo 'Update apresentou problema';
                }
            }
        return view('app.fornecedor.adicionar');
    } 

    public function show(string $id)
    {
      // 
    }

    public function edit($id)
    {
       
        $fornecedor =Fornecedor::find($id);
        return view('app.fornecedor.adicionar', ['fornecedor'=>$fornecedor]);
    }
   
    public function update(Request $request, string $id)
    {
        //
    }
   
    public function destroy( $id)
    {
          Fornecedor::find($id)->delete();
            return redirect()->route('app.fornecedor.fornecedor');
          
    }
}
