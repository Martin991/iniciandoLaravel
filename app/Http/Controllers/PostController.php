<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        // REDIRECCIONAMOS A LA RUTA INDEX
        return view('posts.index',[
            'postsSend' => session('postsSend', [])
        ]);
    }

    public function create()
    {
        // REDIRECCIONAMOS A LA VISTA DE CREAR POST
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // CREAMOS EL NUEVO ELEMENTO
        $newPost = [
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'timeReg' => \Carbon\Carbon::now()->format('d/m/Y H:i'),
        ];

        // RESCATAMOS LOS POSTS DE LA SESSION
        $postsSend = session('postsSend', []);

        // AGREGAMOS EL NUEVO POST
        $postsSend[] = $newPost;

        // GUARDAMOS LOS POSTS EN LA SESSION
        session(['postsSend' => $postsSend]);
        
        // REDIRECCIONAMOS A LA RUTA INDEX
        return redirect()->route('posts.index',compact('postsSend'));
    }

    public function cleanPostSession()
    {
        // LIMPIAMOS LA SESSION
        session(['postsSend' => []]);

        // REDIRECCIONAMOS A LA RUTA INDEX
        return redirect()->route('posts.index');
    }

}
