@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row row-cols-3 row-cols-lg-2 py-3 g-4">
            @forelse ($comics as $comic)
                <div class="col">
                    <a href="{{ route('comics.show', $comic) }}">
                        <div class="card">
                            <img class="card-img-top" src="{{ $comic->thumb }}" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title">Title: {{ $comic->title }}</h4>
                                <p class="card-text">{{ $comic->id }}</p>
                                <p class="card-text">{{ $comic->description }}</p>
                                <p class="card-text">Price: {{ $comic->price }}</p>
                                <p class="card-text">Series: {{ $comic->series }}</p>
                                <p class="card-text">Sale date: {{ $comic->sale_date }}</p>
                                <p class="card-text">Type: {{ $comic->type }}</p>
                            </div>
                        </div>
                        <!-- /.card -->
                    </a>
                </div>
                <!-- /.col -->
            @empty
                <div class="col">
                    <div class="card">
                        <h4 class="card-title">Sorry, nothing to display</h4>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            @endforelse
        </div>
        <!-- /.row -->
        {{ $comics->links('pagination::bootstrap-5') }}
    </div>
    <!-- /.container -->
@endsection
