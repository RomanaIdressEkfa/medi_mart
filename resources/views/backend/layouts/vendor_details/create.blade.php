
@extends('backend.master')
@section('page_content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vendor Details Form</title>
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

  <div class="container mt-5">
    <h2>Vendor Details Form</h2>


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
    <form action="{{route('vendor_details_store')}}" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="mb-3">
        <label for="vendorName" class="form-label">Vendor Name</label>
        <input type="text" class="form-control" id="vendorName" name="vendor_name" required>
      </div>
      <div class="mb-3">
        <label for="storeName" class="form-label">Store Name</label>
        <input type="text" class="form-control" id="storeName" name="store_name" required>
      </div>
      <div class="mb-3">
        <label for="storeLink" class="form-label">Store Link</label>
        <input type="url" class="form-control" id="storeLink" name="store_link" required>
      </div>
      <div class="mb-3">
        <label for="location" class="form-label">Location</label>
        <input type="text" class="form-control" id="location" name="location" required>
      </div>
      <div class="mb-3">
        <label for="storeImage" class="form-label">Store Image</label>
        <input type="file" class="form-control" id="storeImage" name="store_image" required>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <!-- Include Bootstrap JS (Optional if you're not using any Bootstrap JS components) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>


@endsection
