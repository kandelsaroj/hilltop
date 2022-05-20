@extends('admin.layouts.app')
@section('content')
@section('title')
create_file
@endsection
<form class="row g-3 needs-validation" method="POST" action="{{route('event.update',$event->id)}}" enctype="multipart/form-data" novalidate>
@csrf
@method('PUT')
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">h1</label>
    <input type="text" class="form-control" name="h1" value="{{$sevent->h1}}" required>
    
  </div>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">price</label>
    <input type="text" class="form-control" name="price" value="{{$event->price}}"required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-md-12 mt-3">
    <label for="validationCustomUsername" class="form-label">content</label> 
      <input type="text" class="form-control"  name="content" value="{{$event->content}}"required>
      <div class="invalid-feedback">
        Please choose a valid file.
      </div>
    </div>
  </div>
  <div class="col-md-12 mt-3">
    <label for="validationCustomUsername" class="form-label">image</label> 
      <input type="text" class="form-control"  name="image" value="{{$event->image}}"required>
      <div class="invalid-feedback">
        Please choose a valid file.
      </div>
    </div>
  </div>

  
  <div class="col-12 mt-3">
    <button class="btn btn-primary" type="submit">Submit</button>
  </div>
</form>
@endsection