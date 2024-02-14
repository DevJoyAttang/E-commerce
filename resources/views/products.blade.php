<!DOCTYPE html>
<html lang="en">
  <head>
    @include('css')

   
   </head>
  <body>
          @include('sidebar')

        @include('navbar')

    <div class="container-fluid page-body-wrapper">
          <div align="center">
            <form action="{{route ('productregistration') }}" method="GET">
                <button type="submit"> Add product</button>
            </form>
          </div>

 <table  id="customers">
   <tr>
       <th>Id</th>
       <th>Name</th>
       <th>Quantity</th>
       <th>Amount</th>
       <th>Status</th>
       
   </tr>

   @foreach($products as $product)
    <tr>
        <td>{{ $product->id}}</td>
        <td>{{ $product->name}}</td>
        <td>{{ $product->quantity}}</td>
        <td>{{ $product->price}}</td>
        <td>{{ $product->status}}</td>
        <td><form action="{{route('edit.product',$product->id)}}"> <button type="submit">Edit</button></form></td>
        <td><form action="{{route('delete.product',$product->id)}}"><button type="submit">Delete </a>
    </tr>
    @endforeach
  

</table>
      </div>

        

      
        @include('script')
          <!-- partial -->
       
  </body>
</html>


