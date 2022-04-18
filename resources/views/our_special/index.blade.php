@extends('admin.layouts.app')

 



  <!-- Content Wrapper. Contains page content -->
  
@section('content')
    <!-- Main content -->
  
   
              @section('title')
             manage ourspecial
              @endsection
             

              <a href="{{route('our_special.create')}}" class="btn btn-info btn-md" role="button">
          <span class="glyphicon glyphicon-plus-sign"></span>ADD ourspecial
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
                                       
                     <th>our_special_catagory</th>
                   
                    <th>content</th>
                    <th>image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                  </thead>
                  <tbody>
                      @if($ourspecials)
                      @foreach($ourspecials as $ourspecial)

                  <tr>
                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>  {{$ourspecial->category()->first()->name}} </td>
                                    {{-- {{$ourspecial->category()->first()->name}} --}}
                                    <td>{{$ourspecial->content}}</td>
                                  
                                    <td>{{$ourspecial->image}}</td>
                                    <td>
                                        @if($ourspecial->status==1)
                                        <p class="btn btn-primary btn-sm">Active</p>
                                        @else
                                        <p class="btn btn-secondary btn-sm">Deactive</p>
                                        @endif
                                    </td>
                                    <td>
                    
                                    <form action="#" method="POST">
                                        @csrf
                                    @method('DELETE')
                                    <div class="col-md-3">
                                    
                                    <button class="btn btn-danger btn-sm " type="submit" >delete </button>
                                    </div>
                                    <div class="col-md-3">
                                    
                                    <button class="btn btn-info btn-sm " type="submit" >edit </button>
                                    </div>
                                    <div class="col-md-3">
                                    
                                      <a href="#" name="submit" class="btn btn-info btn-sm float-left"><i class="la la-eye"></i></a>
                                    </div>
                                    
                  
            
                </td>
                   
                    
                  </tr>
                  </form>
                  @endforeach
                 @endif
                </table>
              </div>
              
  
    
    @endsection
  



  