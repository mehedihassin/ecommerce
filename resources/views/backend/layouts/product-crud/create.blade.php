@extends('backend.admin')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-title">Product Create</div>
            <div class="card-body">
                <form action="{{ route('product_store') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="mb-3">
                        <label for="select" class="form-label">Select Categoris</label>
                        <select name="categori_id" id="" class="form-select">
                            @foreach ($categoris as $categori)
                                <option value="{{ $categori->id }}">{{ $categori->categori }}</option>
                            @endforeach

                        </select>

                    </div>
                    <div class="mb-3">
                        <label for="product-name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="name">

                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" name="price" id="price" aria-describedby="price">

                    </div>
                    <div class="mb-3">
                        <label for="discount" class="form-label">Discount</label>
                        <input type="number" class="form-control" name="discount" id="discount"
                            aria-describedby="discount">

                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">image</label>
                        <input name="image" type="file" class="form-control">


                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" class="form-control" name="description" id="description" aria-describedby="description"></textarea>

                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
