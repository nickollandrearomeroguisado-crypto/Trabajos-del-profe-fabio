{{-- @component('components.layout')

<h1>Inicio</h1> 

@endcomponent --}}

<x-layout meta-tittle="Home Tittle" meta-description="Home Description">
    <x-slot name="sidebar">
        Hola Sidebar
    </x-slot>
    {{-- <x-slot name="metaTittle">
        Home Tittle
    </x-slot> --}}
    <h1>Inicio</h1> {{-- segunda forma de hacer la conexion --}}
    {{-- <div>
        <p>Hola desde welcome</p>
    </div> --}}
</x-layout>

{{-- <x-layout>
    <x-slot:sidebar>

    </x-slot:sidebar>
</x-layout>  --}}


