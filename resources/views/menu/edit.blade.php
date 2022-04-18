@extends('admin.layouts.app')
@section('content')
@section('title')
Edit_menus
@endsection
<form class="row g-3 needs-validation" method="POST" action="{{route('menu.update',$menu->id)}}" enctype="multipart/form-data" novalidate>
@csrf
@method('PUT')
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">fname</label>
    <input type="text" class="form-control" name="fname" value="{{$menus->fname}}" required>
    
  </div>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">des</label>
    <input type="text" class="form-control" name="des" value="{{$menus->des}}"required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-md-12 mt-3">
    <label for="validationCustomUsername" class="form-label">price</label> 
      <input type="text" class="form-control"  name="price" value="{{$menus->price}}"required>
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