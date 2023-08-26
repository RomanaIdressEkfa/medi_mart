
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
    <h2>Slider Details Form</h2>


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
    <form action="{{route('slider_store')}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="slider_title" class="form-label">Slider Title</label>
        <input type="text" class="form-control" id="slider_title" name="slider_title" required>
      </div>
      <div class="mb-3">
        <label for="slider_sub_title" class="form-label">Slider  Sub Title</label>
        <input type="text" class="form-control" id="slider_sub_title" name="slider_sub_title" required>
      </div>
      <div class="mb-3">
        <label for="SliderLink" class="form-label">Slider Link</label>
        <input type="url" class="form-control" id="SliderLink" name="Slider_link" required>
      </div>
 
      <div class="mb-3">
        <label for="SliderImage" class="form-label">Slider Image</label>
        <input type="file" class="form-control" id="SliderImage" name="Slider_image" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Include Bootstrap JS (Optional if you're not using any Bootstrap JS components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>


@endsection
