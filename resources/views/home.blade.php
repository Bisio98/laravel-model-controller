<h1>Homepage</h1>
<h3>Lista Films:</h3>

@foreach ($movies as $movie)
    <h4>{{ $movie->title }} -> <span>{{ $movie->original_title }}</span></h4>
@endforeach