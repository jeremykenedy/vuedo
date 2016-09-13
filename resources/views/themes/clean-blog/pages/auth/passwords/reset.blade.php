@extends('themes.clean-blog.layouts.default')

@section("header")
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('/img/home-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Vuedo Deluxe</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

<!-- Main Content -->
@section('content')
    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

        <h2>Reset Password</h2>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="row">
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="alert alert-danger">
                            <strong>The following errors occured:<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="row">
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-1">
                    <form role="form" method="POST" action="{{ url('/password/reset') }}" class="form-horizontal">

                        {!! csrf_field() !!}

                        <input type="hidden" name="token" id="token" value="{{$token}}">

                        <div class="form-group has-feedback">
                            <label for="email" class="col-sm-4 control-label">Email Address</label>
                            <div class="col-sm-6">
                                <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control" placeholder="Email Address" required >
                                <span class="glyphicon glyphicon-envelope form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="password" class="col-sm-4 control-label">Password</label>
                            <div class="col-sm-6">
                                <input type="password" name="password" id="password" value="" class="form-control" placeholder="Password" required >
                                <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="password_confirmation" class="col-sm-4 control-label">Confirm Password</label>
                            <div class="col-sm-6">
                                <input type="password" name="password_confirmation" id="password_confirmation" value="" class="form-control" placeholder="Confirm Password" required >
                                <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6 col-sm-offset-4">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
