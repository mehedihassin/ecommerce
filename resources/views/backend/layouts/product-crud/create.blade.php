@extends('backend.admin')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-title">Product Create</div>
            <div class="card-body">
                <form action="" method="POST">
                    @csrf


                    <div class="mb-3">
                        <label for="select" class="form-label">Select Categoris</label>
                        <select name="categori_id" id="">

                            <option value=""></option>
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
                        <label for="image" class="form-label">Image</label>
                        <img src="" alt="">

                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" class="form-control" name="description" id="description"
                            aria-describedby="description">

                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
