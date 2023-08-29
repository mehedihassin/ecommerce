@extends('backend.admin')

@section('content')
    <div class="content">
        <div class="card">

            <div class="card-title text-center fw-bold fs-2">
                <h1><i class="fa-solid fa-cart-shopping fs-1 text-danger"></i></h1><br>

                CATEGORY CREATE PAGE
            </div>

            <div class="card-body">
                <form action="{{ route('category_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="categori" class="form-label fw-bold"> <span><i
                                    class="fa-solid fa-cart-shopping text-danger"></i></span>Categori:</label>
                        <input type="text" class="form-control" name="categori" id="categori"
                            aria-describedby="categori">
                        <div id="categori" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label fw-bold"><span><i
                                    class="fa-solid fa-file-image text-primary "></i></span>image</label>
                        <input name="image" type="file" class="form-control">


                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
