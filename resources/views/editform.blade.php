<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Edit</title>
</head>
<body>

<form action="{{route ('editUpdate', $product->id)}}" method="POST">
    @csrf
    @method('put')

        <div class="input-group">
          <label>Name</label>
          <input type="text" name="name" value="{{old('name', $product->name)}}">
        </div>
        <div class="input-group">
          <label>Description</label>
          <input type="text" name="description" value= "{{old('description',$product->description)}}">
        </div>
        <div class="input-group">
          <label>Quantity</label>
          <input type="number" name="quantity" value= "{{ old('quantity',$product->quantity)}}">
        </div>
        <div class="input-group">
          <label>Price</label>
          <input type="number" name="price" value="{{old('price',$product->price)}}">
        </div>
        <div class="input-group">
          <label>status</label>
          <input type="text" name="status" value="{{old('status', $product->status)}}">
        </div>
        <div class="input-group">
          <button type="submit" class="btn">Edit</button>
        </div>
       
  </form>

</body>
</html>
