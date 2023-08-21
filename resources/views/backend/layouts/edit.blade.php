@extends('backend.admin')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-title">Category List</div>
            <div class="card-body">
                <form action="{{ route('category_update', $categoris->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="categori" class="form-label">Categori</label>
                        <input type="text" class="form-control" name="categori" id="categori" aria-describedby="categori"
                            value="{{ $categoris->categori }}">
                        <div id="categori" class="form-text">We'll never share your email with anyone else.</div>
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
