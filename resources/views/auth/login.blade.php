<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Scripts -->
    {{--    @vite(['resources/sass/app.scss', 'resources/js/app.js'])--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>

<section class="sign-in" style="margin-top: 50px;">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="{{url('signup-image.jpg')}}" alt="sing up image"></figure>
            </div>
            <div class="signin-form">
                <h2 class="form-title">Sign up</h2>
                @if(Session::has('email'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('email') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('login') }}" class="register-form" id="login-form">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="email"  placeholder="Enter Email" value="{{old('email')}}" required />
                        @error('email')
                        <span style="color: red;"> {{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input name="password" type="password" required placeholder="Enter Password" />
                    </div>
                    <div class="form-group">
                        <select class="form-control select2 select2-hidden-accessible" name="role" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option  data-select2-id="3">Login as</option>
                                <option value="admin" data-select2-id="3">Manager</option>
                                <option value="teacher" data-select2-id="3">Teacher</option>
                                <option value="student" data-select2-id="3">Student</option>
                                <option value="parent" data-select2-id="3">Parent</option>
                        </select>
                    </div>

                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
