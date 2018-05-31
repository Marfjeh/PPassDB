@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Account: {{$account->name}}</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="btn-group" role="group">
                                    <button class="btn btn-primary" onclick="window.history.back();"><i class="fas fa-arrow-left"></i></button>
                                    <button class="btn btn-primary" onclick="location.reload();"><i class="fas fa-sync-alt"></i></button>
                                </div>
                            </div>
                            <div class="col">
                                <input class="form-control" placeholder="Search" type="text"/>
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group row">
                            <p class="col col-form-label text-md-right">URL:</p>
                            <div class="col-md-6">
                                <a href="{{$account->url}}" class="form-control"  target="_blank">{{$account->url}}</a>
                            </div>
                        </div>
                        <div class="form-group row">
                            <p class="col col-form-label text-md-right">Username:</p>
                            <div class="col-md-6">
                                <input class="form-control" value="{{$account->username}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <p class="col col-form-label text-md-right">password:</p>
                            <div class="col-md-6">
                                <input class="form-control" type="password" id="password" value="{{$account->password}}" readonly onmouseover='document.getElementById("password").type="text";' onmouseleave='document.getElementById("password").type="password";'>
                            </div>
                        </div>
                        <div class="form-group row">
                            <p class="col col-form-label text-md-right">WriteGroup:</p>
                            <div class="col-md-6">
                                <p class="form-control">{{$account->WriteGroup}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <p class="col col-form-label text-md-right">ReadGroup</p>
                            <div class="col-md-6">
                                <p class="form-control">{{$account->ReadGroup}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <p class="col col-form-label text-md-right">Tags:</p>
                            <div class="col-md-6">
                                <p class="form-control">{{$account->Tagid}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <p class="col col-form-label text-md-right">Description:</p>
                            <div class="col-md-6">
                                <p class="form-control">{{$account->Description}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <p class="col col-form-label text-md-right">Created at:</p>
                            <div class="col-md-6">
                                <p class="form-control">{{$account->created_at}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <p class="col col-form-label text-md-right">Updated at:</p>
                            <div class="col-md-6">
                                <p class="form-control">{{$account->updated_at}}</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <p class="col col-form-label text-md-right">Deleted at:</p>
                            <div class="col-md-6">
                                <p class="form-control">{{$account->deleted_at}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
