@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            @forelse ($comics as $comic)
                <div class="col">
                    <div class="card">
                        <p>{{ $comic->id }}</p>
                        <p>{{ $comic->title }}</p>
                        <p>{{ $comic->description }}</p>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            @empty
            @endforelse
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
@endsection
