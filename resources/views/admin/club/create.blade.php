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
            <h3 class="card-title">User Registration</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('club.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter title" value="{{old('title')}}">
                </div>

                @foreach($teams as $team)
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="teams[]" value="{{$team->id}}">
                        <label class="form-check-label" for="exampleCheck1">{{$team->name}}</label>
                    </div>
                @endforeach

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <input name ="emblem" type="file" class="form-control" >
                    <div  class="form-text"></div>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
