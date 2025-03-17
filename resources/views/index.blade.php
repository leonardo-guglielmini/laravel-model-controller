@dd($movies);

@foreach ($movies as $movie)
    <div>
        <h2>{{$movie['title']}}</h2>
    </div>
@endforeach