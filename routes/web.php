<?php

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
// // Route::get('/', 'SiteController@index');
// Route::resource('/itens', 'ItemController');
// // Route::resource('/produto', 'ProdutoCrontroller');
// Route::resource('/tipoitem', 'TipoItemCrontroller');


// Route::get('/', function () {
//     return view('laCasa.laCasa');
// });

// Route::resource('/cadastrar', 'VacinaController');
// Route::resource('/home', 'VacinaController');
// // Route::resource('/lista', 'VacinaController');

// // Route::get('/cadastro', function () {
// //     return view('cadastroProduto');
// // });
// // Route::get('/produtos', function () {
// //     return view('Produtos');
// // });



Route::resource('/', 'laCasaController');
Route::resource('/laCasa', 'laCasaController');
Route::resource('/perfil', 'PerfilController');
// Route::resource('/login', 'LoginController');
// Route::resource('/desapega', 'DesapegaController');


