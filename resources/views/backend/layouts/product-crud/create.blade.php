@extends('backend.admin')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-title text-center fw-bold fs-2">
                <h1><i class="fa-solid fa-cart-shopping fs-1 text-danger"></i></h1><br>

                PRODUCT CREATE PAGE
            </div>
            <div class="card-body">
                <form action="{{ route('product_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="mb-3">
                        <label class="fw-bold" for="select" class="form-label"> <span><i
                                    class="fa-solid fa-cart-plus text-danger"></i></span>Select Categoris:</label>
                        <select name="categori_id" id="" class="form-select">
                            @foreach ($categoris as $categori)
                                <option value="{{ $categori->id }}">{{ $categori->categori }}</option>
                            @endforeach

                        </select>

                    </div>
                    <div class="mb-3">
                        <label class="fw-bold" for="product-name" class="form-label"><span><i
                                    class="fa-solid fa-bars-progress text-danger"></i></span>Name:</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="name">

                    </div>
                    <div class="mb-3">
                        <label class="fw-bold" for="price" class="form-label"><span><i
                                    class="fa-solid fa-hand-holding-dollar text-danger"></i></span>Price:</label>
                        <input type="number" class="form-control" name="price" id="price" aria-describedby="price">

                    </div>
                    <div class="mb-3">
                        <label class="fw-bold" for="discount" class="form-label"><span><i
                                    class="fa-solid fa-tags text-danger"></i></span>Discount:</label>
                        <input type="number" class="form-control" name="discount" id="discount"
                            aria-describedby="discount">

                    </div>

                    <div class="mb-3">
                        <label class="fw-bold" for="image" class="form-label"><span><i
                                    class="fa-solid fa-camera-retro text-danger"></i></span>image:</label>
                        <input name="image" type="file" class="form-control">


                    </div>
                    <div class="mb-3">
                        <label class="fw-bold" for="description" class="form-label"><span><i
                                    class="fa-solid fa-comment-medical text-danger"></i></span>Description:</label>
                        <textarea type="text" class="form-control" name="description" id="description" aria-describedby="description"></textarea>

                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
