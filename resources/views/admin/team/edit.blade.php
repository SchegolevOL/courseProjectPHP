@extends('admin.layouts.layout')
@section('content')
    <div class="card card-primary">
        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
        <div class="card-header">
            <h3 class="card-title">Edit Team</h3>
        </div>

        <form action="{{route('team.update', $team)}}" method="post">
            @csrf @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value="{{$team->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Age</label>
                    <input type="text" class="form-control" name="age" placeholder="Enter age" value="{{$team->age}}">
                </div>
                @foreach($posts as $post)
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="posts[]" value="{{$post->id}}"
                        @if($team->posts->contains($post->id)) checked @endif>
                        <label class="form-check-label" for="exampleCheck1">{{$post->position}}</label>
                    </div>
                @endforeach
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection

