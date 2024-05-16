@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
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
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
