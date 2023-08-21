@extends('backend.master')
@section('page_content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Add Category</h2>

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
        <form action="{{route('order_update',$product->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="{{$product->status}}" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{$product->address}}" required>
            </div>
            <div class="form-group">
                <label for="user_id">Mobile Number</label>
                <input type="number" class="form-control" id="user_id" name="mobile_no" value="{{$product->mobile_no}}" required>
            </div>
            <div class="form-group">
                <label for="user_id">User ID</label>
                <input type="number" class="form-control" id="user_id" name="user_id" value="{{$product->user_id}}" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>


@endsection
