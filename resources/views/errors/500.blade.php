@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="alert alert-danger" role="alert">
                <h1><i class="fas fa-exclamation-triangle"></i> 500 Internal Server Error</h1>
                <p>Something Went Wrong, This error is logged.</p>
                <button class="btn btn-default" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>  Go back</button>
                <button class="btn btn-warning" onclick="window.location.href = 'https://github.com/Marfjeh/PPassDB/issues/new?template=bug_report.md'"><i class="fab fa-github"></i> Create issue on Github</button>
              </div>
        </div>
    </div>
</div>
@endsection
