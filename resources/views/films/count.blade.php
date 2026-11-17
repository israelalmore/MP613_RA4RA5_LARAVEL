<h1>{{ $title }}</h1>

@if (empty($count))
    <h3> No hay peliculas en la cartelera!</h3>
@else
    <h3> Hay {{ $count }} peliculas en la cartelera!</h3>
@endif
