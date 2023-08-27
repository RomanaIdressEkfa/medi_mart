

@extends('backend.master')
@section('page_content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slider Details Form</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

  <div class="container mt-5">
    <h2>Slider Details Edit Form</h2>


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
    <form action="{{route('slider_update',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Slider Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$product->title}}" required>
      </div>
      <div class="mb-3">
        <label for="subTitle" class="form-label">Slider SubTitle</label>
        <input type="text" class="form-control" id="subTitle" name="subTitle" value="{{$product->subTitle}}" required>
      </div>
      <div class="mb-3">
        <label for="Link" class="form-label">Slider Link</label>
        <input type="url" class="form-control" id="Link" name="link" value="{{$product->link}}" required>
      </div>
      <div class="mb-3">
        <label for="storeImage" class="form-label">Slider Image</label>
        <img style="width: 150px;" src="{{asset('images/products/'.$product->image)}}" alt="">
        <input type="file" class="form-control" id="image" name="image" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Include Bootstrap JS (Optional if you're not using any Bootstrap JS components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>


@endsection
