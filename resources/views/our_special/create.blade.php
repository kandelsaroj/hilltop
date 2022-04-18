
@extends('admin.layouts.app')
@section('content')
@section('title')
create_menu
@endsection
<form class="row g-3 needs-validation" method="POST" action="{{route('our_special.store')}}" enctype="multipart/form-data" novalidate>
@csrf

  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">Our_special_catagory</label>
    <select class="form-control" name="ospecial_cat_id" id="">
        @foreach ($catagories as $catagory) 
        <option value="{{$catagory->id}}"> {{$catagory->name}}</option>
        @endforeach
    </select>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
   
  <div class="col-md-12">
    <label for="validationCustom01" class="form-label">image</label>
    <input type="text" class="form-control"  name="image" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  


 
  <div class="col-12 mt-3">
    <button class="btn btn-primary " type="submit" style="margin-bottom: 50px">Submit</button>
  </div>

  <textarea type="text" class="form-control" id="editor"  name="content" required> </textarea>

  

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





    
