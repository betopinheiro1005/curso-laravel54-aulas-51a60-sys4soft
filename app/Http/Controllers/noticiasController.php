<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticias;

class noticiasController extends Controller
{
    public function index()
    {
        // Vai buscar todas as notícias

        $dados = noticias::all();

        return view('noticias_index', compact('dados'));
    }

    public function create()
    {
        // Apresentar a página com o formulário para criação de nova notícia

        return view('noticias_create');
    }

    public function store(Request $request)
    {
        // Gravação de uma nova notícia na base de dados

        $noticia = new noticias;

        $noticia->titulo = $request->text_titulo;
        $noticia->texto = $request->text_texto;
        $noticia->autor = $request->text_autor; 

        // visibilidade da notícia
        if(isset($request->check_visivel)){
            $noticia->visivel = 1;
        } else {
            $noticia->visivel = 0;
        }

        // Salvar a notícia
        $noticia->save();

        // redirecionamento para o início (home)
        return redirect('/');
    }

    public function show($id)
    {
        // 
    }

    public function edit($id)
    {
        // Apresentar um formulário para editar uma notícia
        // (pressupõe a apresentação dos dados da notícia no formulário)
        $noticia = noticias::find($id);
        return view('noticias_edit', compact('noticia'));

    }

    public function update(Request $request, $id)
    {
        // Atualização dos dados da notícia na base de dados (depois de editar)
        $noticia = noticias::find($id);
        $noticia->titulo = $request->text_titulo;
        $noticia->texto = $request->text_texto;
        $noticia->autor = $request->text_autor;

        // visibilidade da notícia
        if(isset($request->check_visivel)){
            $noticia->visivel = 1;
        } else {
            $noticia->visivel = 0;
        }

        $noticia->save();

        return redirect('/gerir_noticias');
    }

    public function destroy($id)
    {
        // Eliminar uma notícia da base de dados
        noticias::destroy($id);
        return redirect('/gerir_noticias');
    }

    public function apresentarTabelaGestao(){
        // Carregar todas as notícias e apresentar no formato de tabela para gestao
        $noticias = noticias::all();
        return view('noticias_gestao', compact('noticias'));
    }

    // Tornar invisível uma notícia que está visível
    public function colocarInvisivel($id){
        $noticia = noticias::find($id);
        $noticia->visivel = 0;
        $noticia->save();
        return redirect('/gerir_noticias');
    }

    // Tornar visível uma notícia que está invisível
    public function colocarVisivel($id){
        $noticia = noticias::find($id);   
        $noticia->visivel = 1;
        $noticia->save();
        return redirect('/gerir_noticias');
    }

}
