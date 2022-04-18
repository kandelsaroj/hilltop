@extends('admin.layouts.app')

 



  <!-- Content Wrapper. Contains page content -->
  
@section('content')
    <!-- Main content -->
  
   
              @section('title')
             manage slider
              @endsection
             

              <a href="{{route('slider.create')}}" class="btn btn-info btn-md" role="button">
          <span class="glyphicon glyphicon-plus-sign"></span>ADD slider
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
                    <th>h2</th>
                    <th>para</th>
                   
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                  </thead>
                  <tbody>
                      @if($sliders)
                      @foreach($sliders as $slider)

                  <tr>
                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$slider->h1}}</td>
                                    <td>{{$slider->h2}}</td>
                                    <td>{{$slider->para}}</td>
                                    <td>
                                        @if($slider->status==1)
                                        <p class="btn btn-primary btn-sm">Active</p>
                                        @else
                                        <p class="btn btn-secondary btn-sm">Deactive</p>
                                        @endif
                                    </td>
                                    <td>
                    
                                    <form action="{{route('slider.destroy',$slider->id)}}" method="POST">
                                        @csrf
                                    @method('DELETE')
                                    <div class="col-md-3">
                                    
                                    <button class="btn btn-danger btn-sm " type="submit" >delete </button>
                                    </div>
                                    <div class="col-md-3">
                                    
                                    <button class="btn btn-info btn-sm " type="submit" >edit </button>
                                    </div>
                                    <div class="col-md-3">
                                    
                                      <a href="{{route('slider.show',$slider->id)}}" name="submit" class="btn btn-info btn-sm float-left"><i class="la la-eye"></i></a>
                                    </div>
                                    
                  
            
                </td>
                   
                    
                  </tr>
                  </form>
                  @endforeach
                 @endif
                </table>
              </div>
              
  
    
    @endsection
  



  