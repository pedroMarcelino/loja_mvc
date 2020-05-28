<?php

namespace App\Http\Controllers;

use App\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function addView()
    {
        return view('categorias.add');
    }

    public function store()
    {
        $allData = request()->all();
        $todo = new Categorias();

        $todo->name = $allData['name'];
        $todo->description = $allData['description'];
        $todo->save();

        return redirect('/home');
    }

    public function list()
    {
        $categorias = Categorias::all();

        return view('categorias.listar', ['categorias' => $categorias]);
    }

    public function storeViaApi(Request $request){
        $json = $request->getContent();

        return Categorias::create(json_decode($json, JSON_OBJECT_AS_ARRAY));
    }

    public function indexAPI(){
        return Categorias::all();
    }

    public function showAPI($id){
        $category = Categorias::find($id);

        if($category){
            return $category;
        }else{
            return json_encode([
                'err' => true,
                'message' => 'Não encontrado'
            ], 404);
        }

    }

    public function updateAPI(Request $request, $id)
    {
        $category = Categorias::find($id);

        if($category){
            $json = $request->getContent();
            $transformToArray = json_decode($json, JSON_OBJECT_AS_ARRAY);

            $category->name = $transformToArray['name'];
            $category->description = $transformToArray['description'];

            $retorno = $category->update() ? [$id=> 'Atualizado'] : [$id => 'Erro'];
        }else{
            $retorno = [$id=> 'Não existe'];
        }

        return json_encode($retorno);
    }

    public function destroyAPI($id)
    {
        $category  = Categorias::find($id);

        if($category){
            $retorno = $category->delete() ? [$id => 'Apagado'] : [$id => 'Erro'];
        }else{
            $retorno = [$id => 'Não existe'];
        }

        return json_encode($retorno);
    }
}
