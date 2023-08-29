@extends('backend.admin')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-title text-center fw-bold fs-2">
                <h1><i class="fa-solid fa-cart-shopping fs-1 text-danger"></i></h1><br>

                CATEGORY LIST
            </div>
            <div class="card-body">
                <table class="table table-bordered border-dark">
                    <thead>
                        <tr class=" table table-danger text-center">
                            <th scope="col">Ser No.</th>
                            <th scope="col">Categori</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($categoris as $categori)
                            <tr class="text-center">
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $categori->categori }}</td>
                                <td><img width="50" src="{{ asset('storage/categoris/' . $categori->image) }}"
                                        alt=""></td>
                                <td class="text-center">

                                    <a class="btn btn-sm btn-success"
                                        href="{{ route('category_edit', $categori->id) }}">Edit</a>
                                    <a class="btn btn-sm btn-danger"
                                        href="{{ route('category_delete', $categori->id) }}">Delete</a>
                                </td>

                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
