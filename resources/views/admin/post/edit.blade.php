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
            <h3 class="card-title">Post Edit</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('post.update', $post)}}" method="post">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Position</label>
                    <input type="text" class="form-control" name="position" placeholder="Enter position"
                           value="{{$post->position}}">
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
    </div>
@endsection

