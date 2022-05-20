@extends('admin.layouts.app')

 



  <!-- Content Wrapper. Contains page content -->
  
@section('content')
    <!-- Main content -->
  
   
              @section('title')
             manage why_choose_us
              @endsection
             

              <a href="{{route('why_choose_us.create')}}" class="btn btn-info btn-md" role="button">
          <span class="glyphicon glyphicon-plus-sign">ADD why_choose_us</span>
        </a>

             <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     <th>S.N.</th>                   
                    <th>h1</th>
                    <th>content</th>
                    <th>image</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                  </thead>
                  <tbody>
                      @if($why_choose_uss)
                      @foreach($why_choose_uss as $why_choose_us)

                  <tr>
                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$why_choose_us->h1}}</td>
                                    <td>{{$why_choose_us->content}}</td>
                                    <td><img src="{{asset('uploads\files')}}/{{$why_choose_us->img}}" alt="" style="display:block; object-fit: contain;" width="80%" ></td>
                                    <
                                    <td>
                                        @if($why_choose_us->status==1)
                                        <p class="btn btn-primary btn-sm">Active</p>
                                        @else
                                        <p class="btn btn-secondary btn-sm">Deactive</p>
                                        @endif
                                    </td>
                                    <td>
                    
                                    <form action="{{route('why_choose_us.destroy',$why_choose_us->id)}}" method="POST">
                                        @csrf
                                    @method('DELETE')
                                    <div class="row-md-3" style="display: flex; justify-content:flex-end;"> 
                                    
                                      <button class="btn btn-danger btn-sm mr-2" type="submit" >  <i class="la la-trash text-white "></i> </button>
                                    
                                      
                                      
                                      <button class="btn btn-info btn-sm " type="submit" herf="" ><i class="la la-edit text-white "></i> </button>
                                      </div>
                                      
                                    
                                      {{-- <a href="{{route('why_choose_us.show',$why_choose_us->id)}}" name="submit" class="btn btn-info btn-sm float-left"><i class="la la-eye"></i></a>
                                    </div>
                                     --}}
                  
            
                </td>
                   
                    
                  </tr>
                  </form>
                  @endforeach
                 @endif
                </table>
              </div>
              
  
    
    @endsection
  



  