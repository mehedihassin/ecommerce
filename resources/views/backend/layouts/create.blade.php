@extends('backend.admin')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-title">Category List</div>
            <div class="card-body">
                <form action="{{ route('category_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="categori" class="form-label">Categori</label>
                        <input type="text" class="form-control" name="categori" id="categori"
                            aria-describedby="categori">
                        <div id="categori" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input name="image" type="file" class="form-control">


                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
