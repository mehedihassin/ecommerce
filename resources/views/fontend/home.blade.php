@extends('fontend.master')

@section('container')
    <section class="product_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    Our <span>products</span>
                </h2>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="box">
                            <div class="option_container">
                                <div class="options">
                                    <a href="{{ route('product_detail', $product->id) }}" class="option1">
                                        Product Details
                                    </a>
                                    <a href="" class="option2">
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                            <div class="img-box">
                                <img src="{{ asset('storage/products/' . $product->image) }}" alt="">
                            </div>
                            <div class="detail-box">

                                <p>
                                    {{ $product->name }}
                                </p>
                                <p>
                                    <del>{{ $product->price - 20 }}</del> {{ $product->price }}
                                </p>

                            </div>
                        </div>
                    </div>
                @endforeach
                <span style="padding-top: 20px">
                    {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}


                </span>

            </div>
        </div>

        </div>
        </div>
    </section>
@endsection
