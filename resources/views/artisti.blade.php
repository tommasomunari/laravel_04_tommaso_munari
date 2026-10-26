<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HomePage</title>
    {{-- bootstrap css --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    {{-- my css --}}
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
        <nav>
            <ul>
                <li>
                    <a href="{{route("homepage")}}">Home</a>
                </li>
                <li>
                    <a href="{{route("paginaartisti")}}">Artisti</a>
                </li>
            </ul>
        </nav>
        
        <section>
            @foreach ($artisti as $artista)
                <div>
                    <h2>{{$artista["nome"]}}</h2>
                    <h2>{{$artista["subject"]}}</h2>
                    <button>
                        <a href="{{route("paginadettaglioartisti", ["nome"=>$artista["nome"]])}}">Scopri la sua Storia</a>
                    </button>
                </div>
            @endforeach
            
        </section>
        {{-- bootstrap js --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>