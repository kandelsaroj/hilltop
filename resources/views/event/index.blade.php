@extends('admin.layouts.app')

 



  <!-- Content Wrapper. Contains page content -->
  
@section('content')
    <!-- Main content -->
  
   
              @section('title')
             manage event
              @endsection
             

              <a href="{{route('event.create')}}" class="btn btn-info btn-md" role="button">
          <span class="glyphicon glyphicon-plus-sign"></span>ADD event
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
                    <th>h1</th>
                    <th>Price</th>
                    <th>Content</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                  </thead>
                  <tbody>
                      @if($events)
                      @foreach($events as $event)

                  <tr>
                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$event->h1}}</td>
                                    <td>{{$event->price}}</td>
                                    <td>{{$event->content}}</td>
                                    <td><img src="{{asset('uploads\files')}}/{{$event->image}}" alt="" style="display:block; object-fit: contain;" width="100%" height="120px"></td>
                                    
                                    <td>
                                        @if($event->status==1)
                                        <p class="btn btn-primary btn-sm">Active</p>
                                        @else
                                        <p class="btn btn-secondary btn-sm">Deactive</p>
                                        @endif
                                    </td>
                                <td>
                    
                                    <form action="{{route('event.destroy',$event->id)}}" method="POST">
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
  



  