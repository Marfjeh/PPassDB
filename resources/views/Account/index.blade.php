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
                            <button class="btn btn-primary" onclick="window.location.href = '/accounts/create';"><i class="fas fa-plus-circle"></i> New</button>
                            <button class="btn btn-primary" onclick="location.reload();"><i class="fas fa-sync-alt"></i> Reload</button>
                              @if(Auth::user()->role >= 2) <a class="btn btn-primary" href="/groups"><i class="fas fa-hand-point-left"></i> Groups</a>
                              <a class="btn btn-danger" href="/accounts/trashed"><i class="fas fa-trash-alt"></i> Show trashed</a>@endif
                              <a class="btn btn-warning" href="/accounts/queue"><i class="fas fa-exclamation-circle"></i> Change Queue</a>
                          </div>
                        </div>
                        <div class="col">
                            <input class="form-control" placeholder="Search" type="text"/>
                        </div>
                      </div>
                    <br>
                    @if(count($account) <= 0)
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <i class="fas fa-exclamation-triangle"></i> This list is empty. Maybe you don't have the required groups. If you believe this is an error, please contact your administrator.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
                          <tr @if($item->ChangeQueue === 1) class="table-warning" @endif>
                            <th><a href="/accounts/{{$item->id}}">{{$item->name}}</a></th>
                            <td>{{$item->username}}</td>
                              <td>{{$item->WriteGroup}}</td>
                              <td>{{$item->ReadGroup}}</td>
                              <td><a href="#">{{$item->Tagid}}</a></td>
                              <td>
                                  <div class="btn-group" role="group">
                                  <button class="btn btn-primary" title="Show" onclick="window.location.href = '/accounts/{{$item->id}}';"><i class="fas fa-id-card"></i></button>
                                  <button class="btn btn-success" title="edit this" onclick="window.location.href ='/accounts/{{$item->id}}/edit'"><i class="fas fa-edit"></i></button>
                                    <button class="btn btn-warning" title="Add to Change queue" onclick="document.getElementById('form-queue-{{$item->id}}').submit();"><i class="fas fa-exclamation-circle"></i></button>
                                    <button class="btn btn-danger" title="Soft-delete this" onclick="event.preventDefault();
                                    document.getElementById('form-del-{{$item->id}}').submit();" ><i class="fas fa-trash"></i></button>
                                  </div>
                                <form action="{{url('accounts', [$item->id])}}" id="form-del-{{$item->id}}" method="POST">
                                      <input type="hidden" name="_method" value="DELETE">
                                      @csrf
                                 </form>
                                  <form method="POST" action="{{url('accounts', [$item->id])}}" id="form-queue-{{$item->id}}">
                                      <input type="hidden" name="_method" value="PATCH">
                                      <input type="hidden" name="ChangeQueue" id="ChangeQueue" value="@if($item->ChangeQueue === 1) 0 @else 1 @endif">
                                      @csrf
                                  </form>
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
