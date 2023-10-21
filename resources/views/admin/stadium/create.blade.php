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
            <h3 class="card-title">Create Stadium</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('stadium.store')}}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Country</label>
                    <input type="text" class="form-control" name="country" placeholder="Enter country" value="{{old('country')}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input type="text" class="form-control" name="city" placeholder="Enter city" value="{{old('city')}}">
                </div>

                   <select class="form-select" aria-label="Default select example">
                       <option selected>Open this select menu</option>
                       <option value="1">One</option>
                       <option value="2">Two</option>
                       <option value="3">Three</option>
                   </select>



            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
