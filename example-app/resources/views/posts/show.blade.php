<x-layout :meta-tittle="$post->title" :meta-description="$post->body">
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>

    <a href="{{ route('posts.index') }}">Regresar</a> <!--como llamar correctamente una ruta de un archivo que esta en un carpeta con el .-->

</x-layout>