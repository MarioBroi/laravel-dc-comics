@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Add new comics</h1>
        <form action="{{ route('comics.update', $comic) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="New comic" value="{{ $comic->title }}" />
                <small id="titleHelper" class="form-text text-muted">Type a title for the current comic</small>
            </div>

            <div class="mb-3">
                <img src="{{ $comic->thumb }}" alt="Thumb of {{ $comic->title }}">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                    placeholder="https//" value="{{ $comic->thumb }}" />
                <small id="thumbHelper" class="form-text text-muted">Type the URL of the Image for the current comic</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="$00.00" value="{{ $comic->price }}" />
                <small id="priceHelper" class="form-text text-muted">Type the price for the current comic</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
                    placeholder="Acquaman" value="{{ $comic->series }}" />
                <small id="seriesHelper" class="form-text text-muted">Type the series for the current comic</small>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date"
                    aria-describedby="sale_dateHelper" placeholder="0000_00_00" value="{{ $comic->sale_date }}" />
                <small id="sale_dateHelper" class="form-text text-muted">Type the sale date for the current comic</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                    placeholder="Comic" value="{{ $comic->type }}" />
                <small id="typeHelper" class="form-text text-muted">Type the type for the current comic</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="6">{{ $comic->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">
                Update
            </button>


        </form>
    </div>
@endsection
