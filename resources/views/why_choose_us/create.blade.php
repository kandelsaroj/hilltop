
@extends('admin.layouts.app')
@section('content')
@section('title')
create_why_choose_us
@endsection
<form class="row g-3 needs-validation" method="POST" action="{{route('why_choose_us.store')}}" enctype="multipart/form-data" novalidate>
@csrf

  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">h1</label>
    <input type="text" class="form-control"  name="h1" require>
    
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
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">image</label>
    <input type="text" class="form-control"  name="img" require>
    
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





    
