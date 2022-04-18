@extends('admin.layouts.app')

 



  <!-- Content Wrapper. Contains page content -->
  
@section('content')
    <!-- Main content -->
  
   
              @section('title')
             manage files
              @endsection
             

              <a href="{{route('file.create')}}" class="btn btn-info btn-md" role="button">
          <span class="glyphicon glyphicon-plus-sign"></span>ADD File
        </a>

              <a href="{{route('getDeleteProjects')}}" class="btn btn-danger btn-sm float-right" role="button">
            recycle</i>

        </a>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     <th>S.N.</th>
                    <th>File Name</th>
                    <th>File Link</th>
                    <th>Copy this</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                  </thead>
                  <tbody>
                      @if($files)
                      @foreach($files as $file)

                  <tr>
                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$file->title}}</td>
                                    <td>{{$file->file_link}}</td>
                                    
                                    <td><img src="{{asset('uploads\files')}}/{{$file->file_link}}" alt="" style="display:block; object-fit: contain;" width="100%" height="120px"></td>
                                    <td>
                                        @if($file->status==1)
                                        <p class="btn btn-primary btn-sm">Active</p>
                                        @else
                                        <p class="btn btn-secondary btn-sm">Deactive</p>
                                        @endif
                                    </td>
                                    <td>
                    
                                    <form action="{{route('file.destroy',$file->id)}}" method="POST">
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
  



  