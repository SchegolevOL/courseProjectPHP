@extends('admin.layouts.layout')

@section('content')
    <h1>{{$title}}</h1>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create User</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <div class="input-group-append">
                        <a href="{{route('user.create')}}" type="submit" class="btn btn-success">
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
                    <th>Name</th>
                    <th>Age</th>
                    <th>Position</th>


                </tr>
                </thead>
                @foreach($teams as $team)
                <tbody>
                <tr>
                    <td>{{$team->id}}</td>
                    <td>{{$team->name}}</td>
                    <td>{{$team->age}}</td>

                        <td>
                            @foreach($team->posts as $post)
                            <label class="" >- {{$post->position}}</label><br>
                            @endforeach
                        </td>



                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="">
                            <i class="fas fa-folder">
                            </i>
                            View
                        </a>
                        <a class="btn btn-info btn-sm" href="{{route('team.edit',$team)}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <form action="{{route('team.destroy', $team)}}" method="post">
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
