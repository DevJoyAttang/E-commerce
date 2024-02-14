<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">

    <title>checkout</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
</head>
<body>

        <h1>checkout</h1>

      @foreach($products as $product)
      <div class="col-md-4">
        <div class="product-item">
          <a href="#"><img src="assets/images/product_06.jpg" alt=""></a>
          <div class="down-content">
            <a href="#"><h4>{{$product->name}}</h4></a>
            <h6>{{$product->price}}</h6>
            <p>{{$product->description}}</p>
            <p>{{$product->quantity}}</p>
            <ul class="stars">
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
              <li><i class="fa fa-star"></i></li>
            </ul>
            <!-- <a href="{{route ('') }}"><button>BUY</button></a> -->
          </div>
        </div>
      </div>
  
</body>
</html>