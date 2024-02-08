<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productsform</title>
</head>
<body>

<form action="{{route ('product.create') }}" method="POST">
    @csrf
        <div class="input-group">
          <label>Name</label>
          <input type="text" name="name">
        </div>
        <div class="input-group">
          <label>Description</label>
          <input type="text" name="description">
        </div>
        <div class="input-group">
          <label>Quantity</label>
          <input type="number" name="quantity">
        </div>
        <div class="input-group">
          <label>Price</label>
          <input type="number" name="price">
        </div>
        <div class="input-group">
          <label>status</label>
          <input type="text" name="status">
        </div>
        <div class="input-group">
          <button type="submit" class="btn">submit</button>
        </div>
       
  </form>

</body>
</html>