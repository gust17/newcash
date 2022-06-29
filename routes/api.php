<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('file-upload/produto', function (Request $request) {

    //dd($request->all());

    $rules = array(
        'img' => 'required|mimes:jpeg,jpg,png,pdf|max:32760'
    );

    $error = Validator::make($request->all(), $rules);

    if ($error->fails()) {
        return response()->json(['errors' => $error->errors()->all()]);
    }



    $file = $request->file('img');
    // ou
    $file = $request->img;
    $nameFile = "";
    if ($request->hasFile('img') && $request->file('img')->isValid()) {

        // Define um aleatório para o arquivo baseado no timestamps atual
        $name = uniqid(date('HisYmd'));
        //    dd($name);

        // Recupera a extensão do arquivo
        $extension = $request->img->extension();

        // dd($extension);

        // Define finalmente o nome
        $nameFile = "{$name}.{$extension}";

        // Faz o upload:
        $upload = $request->img->storeAs('produtos', $nameFile,'public');
        // return $nameFile;
        // Se tiver funcionado o arquivo foi armazenado em storage/app/public/categories/nomedinamicoarquivo.extensao
        $produto = \App\Models\Produto::find($request['produto_id']);
        $produto->fill(['img' => $nameFile]);
        $produto->save();
        // Verifica se NÃO deu certo o upload (Redireciona de volta)
        if (!$upload) {
            return ('error' . ' Falha ao fazer upload');
        }
    };

    $output = array(
        'success' => 'Image uploaded successfully',
        'image' => '<img src="/produtos/' . $nameFile . '" class="img-thumbnail" />'
    );
    return $output;

    // $grava = ['custom' => $request['name'], 'name' => $new_name, 'protocolo_id' => $request['protocolo_id']];
});
