@extends('backend.master')
@section('page_content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Create Page</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Cart Create Page</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::has('msg'))
<p class="alert alert-success">{{Session::get('msg')}}</p>
@endif
        <form action="{{route('cart_update',$product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="status">Quantity</label>
                <input type="text" class="form-control" id="quantity" name="quantity" value="{{$product->quantity}}" required>
            </div>
            <div class="form-group">
                <label for="address">Unit_Price</label>
                <input type="text" class="form-control" id="unit_price" name="unit_price" value="{{$product->unit_price}}" required>
            </div>
            <div class="form-group">
                <label for="mobile_no">Total_Price</label>
                <input type="number" class="form-control" id="total_price" name="total_price" value="{{$product->total_price}}" required>
            </div>
            <div class="form-group">
                <label for="user_id">User ID</label>
                <input type="number" class="form-control" id="user_id" name="user_id" value="{{$product->user_id}}" required>
            </div>
            <div class="form-group">
                <label for="user_id">Product ID</label>
                <input type="number" class="form-control" id="product_id" name="product_id" value="{{$product->product_id}}" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>


@endsection
