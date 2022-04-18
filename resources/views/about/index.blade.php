@extends('admin.layouts.app')

 



  <!-- Content Wrapper. Contains page content -->
  
@section('content')
    <!-- Main content -->
  
   
              @section('title')
             manage files
              @endsection
             

              <a href="{{route('about.create')}}" class="btn btn-info btn-md" role="button">
          <span class="glyphicon glyphicon-plus-sign"></span>ADD about
        </a>

              {{-- <a href="{{route('getDeleteProjects')}}" class="btn btn-danger btn-sm float-right" role="button">
            recycle</i> --}}

        </a>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     <th>S.N.</th>
                    
                    <th>Content</th>
                    <th>image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                  </thead>
                  <tbody>
                      @if($abouts)
                      @foreach($abouts as $about)

                  <tr>
                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$about->comtent}}</td>
                                  
                                    
                                    <td><img src="{{asset('uploads\files')}}/{{$about->img_link}}" alt="" style="display:block; object-fit: contain;" width="100%" height="120px"></td>
                                    <td>
                                        @if($about->status==1)
                                        <p class="btn btn-primary btn-sm">Active</p>
                                        @else
                                        <p class="btn btn-secondary btn-sm">Deactive</p>
                                        @endif
                                    </td>
                                    <td>
                    
                                    <form action="{{route('about.destroy',$about->id)}}" method="POST">
                                        @csrf
                                    @method('DELETE')
                                    <div class="col-md-3">
                                    
                                    <button class="btn btn-danger btn-sm " type="submit" >delete </button>
                                    </div>
                                    <div class="col-md-3">
                                    
                                    <button class="btn btn-info btn-sm " type="submit" >edit </button>
                                    </div>
                                    
                  
            
                </td>
                   
                    
                  </tr>
                  </form>
                  @endforeach
                 @endif
                </table>
              </div>
              
  
    
    @endsection
  



  