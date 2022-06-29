<?php

use App\Models\ExtratoLegado;
use App\Models\UserLegado;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $planos = \App\Models\Produto::all();
    return view('cliente.dasboard',compact('planos'));
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('cliente.padrao');
})->middleware(['auth'])->name('dashboard');

Route::get('admin/produtos', [\App\Http\Controllers\ProdutoController::class, 'index'])->middleware(['auth']);
Route::post('admin/produto', [\App\Http\Controllers\ProdutoController::class, 'store'])->middleware(['auth']);
Route::post('admin/produto/update', [\App\Http\Controllers\ProdutoController::class, 'update'])->middleware(['auth']);
Route::get('admin/produto/create', [\App\Http\Controllers\ProdutoController::class, 'create'])->middleware(['auth']);
Route::get('admin/produto/{id}/edit', [\App\Http\Controllers\ProdutoController::class, 'edit'])->middleware(['auth']);
Route::get('admin/produto/addimg/{id}',[\App\Http\Controllers\ProdutoController::class, 'addimg'])->middleware(['auth']);
Route::get('novo', function () {

   // $user = UserLegado::where('documento', '453.794.638-51')->first();
    //dd($user);
    $now = Carbon::now();
    //dd($now);
    $extratos = ExtratoLegado::whereDate('data_criacao', $now)->where('categoria', 1)->count();
    dd($extratos);
    foreach ($extratos as $extrato) {
        // dd($extrato->id);
        echo "<p>" . $extrato->id . "</p>";
        ExtratoLegado::destroy($extrato->id);
    }
});
///area cliente
///
Route::post('gerarcompra', [\App\Http\Controllers\CompraController::class, 'store'])->middleware(['auth']);
Route::get('faturas/lista', [\App\Http\Controllers\CompraController::class, 'index'])->middleware(['auth']);
Route::get('faturas/pagar/{id}', [\App\Http\Controllers\CompraController::class, 'pagar'])->middleware(['auth']);

require __DIR__ . '/auth.php';
