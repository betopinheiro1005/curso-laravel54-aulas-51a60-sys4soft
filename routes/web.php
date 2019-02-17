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

// Route::get('/', function () {
//     return view('welcome');
// });

/* -------------------------------------------------------------------------- */

/* Aula 52 */

Route::get('teste', function () {
    return view('teste');
});

/* -------------------------------------------------------------------------- */

/* Aula 53 */

Route::get('/', 'noticiasController@index');

/* -------------------------------------------------------------------------- */

/* Aula 56 */

Route::get('/nova_noticia', 'noticiasController@create');

/* -------------------------------------------------------------------------- */

/* Aula 57 */

Route::post('/salvar_noticia', 'noticiasController@store');

/* -------------------------------------------------------------------------- */

/* Aula 58 */

Route::get('/gerir_noticias', 'noticiasController@apresentarTabelaGestao');

/* -------------------------------------------------------------------------- */

/* Aula 59 */

/* Visibilidade */

Route::get('/colocar_invisivel/{id}', 'noticiasController@colocarInvisivel');
Route::get('/colocar_visivel/{id}', 'noticiasController@colocarVisivel');

/* Eliminar notícia */

Route::get('/eliminar_noticia/{id}', 'noticiasController@destroy');

/* -------------------------------------------------------------------------- */

/* Aula 60 */

/* Editar notícia */

Route::get('/editar_noticia/{id}', 'noticiasController@edit');

/* Atualizar notícia */

Route::post('/atualizar_noticia/{id}', 'noticiasController@update');

/* -------------------------------------------------------------------------- */
