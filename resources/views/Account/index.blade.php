@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Passwords</div>
                <div class="card-body">
                     
                    <div class="row">
                        <div class="col">
                          <div class="btn-group" role="group">
                            <button class="btn btn-primary" onclick="window.location.href = '/accounts/create';"><i class="fas fa-plus-circle"></i></button>
                            <button class="btn btn-primary" onclick="location.reload();"><i class="fas fa-sync-alt"></i></button>
                          </div>
                        </div>
                        <div class="col">
                            <input class="form-control" placeholder="Search" type="text"/>
                        </div>
                      </div>
                    <br>
                    @if(count($account) <= 0)
                    <div class="alert alert-warning" role="alert">
                        <i class="fas fa-exclamation-triangle"></i> This list is empty. Maybe you don't have the required groups. Please contact your administrator.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                    </div>
                    @endif
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Title</th>
                            <th scope="col">User</th>
                            <th scope="col">WriteGroup</th>
                            <th scope="col">ReadGroup</th>
                            <th scope="col">Tags</th>
                            <th scope="col">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($account as $item)
                          <tr>
                            <th><a href="#">{{$item->name}}</a></th>
                            <td>{{$item->username}}</td>
                              <td>{{$item->WriteGroup}}</td>
                              <td>{{$item->ReadGroup}}</td>
                              <td><a href="#">{{$item->Tagid}}</a></td>
                              <td>
                                  <div class="btn-group" role="group">
                                  <button class="btn btn-primary" title="Show" onclick="window.location.href = '/accounts/{{$item->id}}';"><i class="fas fa-id-card"></i></button>
                                    <button class="btn btn-success" title="edit this"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-warning" title="Add to Change queue"><i class="fas fa-gavel"></i></button>
                                    <button class="btn btn-danger" title="Soft-delete this"><i class="fas fa-trash"></i></button>
                                  </div>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
