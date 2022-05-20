
@extends('admin.layouts.app')
@section('content')
@section('title')
create_testimonial
@endsection
<form class="row g-3 needs-validation" method="POST" action="{{route('gallery.store')}}" enctype="multipart/form-data" novalidate>
@csrf

  <div class="col-md-12 form-group">
    <label for="validationCustom01" class="form-label">Name</label>
    <input type="text" class="form-control"  name="name" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-3 form-group">
    <label for="validationCustom01" class="form-label">Image</label>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-success btn-md form-control" data-toggle="modal" data-target="#myModal">Browse Images</button>
   
    </div>
  <!-- Modal -->
  
    
  
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="#exampleModalLabel">Images</h5>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        
          </div>
          <div class="modal-body">
            <div class="row">

              <style>
                [type=radio]:checked+img{
                  outline: 2px solid blue;
                }
              </style>

              @if($files)
              @foreach($files as $file)
                <label>
                  <input type="radio" id="selectimage" name="img" value="{{$file->file_link}}" style="opacity: 0;" />
                  <img class="card-img-top" src="{{asset('uploads\files')}}/{{$file->file_link}}" alt="" style="width:100%; height:110px; object-fit:contain">
                </label>
              @endforeach
              @endif      
        </div>
     
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary" onclick="firstFunction()" data-dismiss="modal">Save changes</button>
          </div>
        </div>
      </div>
    </div>
  
  <div class="col-md-9 form-group">
    <label for="validationCustom01" class="form-label">Image Link</label>
    <input type="text" id="imagebox" class="form-control" name="image" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>




  <div class="col-md-12 form-group">
    <label for="validationCustom01" class="form-label">post</label>
    <input type="text" class="form-control"  name="post" require>
    
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-12 mt-3 form-group">
    <button class="btn btn-primary " type="submit" style="margin-bottom: 50px">Submit</button>
  </div>  

  

</form>
<br>

@endsection

<script type="text/javascript">

	// copy link of an image
		function firstFunction() {
			document.getElementById('imagebox').value = document.querySelector('input[name=img]:checked').value;
		}
	
	// Opening Model again when next paginate is clicked in filemanager
	  // var myParam = location.search.split('page=')[1]
		// if(myParam)
		// {
		// 	window.addEventListener("load", function() {
		// 	$("#exampleModal").modal("show");
		// 	});
		// }
	</script>





    
