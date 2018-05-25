@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">PPassDB</h1>
      <p class="lead">It does passwords... but better</p>
      <hr class="my-4">
      @guest
      <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
      @else
  
      @endguest
    </div>
  </div>
@endsection
