<?php
//traer información de la bases de datos en el controller ejemplo
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController 
{
    public function index() //__invoke es para invocar por defecto, sirve retornar un tipo de vista
    { 
        // return "Desde el blog";
        // $posts = [
        //     ["title" => "First Post"],
        //     ["title" => "Second Post"],
        //     ["title" => "Third Post"],
        //     ["title" => "Fourt Post"],
        //     ["title" => "Other Post"]
        // ];
        // $posts = DB::table('posts')->get(); //para iniciar la conexion a la base de datos
        // $posts = DB::raw('SELECT * FROM posts WHERE'); //para consultas en la bases de datos
        $posts = Post::get(); //la forma correcta de hacer la conexion a la base de datos
        return view('blog', [
            'posts' => $posts
            // 'ejemplo' => $ejemplo
        ]);
    }

    public function show(Post $post) {
        // return "Vista show posts";
        // return $post;
        // return Post::find($post);
        // return Post::findOrFail($post); //para cuando no existe me diga un 404
        // return $post;
        return view('posts.show', [
            'post' => $post
        ]);
    }
}

//Metodos en eloquet
//Post:get(); //lectura
//Post::find(id); //trae lo que se le especifica 
//$post->save(); //guarda la informacion 
//$post->delete(); //eliminar