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
                            </div>
                            <div class="img-box">
                                <img src="{{ asset('storage/products/' . $product->image) }}" alt="">
                            </div>
                            <div class="detail-box">

                                <p class="text-primary ">
                                    {{ $product->name }}
                                    </h6>
                                <p class="text-success">Discount: ${{ $product->discount }}</p>
                                <p class="text-danger">
                                    ${{ $product->price }}
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
