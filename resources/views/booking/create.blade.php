
@extends('admin.layouts.app')
@section('content')
@section('title')
create_menu
@endsection
<form class="row g-3 needs-validation" method="POST" action="{{route('booking.store')}}" enctype="multipart/form-data" novalidate>
@csrf

  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">menu_catagory</label>
    <select class="form-control" name="menu_cat_id" id="">
    </select>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">name</label>
    <input type="text" class="form-control"  name="fname" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">des</label>
    <input type="text" class="form-control"  name="des" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">price</label>
    <input type="text" class="form-control"  name="price" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>

  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">image</label>
    <input type="text" class="form-control" name="image" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-1">
    <label for="validationCustom01" class="form-label">special</label>
    <input type="checkbox" name="special" value="1">
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-12 mt-3">
    <button class="btn btn-primary " type="submit" style="margin-bottom: 50px">Submit</button>
  </div>
  <textarea ype="text" class="form-control" id="editor"  name="content" required> </textarea>

  

</form>
<br>
<br>
<br>
@endsection
@section('ck-editor')
<script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
<script>
  ClassicEditor
      .create( document.querySelector( '#editor' ) )
      .catch( error => {
          console.error( error );
      } );
</script>


    
@endsection





    
