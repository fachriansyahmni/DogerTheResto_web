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
                        <button type="button" class="btn btn-primary">Edit</button>
                        <button type="button" class="btn btn-info">Reset Password</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </th>
                </tr>
                <?php $i++; ?>
            @endforeach
        
        </tbody>
    </table>
                                
    </div
@endsection

