@include("layout/head")

@include('menu')
<div class="container">
  <h1>Product List</h1>
<table class="table">
  <th>Product Name</th>
  <th>Price</th>
  <th>Quantity</th>
  <th>Size</th>
  <th>Code</th>
  <th>action</th>

  @foreach($products as $product)
  <tr>
    <td>{{ $product->product_name }}</td>
    <td>{{ $product->price }}</td>
    <td>{{ $product->quantity }}</td>
    <td>{{ $product->size }}</td>
    <td>{{ $product->unique_code }}</td>
    <td>
      <a href="edit/{{$product->id}}">Update</a> |
      <a href="delete/{{$product->id}}" onclick='return confirm("are you sure?")'><button class='btn btn-danger'>Delete</button></a>
    </td>
  </tr>
  @endforeach
</table>
</div>
@extends("layout.foot")
