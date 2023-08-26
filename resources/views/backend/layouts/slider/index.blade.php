
@extends('backend.master')
@section('page_content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slider Details</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h2>Slider Details</h2>
    <table class="table">
      <thead>
        <tr>
            <th>ID</th>
          <th>Slider Name</th>
          <th>Slider Name</th>
          <th>Slider Image</th>
          <th>Slider Link</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @php
            $i=1
        @endphp
        @foreach ($sliders as $key=>$slider)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$slider->title}}</td>
            <td>{{$slider->subtitle}}</td>
            <td>{{$slider->image}}</td>
            <td>{{$slider->link}}</td>
            <td>
                <img style="width:150px;" src="{{asset('images/sliders/'.$slider->image)}}" alt="">
            </td>

            <td>
                <a href="{{route('slider_details_edit',$slider->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('slider_details_delete',$slider->id)}}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach


        <!-- Add more rows as needed -->
    </tbody>
    </table>
  </div>
  <a href="{{route('slider_details_create')}}" class="btn btn-success mt-5 mb-5">Add Product!</a>
  <!-- Include Bootstrap JS (Optional if you're not using any Bootstrap JS components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>



@endsection
