<x-layout>
    
    
    <section>
        @foreach ($artisti as $artista)
        <div>
            <h2>{{$artista["nome"]}}</h2>
            <h2>{{$artista["subject"]}}</h2>
            <button>
                <a href="{{route("paginadettaglioartisti", ["id"=>$artista["id"]])}}">Scopri la sua Storia</a>
            </button>
        </div>
        @endforeach
        
    </section>
</x-layout>