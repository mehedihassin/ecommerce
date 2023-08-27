<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="cart">
            <div class="cart-title">
                <h2 class="text-center text-success">Customer Detailes</h2>
                <div class="card-body">
                    Castomer Name: <p class="text-center text-success"> {{ $orders->name }}</p>
                    Customer Email: <p> {{ $orders->email }}</p>
                    Customer Address: <p> {{ $orders->address }}</p>
                    Customer Phone: <p>{{ $orders->phone }}</p>
                    Customer Product-Title: <p> {{ $orders->product_title }}</p>
                    Customer Price: <p> {{ $orders->price }}</p>
                    Customer Quentity: <p> {{ $orders->quentity }}</p>
                    Customer Delevery-Status: <p> {{ $orders->delevery_status }}</p>
                    Product Image : <p>
                        <img width="50%" src="{{ public_path('storage/products/' . $orders->image) }}"
                            alt="">
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
