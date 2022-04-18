
@extends('admin.layouts.app')
@section('content')
@section('title')
create_file
@endsection
<form class="row g-3 needs-validation" method="POST" action="{{route('about.store')}}" enctype="multipart/form-data" novalidate>
@csrf

  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">content</label>
    <input type="text" class="form-control"  name="comtent" require>
    
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

  <textarea type="text" class="form-control" id="editor"  name="comtent" required> </textarea>

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