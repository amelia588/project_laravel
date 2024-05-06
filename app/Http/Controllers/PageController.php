<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function posts()
    {
        // Corrección: Cambiar 'load' por 'with' para cargar relaciones correctamente.
        return view('posts', [
            'posts' => Post::with('user')->latest()->paginate()  // Asumiendo que cada post tiene una relación 'user'.
        ]);
    }

    public function post(Post $post)  
    {
        return view('post', ['post' => $post]);
    }
}
