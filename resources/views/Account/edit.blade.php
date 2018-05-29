@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">Create a new Account</div>
                    <div class="card-body">
                        <form method="POST" action="/accounts">
                            @csrf
                            <div class="form-group row">
                                <label for="name" class="col-sm-4 col-form-label text-md-right">name</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                    @if ($errors->has('name'))<span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>@endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="url" class="col-sm-4 col-form-label text-md-right">URL</label>
                                <div class="col-md-6">
                                    <input id="url" type="text" class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}" name="url" value="{{ old('url') }}" required autofocus>
                                    @if ($errors->has('url'))<span class="invalid-feedback"><strong>{{ $errors->first('url') }}</strong></span>@endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="username" class="col-sm-4 col-form-label text-md-right">Username</label>
                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" required autofocus>
                                    @if ($errors->has('username'))<span class="invalid-feedback"><strong>{{ $errors->first('username') }}</strong></span>@endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-sm-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('password') }}" required autofocus>
                                    @if ($errors->has('password'))<span class="invalid-feedback"><strong>{{ $errors->first('password') }}</strong></span>@endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="WriteGroup" class="col-sm-4 col-form-label text-md-right">WriteGroup</label>
                                <div class="col-md-6">
                                    <input id="WriteGroup" type="text" class="form-control{{ $errors->has('WriteGroup') ? ' is-invalid' : '' }}" name="WriteGroup" value="{{ old('WriteGroup') }}" required autofocus>
                                    @if ($errors->has('WriteGroup'))<span class="invalid-feedback"><strong>{{ $errors->first('WriteGroup') }}</strong></span>@endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ReadGroup" class="col-sm-4 col-form-label text-md-right">ReadGroup</label>
                                <div class="col-md-6">
                                    <input id="ReadGroup" type="text" class="form-control{{ $errors->has('ReadGroup') ? ' is-invalid' : '' }}" name="ReadGroup" value="{{ old('ReadGroup') }}" required autofocus>
                                    @if ($errors->has('ReadGroup'))<span class="invalid-feedback"><strong>{{ $errors->first('ReadGroup') }}</strong></span>@endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Tag" class="col-sm-4 col-form-label text-md-right">Tag</label>
                                <div class="col-md-6">
                                    <input id="Tag" type="text" class="form-control{{ $errors->has('Tag') ? ' is-invalid' : '' }}" name="Tag" value="{{ old('Tag') }}" required autofocus>
                                    @if ($errors->has('Tag'))<span class="invalid-feedback"><strong>{{ $errors->first('Tag') }}</strong></span>@endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Tag" class="col-sm-4 col-form-label text-md-right">Description (markdown)</label>
                                <div class="col-md-6">
                                    <textarea id="Description" name="Description" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
