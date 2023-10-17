@extends('admin.layouts.layout')

@section('content')
    <h1>{{$title}}</h1>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create Post</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">
                        <a href="{{route('post.create')}}" type="submit" class="btn btn-success">
                            Create
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-header">
            <h3 class="card-title">Responsive Hover Table</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Position</th>


                </tr>
                </thead>
                @foreach($posts as $post)
                <tbody>
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->position}}</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="{{route('post.edit',$post)}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <form action="{{route('post.destroy', $post)}}" method="post">
                            @csrf
                            @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </button>
                        </form>
                    </td>

                    </td>
                </tr>

                </tbody>
                @endforeach
            </table>
        </div>
        <!-- /.card-body -->
    </div>

@endsection
