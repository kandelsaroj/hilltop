
@extends('admin.layouts.app')
@section('content')
@section('title')
create_slider
@endsection
<form class="row g-3 needs-validation" method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data" novalidate>
@csrf

  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">h1</label>
    <input type="text" class="form-control"  name="h1" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">h2</label>
    <input type="text" class="form-control"  name="h2" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">para</label>
    <input type="text" class="form-control"  name="para" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">btn_text1</label>
    <input type="text" class="form-control"  name="btn_text1" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">btn_text2</label>
    <input type="text" class="form-control"  name="btn_text2" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">btn_link1</label>
    <input type="text" class="form-control"  name="btn_link1" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">btn_link2</label>
    <input type="text" class="form-control"  name="btn_link2" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-md-12 mt-3">
    <label for="validationCustomUsername" class="form-label">Image</label> 
      <input type="text" class="form-control" name="img_link" required>
      
      <div class="invalid-feedback">
        Please choose a valid file.
      </div>
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





    
