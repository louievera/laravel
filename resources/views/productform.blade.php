@include("layout/head")
@include('menu')
  <div class="container">
    <h1>Product form</h1>
    <form action="{{isset($product) ? 'update/'.$product->id : 'insert' }}" method="post">
      <label for="product">Product Name</label>
      <input type='text' id="product" name="product_name" class="form-control" value='{{isset($product) ? $product->product_name : "" }}'>

      <label for="price">Price</label>
      <input type="number" id="price" name="price" class="form-control" value='{{isset($product) ? $product->price : "" }}'>

      <label for="quantity">Quantity</label>
      <input type="number" id="quantity" name="quantity" class="form-control" value='{{isset($product) ? $product->quantity : "" }}'>

      <label for="size">Size</label>
      <input type="number" id="size" name="size" class="form-control" value='{{isset($product) ? $product->size : "" }}'>

      <label for="code">Code</label>
      <input type="number" id="code" name="code" class="form-control" value='{{isset($product) ? $product->unique_code : "" }}'>

      <input type="hidden" name="_token" value="{{csrf_token()}}">

      <input type="submit" class="btn btn-primary pull-right" value="{{isset($product) ? 'Update Product' : 'Add Product'}}">
    </form>
  </div>
@extends('layout.foot')
