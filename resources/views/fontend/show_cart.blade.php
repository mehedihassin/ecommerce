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


        {{-- cart table is here --}}
        <div class="container mt-5">
            <div class="cart">
                <div class="cart-body">
                    <table class="table table table-bordered">
                        <thead>
                            <tr class="table table-danger">
                                <th scope="col">Ser No.</th>


                                <th scope="col">Product Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quentity</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                                $totalPrice = 0;
                            @endphp
                            @foreach ($cart as $cart)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>


                                    <td>{{ $cart->product_title }}</td>
                                    <td>{{ $cart->email }}</td>
                                    <td>{{ $cart->phone }}</td>
                                    <td>{{ $cart->address }}</td>
                                    <td>${{ $cart->price }}</td>
                                    <td>{{ $cart->quantity }}</td>
                                    <td><img width="50" src="{{ asset('storage/products/' . $cart->image) }}"
                                            alt=""></td>

                                    <td>
                                        <a class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are You Sure Want to Remove This Item?')"
                                            href="{{ route('remove_cart', $cart->id) }}">Remove</a>
                                    </td>

                                </tr>
                                @php
                                    $totalPrice = $totalPrice + $cart->price;
                                @endphp
                            @endforeach




                        </tbody>
                    </table>
                    <div>
                        <h3 class="text-primary text-center">Total Price: ${{ $totalPrice }}</h3>
                    </div>
                    <div class="text text-center mt-5">
                        <h4>Prceed to Order</h4>
                        <i class=" text-success fa-solid fa-truck"></i>
                        <a href="{{ route('cash_delevery') }}" class="btn btn-sm btn-danger">Cash On Delevery</a>
                        <i class="text-primary fa-solid fa-credit-card"></i>
                        <a href="" class="btn btn-sm btn-danger">Pay Using Card</a>
                    </div>
                </div>
            </div>
        </div>



        {{-- end cart table is here --}}
    </div>
    <!-- footer start -->
    @include('fontend.footer')
    <!-- footer end -->
    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html
                Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

        </p>
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
