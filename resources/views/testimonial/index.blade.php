@extends('admin.layouts.app')

 



  <!-- Content Wrapper. Contains page content -->
  
@section('content')
    <!-- Main content -->
  
   
              @section('title')
             manage testimonial
              @endsection
             

              <a href="{{route('testimonial.create')}}" class="btn btn-info btn-md" role="button">
          <span class="glyphicon glyphicon-plus-sign"></span>Add testimonial
        </a>

    
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     <th>S.N.</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Ocupation</th>
                    <th>Content</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                  </thead>
                  <tbody>
                      @if($testimonials)
                      @foreach($testimonials as $testimonial)

                  <tr>
                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$testimonial->name}}</td>
                                    <td><img src="{{asset('uploads\files')}}/{{$testimonial->image}}" alt="" style="display:block; object-fit: contain;" width="100%" height="120px"></td>
                                    <td>{{$testimonial->ocupation}}</td>
                                    <td>{{$testimonial->content}}</td>
                                    <td>
                                        @if($testimonial->status==1)
                                        <p class="btn btn-success btn-sm">Active</p>
                                        @else
                                        <p class="btn btn-danger btn-sm">Deactive</p>
                                        @endif
                                    </td>
                                    <td>
                    
                                    <form action="{{route('testimonial.destroy',$testimonial->id)}}" method="POST">
                                        @csrf
                                    @method('DELETE')
                                    <div class="container" style="display:flex;justify-content: flex-end">
                                  
                                    
                                    <button class="btn btn-danger btn-md" type="submit" > <i class="fa fa-trash" aria-hidden="true"></i> </button>
                                    
                                    <button class="btn btn-info btn-md  ml-1" type="submit" ><i class="fa fa-edit"></i> </button>
                                     
                                    </div>
                                    
                  
            
                </td>
                   
                    
                  </tr>
                  </form>
                  @endforeach
                 @endif
                </table>
              </div>
              
  
    
    @endsection
  



  