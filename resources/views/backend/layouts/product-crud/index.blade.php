@extends('backend.admin')

@section('content')
    <div class="content">
        <div class="card">
            <div class="card-title">Product List</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr class=" table table-dark">
                            <th scope="col">#</th>
                            <th scope="col">Categori</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp

                        <tr>
                            <th scope="row"></th>
                            <td></td>
                            <td>

                                <a class="btn btn-sm btn-success" href="">Edit</a>
                                <a class="btn btn-sm btn-danger" href="">Delete</a>
                            </td>

                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
