@extends('backend.admin')

@section('content')
    <div class="content">
        <div class="card shadow">
            <div class="card-title text-center fw-bold fs-2">
                <h1><i class="fa-solid fa-shop"></i></h1><br>

                ORDER LIST
            </div>

            <div class="card-body">
                <form action="{{ route('search_product') }}" method="GET">
                    @csrf
                    <div class="text-center mb-4">
                        <input class="border border-rounded" type="text" name="search" placeholder="Search a Name">
                        <input type="submit" value="Search" class="btn btn-sm btn-outline-primary ">
                    </div>

                </form>
                <table class="table table-bordered table-primary">
                    <thead>
                        <tr class=" table table-dark">
                            <th scope="col">Ser No.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Image</th>
                            <th scope="col">Payment Status</th>
                            <th scope="col">Delevery Status</th>
                            <th scope="col">Delevery</th>
                            <th scope="col">Print PDF</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($orders as $order)
                            <tr>
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->phone }}</td>
                                <td>{{ $order->address }}</td>
                                <td>{{ $order->price }}</td>
                                <td>{{ $order->quantity }}</td>
                                <td><img width="50" src="{{ asset('storage/products/' . $order->image) }}"
                                        alt=""></td>
                                <td>{{ $order->payment_status }}</td>
                                <td>{{ $order->delevery_status }}</td>
                                <td>
                                    @if ($order->delevery_status == 'Processing')
                                        <a class=" btn btn-sm btn-primary"
                                            onclick="return confirm('Are You Sure Want to Deleverd??!!')"
                                            href="{{ route('orderd_list', $order->id) }} ">Confirm
                                            Delevery</a>
                                    @else
                                        <p class="text-primary fw-bold">Deleverd</p>
                                    @endif



                                </td>
                                <td>
                                    <a class="btn btn-sm btn-danger" href="{{ route('print_pdf', $order->id) }}">Print
                                        PDF</a>
                                </td>

                            </tr>

                        @empty
                            <tr>
                                <td colspan="16" class="text-center">
                                    No Data Found
                                </td>
                            </tr>
                        @endforelse




                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <span style="padding-top: 20px">
        {!! $orders->withQueryString()->links('pagination::bootstrap-5') !!}


    </span>
@endsection
