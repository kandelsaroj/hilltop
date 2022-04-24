
@extends('admin.layouts.app')
@section('content')
@section('title')
create_testimonial
@endsection
<form class="row g-3 needs-validation" method="POST" action="{{route('testimonial.store')}}" enctype="multipart/form-data" novalidate>
@csrf

  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">Name</label>
    <input type="text" class="form-control"  name="name" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">Image</label>
    <input type="text" class="form-control"  name="image" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">occupation</label>
    <input type="text" class="form-control"  name="ocupation" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">content</label>
    <input type="text" class="form-control"  name="content" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-12 mt-3">
    <button class="btn btn-primary " type="submit" style="margin-bottom: 50px">Submit</button>
  </div>

  

</form>
<br>
<br>
<br>
@endsection





    
