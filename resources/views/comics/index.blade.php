@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row row-cols-2 row-cols-lg-4 py-3 g-4">
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

                                <a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary my-1">Edit</a>

                                <!-- Modal trigger button -->
                                <button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal"
                                    data-bs-target="#modalId-{{ $comic->id }}">
                                    Delete
                                </button>

                                <!-- Modal Body -->
                                <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                        role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId-{{ $comic->id }}">
                                                    Attention! You are deleting {{ $comic->title }}
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">Attention! ⚠ You are aboute to delete this record.</div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <form action="{{ route('comics.destroy', $comic) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        Confirm
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
