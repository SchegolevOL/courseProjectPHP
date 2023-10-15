<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page (v2)</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    @vite(['resources/css/app.css',
          'resources/js/app.js',
          'resources/assets/admin/plugins/fontawesome-free/css/all.min.css',
          'resources/assets/admin/dist/css/adminlte.min.css',
          'resources/assets/admin/plugins/jquery/jquery.min.js',
          'resources/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js',
          'resources/assets/admin/dist/js/adminlte.min.js',
          'resources/assets/admin/dist/js/demo.js'])
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <b>Register</b>
        </div>
        {{--Error start--}}
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
        {{--Error end--}}
        <form action="{{route('register.store')}}" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Name" name="name" value="{{old('name')}}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- /.col -->
                <div class="col-4 offset-8">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="#" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
</div><!-- /.card -->
</div>
<!-- /.register-box -->


</body>
</html>

