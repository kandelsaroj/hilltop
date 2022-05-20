@extends('admin.layouts.app')

 



  <!-- Content Wrapper. Contains page content -->
  
@section('content')
    <!-- Main content -->
  
   
              @section('title')
             manage menu_catagory
              @endsection
             

              <a href="{{route('menu_catagory.create')}}" class="btn btn-info btn-md" role="button">
          <span class="glyphicon glyphicon-plus-sign"></span>ADD menu_catagory
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
                      @if($menucats)
                      @foreach($menucats as $menucat)

                  <tr>
                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    
                                    <td>{{$menucat->name}}</td>
                                    
                                    <td>
                                        @if($menucat->status==1)
                                        <p class="btn btn-primary btn-sm">Active</p>
                                        @else
                                        <p class="btn btn-secondary btn-sm">Deactive</p>
                                        @endif
                                    </td>
                                    <td>
                    
                                    <form action="#" method="POST">
                                        @csrf
                                    @method('DELETE')
                                    <div class="col-md-6" style="display: flex; justify-content:flex-end;"> 
                                    
                                      <button class="btn btn-danger btn-sm mr-2" type="submit" >  <i class="la la-trash text-white "></i> </button>
                                    
                                      
                                      
                                      <button class="btn btn-info btn-sm " type="submit" ><i class="la la-edit text-white "></i> </button>
                                      </div>
                                    
                  
            
                </td>
                   
                    
                  </tr>
                  </form>
                  @endforeach
                 @endif
                </table>
              </div>
              
  
    
    @endsection
  



  