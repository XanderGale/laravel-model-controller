<h1>Lista Film:</h1>

@foreach ($movies as $movie)
    <div>
        <h3>{{ $movie->title }}</h3>
        <h4>{{ $movie->nationality }}</h4>
        <h5>{{ $movie->vote }}</h5>
    </div>
    <br>
@endforeach