@extends('backend.admin')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-title text-center fw-bold fs-2">
                <h1><i class="fa-brands fa-shopify text-info "></i></h1><br>

                CATEGORY CREATE PAGE
            </div>
            <div class="card-body">
                <table class="table table-bordered border-dark">
                    <thead>
                        <tr class=" table table-success text-center">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Discount</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($products as $product)
                            <tr class="text-center">
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->discount }}</td>
                                <td><img width="50" src="{{ asset('storage/products/' . $product->image) }}"
                                        alt=""></td>
                                <td>{{ $product->description }}</td>

                                <td>

                                    <a class="btn btn-sm btn-success"
                                        href="{{ route('product_edit', $product->id) }}">Edit</a>
                                    <a class="btn btn-sm btn-danger"
                                        href="{{ route('product_delete', $product->id) }}">Delete</a>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
