<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <base href="/public">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    {{-- font awesome link --}}
    <script src="https://kit.fontawesome.com/72826e8494.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->


        @include('fontend.navber')


        <!-- end header section -->

        <div class="container">
            <div class="cart">
                <div class="cart-title">
                    <h1 class="text-center fw-bold text-info mt-5 mb-4">YOUR ORDER TABLE</h1>
                </div>
                <div class="cart-body">
                    <table class="table table-bordered ">
                        <thead>
                            <tr class="table-danger">
                                <th scope="col">Ser No.</th>
                                <th scope="col">Product_title</th>
                                <th scope="col">Quentity</th>
                                <th scope="col">Price </th>
                                <th scope="col">Pament_status </th>
                                <th scope="col">Delevery_status </th>
                                <th scope="col">Image </th>
                                <th scope="col">Cancle Order </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($orders as $order)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $order->product_title }}</td>
                                    <td>{{ $order->quentity }}</td>
                                    <td>{{ $order->price }}</td>
                                    <td>{{ $order->payment_status }}</td>
                                    <td>{{ $order->delevery_status }}</td>
                                    <td><img width="50" src="{{ asset('storage/products/' . $order->image) }}"
                                            alt=""></td>


                                    <td>
                                        @if ($order->delevery_status == 'Processing')
                                            <a onclick="return confirm('are you sure want to cancle your order??!!')"
                                                class="btn btn-sm btn-outline-danger"
                                                href="{{ route('cancle_order', $order->id) }}">Cancle Order</a>
                                        @else
                                            <p class="text-info">You can't cancle your Product</p>
                                        @endif

                                    </td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>


    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
</body>

</html>
