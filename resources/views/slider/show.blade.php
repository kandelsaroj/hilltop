
@extends('admin.layouts.app')
@section('content')
@section('title')
create_slider
@endsection
<div class="table-responsive ">
 
  
  <a name="" id="" class="btn btn-primary btn-lg" href="{{route('slider.index')}}" role="button"><i class="fa fa-home"></i></a>
  <table class="table table-hover ">
    <thead>
      <tr>
        <th>Field Title</th>
        <th>Value</th>
      </tr>
    </thead>
    <tbody>
      
       
        
        
        <tr>
        <th scope="row"><code>h1</code></th>
        <td>{{$sliders->h1}}</td>
      </tr>
      <tr>
        <th scope="row"><code>h2</code></th>
        <td>{{$sliders->h2}}</td>
      </tr>
      <tr>
        <th scope="row"><code>para</code></th>
        <td>{{$sliders->para}}</td>
      </tr>
      
      <tr>
          <th scope="row"><code>btn_text1</code></th>
          <td>{{$sliders->btn_text1}}</td>
      </tr>
      <tr>
          <th scope="row"><code>btn_text2</code></th>
          <td>{{$sliders->btn_text2}}</td>
      </tr>
      <tr>
          <th scope="row"><code>btn_link1</code></th>
          <td>{{$sliders->btn_link1}}</td>
      </tr>
      <tr>
          <th scope="row"><code>btn_link2</code></th>
          <td>{{$sliders->btn_link2}}</td>
      </tr>
      <tr>
          <th scope="row"><code>img_link</code></th>
          <td>{{$sliders->img_link}}</td>
      </tr>
      <tr>
          <th scope="row"><code>Status</code></th>
        <td>@if($sliders->status==1) Active @else Deactive @endif </td>
      </tr>
      <tr>
          <th scope="row"><code>File Created At</code></th>
        <td>{{$sliders->created_at}} </td>
       
        
      </tr>
     
    </tbody>
  </table>
</div>
@endsection





    

