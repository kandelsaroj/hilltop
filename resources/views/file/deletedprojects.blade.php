@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Recycle</h2>
            </div>
        </div>
    </div>

    <div class="pull-left ">
        <a class="btn btn-success" href="{{ route('file.index') }}" title="Back to Index"> <i class="la la-home"></i> </a>
    </div>
    <div class="">
        <div class="mx-auto pull-right">
            <div class="">
                <form action="{{ route('file.index') }}" method="GET" role="search">

                    <div class="input-group">
                        
                        <input type="text" class="form-control" name="term" placeholder="Search projects" id="term">
                        <a href="" class="">
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="submit" title="Search projects">
                                <span class="la la-search"></span>
                            </button>
                        </span>
                            
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>File Name</th>
            <th>File Link</th>
            <th>extension</th>

            <th>Date Deleted</th>
            <th>Action</th>
        </tr>
        @foreach ($files as $file)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $file->title }}</td>
                <td>{{ $file->file_link }}</td>
                <td>{{ $file->extension }}</td>
                <td>{{ date_format($file->deleted_at, 'jS M Y') }}</td>
                <td>
                    <a href="{{route('restoreDeletedProjects', $file->id) }}" title="restore project">
                        <i class="la la-refresh text-success "></i>
                        

                    </a>
                    <a href="{{ route('deletePermanently', $file->id) }}" title="Permanently delete">
                        <i class="la la-trash-o danger"></i>
                    </a>
                </td>
            </tr>
        @endforeach
    </table>




@endsection