<x-layout meta-tittle="Title Create" meta-description="Description create">
    <h1>Create Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf <!--es un tipo de ataque de seguridad en el que un sitio web malicioso engaña al navegador de un usuario autenticado para que ejecute acciones no deseadas en otra aplicación en la que confía-->
        <label>
            Tittle <br>
            <input type="text" name="tittle"><br>
        </label>
        <label>
            Body <br>
            <textarea name="body"></textarea>
        </label><br>
        <button type="submit">Crear</button>

    </form>

    <a href="{{ route('posts.index') }}">Volver</a>
    
    @if (session('mensaje')) {{-- session: mecanismo que permite almacenar y conservar información específica de un usuario --}}
        <p>{{ session('mensaje') }}</p>
    @endif

</x-layout>
