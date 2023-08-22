@extends('backend.admin')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-title">Category List</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr class=" table table-dark">
                            <th scope="col">#</th>
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
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $categori->categori }}</td>
                                <td><img width="50" src="{{ asset('storage/categoris/' . $categori->image) }}"
                                        alt=""></td>
                                <td>

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
