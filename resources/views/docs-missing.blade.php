<h1>Página no encontrada.</h1>

@if($otherVersions->isEmpty())
    <p>No hay nada por aqui.</p>
@else
    <p>Esta página no existe para esta versión de Laravel pero se encontró en otras versiones.</p>

    <div>
        <ul class="list-custom leading-4 space-y-3">
            @foreach($otherVersions as $key => $title)
                <li><a href="{{ url('/docs/'.$key.'/'.$page) }}">{{ $title }}</a></li>
            @endforeach
        </ul>
    </div>
@endif
