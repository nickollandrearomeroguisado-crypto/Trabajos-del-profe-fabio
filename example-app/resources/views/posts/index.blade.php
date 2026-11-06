{{-- @component('components.layout') --}}

<x-layout meta-tittle="Blog" meta-description="Blog Description">
    <h1>My Blog</h1>

    <a href="{{ route('posts.create') }}">New Post</a>

    {{-- @dump($posts) --}}
    @foreach ($posts as $post) {{--mostrar informacion de la bases datos, foreach recorre un array--}}

    {{-- @dump($post) --}}
        {{-- <p>
            {{ $post->id . " - " . $post->title }}
        </p> --}}
        <h2>
            {{-- <a href="/blog/{{ $post->id }}">{{ $post->title }}</a> --}}
            <a href="{{ route('posts.show', $post) }}">
                {{ $post->title }}
            </a>
        </h2>
    @endforeach
</x-layout>

{{-- @endcomponent --}}