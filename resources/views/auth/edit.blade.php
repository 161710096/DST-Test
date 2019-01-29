@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit Data User 
            </div>
            <div class="panel-body">
                <form action="{{ route('user.update', $data->id) }}" method="post" >
                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="control-label">Nama</label> 
                            <input id="name" type="text" class="form-control" name="name" value="{{ $data->name }}" required autofocus>
                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                    </div>
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="control-label">E-mail Address</label>
                            <input id="email" type="email" class="form-control" name="email" value="{{ $data->email }}" required readonly="">
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="control-label">Password</label>
                            <input id="password" type="password" class="form-control" onkeyup='check();' name="password">
                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                    </div>
                    <div class="form-group">
                        <label class="control-label">Confirm Password</label>
                            <input id="confirm_password" type="password" onkeyup="check()" class="form-control" name="password_confirmation">
                            <span id='message'></span>
                    </div>
                    <button type="submit" class="btn btn-primary" id="submit">
                        Update
                    </button>
                    <a href="{{route('user.index')}}" class="btn btn-danger pull-right">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</form>
@endsection