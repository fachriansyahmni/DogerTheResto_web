@extends('admin.index')

@section('title')
    Registration
@endsection

@section('content')

    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Employee Registration</h4>
            <p class="mb-30">All bootstrap element classies</p>
        </div>
    </div>
        
    <form method="POST" action="/admin/registration">
        @method('POST')
        @csrf
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Username</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="username" placeholder="Username">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" name="email" placeholder="Email" type="text">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Password</label>
            <div class="col-sm-12 col-md-10">
                <input class="form-control" name="password" type="password" placeholder="Password" >
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-12 col-md-2 col-form-label">Role</label>
            <div class="col-sm-12 col-md-10">
                <select class="custom-select col-12" name="role">
                    <option selected="">Choose...</option>
                    <option value="pelayan">Pelayan</option>
                    <option value="kasir">Kasir</option>
                    <option value="koki">Koki</option>
                    <option value="owner">Owner</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Registration</button>
    </form>
@endsection

@section('second-card')
    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
        <div class="clearfix">
            <div class="pull-left">
                <h4 class="text-blue h4">Employee</h4>
                <p class="mb-30">All bootstrap element classies</p>
            </div>
        </div>

        
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $i }}</th>
                    <th scope="row">{{ $user->username }}</th>
                    <th scope="row">{{ $user->email }}</th>
                    <th scope="row">{{ $user->role }}</th>
                    <th scope="row">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal-{{ $user->id }}">
                            Edit
                        </button>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#passwordModal-{{ $user->id }}">
                            Reset Password
                        </button>
                        <form action="/admin/registration/delete/{{ $user->id }}" method="POST">
                            @method("PUT")
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </th>
                </tr>
                <?php $i++; ?>
                
                {{--Edit Modal --}}
                <div class="modal fade" id="editModal-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Edit Employee Data</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="/admin/registration/edit/{{ $user->id }}" method="POST">
                                @method("POST")
                                @csrf
                              <div class="form-group row">
                                  <label class="col-sm-12 col-md-2 col-form-label">Username</label>
                                  <div class="col-sm-12 col-md-10">
                                      <input class="form-control" type="text" name="username" placeholder="Username" value="{{ $user->username }}">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                                  <div class="col-sm-12 col-md-10">
                                      <input class="form-control" type="text" name="email" placeholder="Email" value="{{ $user->email }}">
                                  </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Role</label>
                                <div class="col-sm-12 col-md-10">
                                    <select class="custom-select col-12" name="role">
                                        <option selected="{{ $user->role }}">{{ $user->role }}</option>
                                        <option value=3>Pelayan</option>
                                        <option value=5>Kasir</option>
                                        <option value=4>Koki</option>
                                        <option value=6>Owner</option>
                                    </select>
                                </div>
                            </div>
                              <div class="modal-footer">
                                <button class="btn btn-primary" type="submit">Edit</button>
                              </div>
                          </form>
                        </div>
                        
                      </div>
                    </div>
                  </div>

                  {{--Reset Password Modal --}}
                    <div class="modal fade" id="passwordModal-{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                            <form action="/admin/registration/reset/{{ $user->id }}" method="POST">
                                @method("POST")
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Password</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control" type="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit">Reset</button>
                                  </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
            @endforeach
        
        </tbody>
    </table>
                                
    </div>
    


    
@endsection


