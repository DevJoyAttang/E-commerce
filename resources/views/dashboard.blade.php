<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Additional CSS Files -->
        <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

   
      @foreach($products as $product)
      
    <div class="col-md-4">
        <div class="product-item">
          <a href="#"><img src="assets/images/jersey.jpeg" alt=""></a>
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
            <a href="{{route('checkout')}}"><button>BUY</button></a>
          </div>
        </div>
      </div>
      
      @endforeach
      
</body>
</html>