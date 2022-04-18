@extends('admin.layouts.app')

 



  <!-- Content Wrapper. Contains page content -->
  
@section('content')
    <!-- Main content -->
  
   
              @section('title')
             manage ourspecial_catagory
              @endsection
             

              <a href="{{route('ourspecial_catagory.create')}}" class="btn btn-info btn-md" role="button">
          <span class="glyphicon glyphicon-plus-sign"></span>ADD ourspecial_catagory
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
                    <th>name</th>
                    <th>status</th>
                    <th>Action</th>
                </tr>
                  </thead>
                  <tbody>
                      @if($specialcats)
                      @foreach($specialcats as $specialcat)

                  <tr>
                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    
                                    <td>{{$specialcat->name}}</td>
                                    
                                    <td>
                                        @if($specialcat->status==1)
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
  



  