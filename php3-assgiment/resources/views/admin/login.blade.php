<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Admin Login</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{!! asset('admin_assets/plugins/fontawesome-free/css/all.min.css')!!}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{!! asset('admin_assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')!!}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{!! asset('admin_assets/dist/css/adminlte.min.css')!!}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="login-page" style="min-height: 512.391px;">
<div class="login-box">
    <div class="login-logo">
        <a href=""><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="" method="post">
                @csrf
                @if(session('error'))
                    <p class="text-danger">
                        {{session('error')}}
                    </p>
                @endif
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email">

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>

                </div>
                @error('email')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="input-group mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">

                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>

                </div>
                @error('password')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" name="_token" value="_token" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>



        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{!! asset('admin_assets/plugins/jquery/jquery.min.js') !!}"></script>
<!-- Bootstrap 4 -->
<script src="{!! asset('admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
<!-- AdminLTE App -->
<script src="{!! asset('admin_assets/dist/js/adminlte.min.js') !!}"></script>


</body>
</html>
