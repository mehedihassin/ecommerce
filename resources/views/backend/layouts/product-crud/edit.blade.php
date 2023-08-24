@extends('backend.admin')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-title">Product Create</div>
            <div class="card-body">
                <form action="{{ route('product_update', $products->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf




            </div>
            <div class="mb-3">
                <label for="product-name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="name"
                    value="{{ $products->name }}">

            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" name="price" id="price" aria-describedby="price"
                    value="{{ $products->price }}">

            </div>
            <div class="mb-3">
                <label for="discount" class="form-label">Discount</label>
                <input type="number" class="form-control" name="discount" id="price" aria-describedby="discount"
                    value="{{ $products->discount }}">

            </div>

            <div class="mb-3">
                <p><img width="50" src="{{ asset('storage/products/' . $products->image) }}" alt=""></p>



            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" name="description" id="description" aria-describedby="description">
                            {{ $products->description }}
                        </textarea>

            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    </div>
@endsection
