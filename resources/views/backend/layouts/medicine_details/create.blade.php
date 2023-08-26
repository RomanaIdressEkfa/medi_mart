
@extends('backend.master')
@section('page_content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medicine Form</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

  <div class="container mt-5">
    <h2>Medicine Form</h2>


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
    <form action="{{route('medicine_details_store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="category">
                <option selected>Category_Name</option>

                @foreach ($categories as $category )
                <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach

              </select>
        </div>

      <div class="mb-3">
        <label for="vendorName" class="form-label">Medicine Name</label>
        <input type="text" class="form-control" id="medicineName" name="medicine_name" required>
      </div>
      <div class="mb-3">
        <label for="storeImage" class="form-label">Medicine Image</label>
        <input type="file" class="form-control" id="medicineImage" name="medicine_image" required>
      </div>
      <div class="mb-3">
        <label for="location" class="form-label">Price</label>
        <input type="text" class="form-control" id="price" name="price" required>
      </div>
      <div class="mb-3">
        <label for="location" class="form-label">Medicine Description</label>
        <input type="text" class="form-control" id="medicine_details" name="medicine_details" required>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Include Bootstrap JS (Optional if you're not using any Bootstrap JS components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>


@endsection
