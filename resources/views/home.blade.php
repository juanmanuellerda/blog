<x-layout type="soloheader">
    <x-slot:heading>
        Pagina Home
    </x-slot>  
    
    <h1>Hola!!, soy la pagina Home</h1>
    <br>
        <ul>
            @foreach ($x as $item)
                <li>
                    {{$item->name}}
                    {{-- {{$item->nickname}} --}}
                </li>
                </li>
            @endforeach
        </ul>   
</x-layout>

