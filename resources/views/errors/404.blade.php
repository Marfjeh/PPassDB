@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="alert alert-danger" role="alert">
                <h1><i class="fas fa-exclamation-triangle"></i> 404 Not Found</h1>
                <p>Content was not found on the server.</p>
                <button class="btn btn-default" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>  Go back</button>
              </div>
        </div>
    </div>
</div>
@endsection
