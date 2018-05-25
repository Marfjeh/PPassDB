@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="alert alert-danger" role="alert">
                <h1><i class="fas fa-exclamation-triangle"></i> 403 Forbidden</h1>
                <p>Access is denied, this may cause that you dont have the required groups to read and or write to.</p>
                <button class="btn btn-default" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>  Go back</button>
              </div>
        </div>
    </div>
</div>
@endsection
