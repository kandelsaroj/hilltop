@extends('admin.layouts.app')

 



  <!-- Content Wrapper. Contains page content -->
  
@section('content')
    <!-- Main content -->
  
   
              @section('title')
             manage menu
              @endsection
             

              <a href="{{route('menu.create')}}" class="btn btn-info btn-md" role="button">
          <span class="glyphicon glyphicon-plus-sign"></span>ADD menu
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
                                       
                     <th>menu_catagory</th>
                    <th>name</th>
                    <th>des</th>
                    <th>price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                  </thead>
                  <tbody>
                      @if($menu)
                      @foreach($menu as $menus)

                  <tr>
                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$menus->category()->first()->name}}</td>
                                    <td>{{$menus->fname}}</td>
                                    <td>{{$menus->des}}</td>
                                    <td>{{$menus->price}}</td>
                                    <td>{{$menus->image}}</td>
                                    <td>
                                        @if($menus->status==1)
                                        <p class="btn btn-primary btn-sm">Active</p>
                                        @else
                                        <p class="btn btn-secondary btn-sm">Deactive</p>
                                        @endif
                                    </td>
                                    <td>
                    
                                    <form action="{{route('menu.destroy',$menus->id)}}" method="POST">
                                        @csrf
                                    @method('DELETE')
                                    <div class="col-md-3">
                                    
                                    <button class="btn btn-danger btn-sm " type="submit" >delete </button>
                                    </div>
                                    <div class="col-md-3">
                                    
                                    <button class="btn btn-info btn-sm " type="submit" >edit </button>
                                    </div>
                                    <div class="col-md-3">
                                    
                                      <a href="{{route('menu.show',$menus->id)}}" name="submit" class="btn btn-info btn-sm float-left"><i class="la la-eye"></i></a>
                                    </div>
                                    
                  
            
                </td>
                   
                    
                  </tr>
                  </form>
                  @endforeach
                 @endif
                </table>
              </div>
              
  
    
    @endsection
  



  