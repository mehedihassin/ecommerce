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



        <div class="col-sm-6 col-md-4 col-lg-4" style="margin: auto; width:50%; padding:30px">
            <div class="box">
                <div class="option_container">

                </div>
                <div class="img-box rounded">
                    <img width="50%" src="{{ asset('storage/products/' . $product->image) }}" alt="">
                </div>
                <div class="detail-box">

                    <h5 class="bold text-primary mt-5">
                        <i class="fa-solid fa-feather"></i>
                        Product Name: {{ $product->name }}
                    </h5>
                    <h6 class="text-danger">
                        <i class="fa-solid fa-hand-holding-dollar"></i>
                        Price: <del> {{ $product->price - 20 }}</del> {{ $product->price }}
                    </h6>
                    <p class="text-dark">Product Detail:<i class="fa-solid fa-asterisk"></i>
                        {{ $product->description }}<i class="fa-solid fa-asterisk"></i></p>




                </div>
                <i class="fa-solid fa-star text-danger"></i>
                <i class="fa-solid fa-star text-danger"></i>
                <i class="fa-solid fa-star text-danger"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <i class="fa-solid fa-star-half-stroke"></i>


            </div>
            <form action="{{ route('add_to_cart', $product->id) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-4" style="width: 100px">
                        <input type="number" name="quentity" value="1" min="1">
                    </div>
                    <div class="col-md-4">
                        <input type="submit" value="Add To Cart">
                    </div>
                </div>
            </form>

        </div>

        <!-- footer start -->
        @include('fontend.footer')
        <!-- footer end -->
        <div class="cpy_">
            <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

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
