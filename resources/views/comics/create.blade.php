@extends('layout.app')

@section('content')
    <div class="container">

        <h1 class="mt-3">Add new comics</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelper"
                    placeholder="New comic" />
                <small id="titleHelper" class="form-text text-muted">Type a title for the current comic</small>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="thumbHelper"
                    placeholder="https//" />
                <small id="thumbHelper" class="form-text text-muted">Type the URL of the Image for the current comic</small>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceHelper"
                    placeholder="$00.00" value="$" />
                <small id="priceHelper" class="form-text text-muted">Type the price for the current comic</small>
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesHelper"
                    placeholder="Acquaman" />
                <small id="seriesHelper" class="form-text text-muted">Type the series for the current comic</small>
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date"
                    aria-describedby="sale_dateHelper" placeholder="0000_00_00" />
                <small id="sale_dateHelper" class="form-text text-muted">Type the sale date for the current comic</small>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeHelper"
                    placeholder="Comic" />
                <small id="typeHelper" class="form-text text-muted">Type the type for the current comic</small>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mb-5">
                Create
            </button>

        </form>

    </div>
@endsection
