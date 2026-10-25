<x-layout :meta-tittle="$post->title" meta-description="">
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>

    <a href="/blog">Regresar</a>

</x-layout>