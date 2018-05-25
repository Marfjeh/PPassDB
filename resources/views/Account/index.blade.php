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
                        </div>
                        <div class="col">
                            <input class="form-control" placeholder="Search" type="text"/>
                        </div>
                      </div>
                    <br>
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
                          <tr>
                            <th><a href="#">Unifi controller server</a></th>
                            <td>Admin</td>
                            <td>LiveServers</td>
                            <td>Marvin</td>
                            <td><a href="#">SSH</a></td>
                            <td>
                                <div class="btn-group" role="group">
                                  <button class="btn btn-primary" title="Show"><i class="fas fa-id-card"></i></button>
                                  <button class="btn btn-success" title="edit this"><i class="fas fa-edit"></i></button>
                                  <button class="btn btn-warning" title="Add to Change queue"><i class="fas fa-gavel"></i></button>
                                  <button class="btn btn-danger" title="Soft-delete this"><i class="fas fa-trash"></i></button>
                                </div>
                              </td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
