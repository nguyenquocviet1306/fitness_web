@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <!-- <input id="name" type="text" class="form-control" name="name"
                                           value="{{ old('name') }}" placeholder="{{ auth()->user()->name }}"
                                           autofocus> -->
                                           <h5> {{ auth()->user()->name }} </h5>
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                   <!--  <input id="email" type="email" class="form-control" name="email"
                                         value="{{ old('email') }}" placeholder="{{ auth()->user()->email }}" >   -->
                                    <h5> {{ auth()->user()->email }} </h5>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">
                                <label for="user_name" class="col-md-4 control-label">User Name</label>

                                <div class="col-md-6">
                                    <!-- <input id="user_name" type="text" class="form-control" name="user_name"
                                           value="{{ old('user_name') }}" placeholder="{{ auth()->user()->user_name }}"> -->

                                    <h5> {{ auth()->user()->user_name }} </h5>
                                    @if ($errors->has('user_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('user_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{--<div class="form-group{{ $errors->has('purpose') ? ' has-error' : '' }}">--}}
                                {{--<label for="purpose" class="col-md-4 control-label">Purpose</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input type="checkbox" class="" name="purpose[]" value="student" checked> Student--}}
                                    {{--<input type="checkbox" class="" name="purpose[]" value="trainer" checked> Trainer--}}
                                    {{--@if ($errors->has('purpose'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('purpose') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                                <label for="birthday" class="col-md-4 control-label">Birthday</label>

                                <div class="col-md-6">
                                    <!-- <input id="birthday" class="form-control" name="birthday"
                                           value="{{ old('birthday') }}" placeholder="{{ auth()->user()->birthday }}"> -->
                                    <h5> {{ auth()->user()->birthday }} </h5>
                                    @if ($errors->has('birthday'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                <label for="address" class="col-md-4 control-label">Address</label>

                                <div class="col-md-6">
                                    <!-- <input id="address" type="text" class="form-control" name="address"
                                          value="{{ old('address') }}" placeholder="{{ auth()->user()->address }}"> -->
                                    <h5> {{ auth()->user()->address }} </h5>
                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                                <label for="weight" class="col-md-4 control-label">Weight</label>

                                <div class="col-md-6">
                                 <!--    <input id="weight" type="number" class="form-control" name="weight"
                                            value="{{ old('weight') }}" placeholder="{{ auth()->user()->weight }}"> -->
                                    <h5> {{ auth()->user()->weight }} </h5>
                                    @if ($errors->has('weight'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('job') ? ' has-error' : '' }}">
                                <label for="job" class="col-md-4 control-label">Job</label>

                                <div class="col-md-6">
                                    <!-- <input id="job" type="text" class="form-control" name="job"
                                    <!--        value="{{ old('job') }}" placeholder="{{ auth()->user()->job }}"> -->
                                    <h5> {{ auth()->user()->job }} </h5>
                                    @if ($errors->has('job'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('job') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            {{--<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">--}}
                                {{--<label for="password" class="col-md-4 control-label">Password</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password" type="password" class="form-control" name="password" required>--}}

                                    {{--@if ($errors->has('password'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('password') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="form-group">--}}
                                {{--<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input id="password-confirm" type="password" class="form-control"--}}
                                           {{--name="password_confirmation" required>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="button" class="btn btn-primary" onclick="window.location='{{ route("editprofile", auth()->user()->id)  }}'">Edit Profile</button>

                                    <button type="submit" class="btn btn-primary">
                                        Change password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
