<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
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
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->


        @include('fontend.navber')


        <!-- end header section -->
        <!-- slider section -->
        @include('fontend.slide')
        <!-- end slider section -->
    </div>
    <!-- why section -->
    @include('fontend.whyShop')
    <!-- end why section -->

    <!-- arrival section -->
    <section class="arrival_section">
        <div class="container">
            <div class="box">
                <div class="arrival_bg_box">
                    <img src="images/arrival-bg.png" alt="">
                </div>
                <div class="row">
                    <div class="col-md-6 ml-auto">
                        <div class="heading_container remove_line_bt">
                            <h2>
                                #NewArrivals
                            </h2>
                        </div>
                        <p style="margin-top: 20px;margin-bottom: 30px;">
                            Vitae fugiat laboriosam officia perferendis provident aliquid voluptatibus dolorem, fugit
                            ullam sit earum id eaque nisi hic? Tenetur commodi, nisi rem vel, ea eaque ab ipsa, autem
                            similique ex unde!
                        </p>
                        <a href="">
                            Shop Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end arrival section -->

    <!-- product section -->
    @yield('container')
    <!-- end product section -->


    {{-- start comment section --}}




    {{-- end comment --}}












    <!-- subscribe section -->
    <section class="subscribe_section">
        <div class="container-fuild">
            <div class="box">
                <div class="row">
                    <div class="col-md-6 offset-md-3">
                        <div class="subscribe_form ">
                            <div class="heading_container heading_center">
                                <h3>Subscribe To Get Discount Offers</h3>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <form action="">
                                <input type="email" placeholder="Enter your email">
                                <button>
                                    subscribe
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end subscribe section -->
    <!-- client section -->
    <section class="client_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Customer's Testimonial
                </h2>
            </div>
            <div id="carouselExample3Controls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="images/client.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Anna Trevor
                                </h5>
                                <h6>
                                    Customer
                                </h6>
                                <p>
                                    Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde
                                    quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum
                                    ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="images/client.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Anna Trevor
                                </h5>
                                <h6>
                                    Customer
                                </h6>
                                <p>
                                    Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde
                                    quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum
                                    ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="box col-lg-10 mx-auto">
                            <div class="img_container">
                                <div class="img-box">
                                    <div class="img_box-inner">
                                        <img src="images/client.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Anna Trevor
                                </h5>
                                <h6>
                                    Customer
                                </h6>
                                <p>
                                    Dignissimos reprehenderit repellendus nobis error quibusdam? Atque animi sint unde
                                    quis reprehenderit, et, perspiciatis, debitis totam est deserunt eius officiis ipsum
                                    ducimus ad labore modi voluptatibus accusantium sapiente nam! Quaerat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel_btn_box">
                    <a class="carousel-control-prev" href="#carouselExample3Controls" role="button" data-slide="prev">
                        <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample3Controls" role="button" data-slide="next">
                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end client section -->






    <!-- footer start -->
    @include('fontend.footer')
    <!-- footer end -->
    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

        </p>
    </div>

    <script>
        function replay(caller) {
            $('#replayDiv').insertAfter($(caller));
            $('#replayDiv').show();
        }
    </script>




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
